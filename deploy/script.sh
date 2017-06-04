#!/bin/bash
function install() {
  ssh "$user"@"$host" "bash -s $db_user $db_pass $db_name" << 'EOF'

  debconf-set-selections <<< "mysql-server-5.7 mysql-server/root_password password $2"
  debconf-set-selections <<< "mysql-server-5.7 mysql-server/root_password_again password $2"

  add-apt-repository ppa:ondrej/php
  apt-get -qq update
  apt-get -qq install zip php7.1 php7.1-curl php-xml php-mbstring php-mysql composer apache2 mysql-server-5.7

  mysql -u$1 -p$2 -e "create database $3"

  cd /var/www/html
  git clone https://github.com/InteNs/oosterplas-doet-k.git
  sudo chown -R www-data:www-data oosterplas-doet-k
  cd oosterplas-doet-k
  git checkout $(git describe --tags)

  composer install
EOF
}

#==========================================
host="$1"
user='root'
printf -v db_user %q "root"
printf -v db_pass %q "oosterplas"
printf -v db_name %q "oosterplas"

install

scp .env "$user"@"$host":/var/www/html/oosterplas-doet-k
scp oosterplas-doet-k.conf "$user"@"$host":/etc/apache2/sites-available

ssh "$user"@"$host" << 'EOF'
cd /var/www/html/oosterplas-doet-k
php artisan key:generate
php artisan migrate --seed --force
a2ensite oosterplas-doet-k
service apache2 reload
EOF

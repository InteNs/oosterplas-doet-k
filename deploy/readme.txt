### installeer de oosterplas website

zorg dat je een ubuntu server hebt met een publiek ip-adres
zorg dat je een domein hebt.

stap 1:
download de Source code.zip van de laatste uitgave hier:

https://github.com/InteNs/oosterplas-doet-k/releases

zorg dat je het pad naar dit mapje weet

stap 2:
open een terminal en typ het volgende:

cd "/pad/naar/het/mapje"

cd "deploy"

stap3:
in het bestand "oosterplas-doet-k.conf" pas je het volgende aan:
achter ServerName zet je de gewenste domeinnaam voor de website

stap4:
zorg dat je het ip-adres van de server bij de hand hebt

nog steeds in dezelfde terminal typ het volgende

sh script.sh "ip-adres-van-server"

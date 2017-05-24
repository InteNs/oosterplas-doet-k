<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <i class="fa fa-bars show-responsive-menu" aria-hidden="true" onclick="showMenu(1)"></i>
                <ul class="nav navbar-nav hide-responsive">
                    <li class="active">
                        <a href="/">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            Over ons
                        </a>
                    </li>
                    <li>
                        <a href="/evenementen">
                            Evenementen
                        </a>
                    </li>
                    <li>
                        <a href='/partners'>
                            Bedrijven
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Buurtbewoners
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Notulen
                        </a>
                    </li>
                    <li>
                        <a href="/contact">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="social-media">
                    <li>
                        <a href="/">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            <i class="fa fa-at" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<div id="responsive-menu">
    <span class="close" onclick="showMenu(0)">
        X
    </span>
    <ul>
        <li>
            <a href="#">
                Home
            </a>
        </li>
        <li>
            <a href="#">
                Over ons
            </a>
        </li>
        <li>
            <a href="#">
                Evenementen
            </a>
        </li>
        <li>
            <a href="#">
                Bedrijven
            </a>
        </li>
        <li>
            <a href="#">
                Buurtbewoners
            </a>
        </li>
        <li>
            <a href="#">
                Notulen
            </a>
        </li>
        <li>
            <a href="#">
                Contact
            </a>
        </li>
    </ul>
</div>
<!-- Rainbow -->
<div class="rainbow no-padding">
    <img class="home-img" src="/images/rainbow.png">
</div>
<script>
    function showMenu(i) {
        if (i == 1) {
            document.getElementById("responsive-menu").style.display = 'block';
        } else {
            document.getElementById("responsive-menu").style.display = 'none';
        }
    }
</script>

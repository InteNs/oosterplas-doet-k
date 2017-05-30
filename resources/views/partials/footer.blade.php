<style>
</style>

<footer class="container-fluid">
        <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="address">
                <strong>Stichting OosterplasDOET!<br></strong>
                <div class="infolist">
                    <dt><br>Adres:</dt>
                    <dd class="address">
                        <p translate="no" itemscope itemtype="http://schema.org/PostalAddress">
                            <span itemprop="streetAddress"> {{ $settings->address }} </span><br>
                            <span itemprop="postalCode"> {{ $settings->zipcode }} </span>
                        </p>
                    </dd>
                </div>
                <strong>RSIN nummer:</strong> {{ $settings->{'RSIN-number'} }}<br>
                <strong>KvK nummer:</strong> {{ $settings->{'KvK-number'} }}<br>
                <strong>SBI-code:</strong> {{ $settings->{'SBI-code'} }}<br>
                <strong><br>Emailadres:</strong><br>{{ $settings->email }}<br>
            </div></div>
        <div class="col-md-2 col-md-auto">
            <div class="links">
                <p>Over OosterplasDOET!:</p>
                <a href="/contact">Wie zijn wij</a><br>
                <a href="/contact">Over ons</a><br>
                <a href="/contact">Duurzaamheid</a><br>
                <a href="/contact">Verantwoord</a><br>
            </div></div>
        <div class="col-md-2 col-md-auto">
            <div class="links">
                <p>Vragen aan OosterplasDOET!:</p>
                <a href="/contact">Contact</a><br>
                <a href="/contact">FAQ</a><br>
                <a href="/contact">Cookies</a><br>
            </div>
        </div>
        <div class="col-md-2 col-md-auto">
            <div class="links">
                <p>Officiële stukken:</p>
                <a href="/contact">Notulen</a><br>
                <a href="/contact">Doelstelling</a><br>
                <a href="/contact">Beleidsplan</a><br>
                <a href="/contact">Activiteitenplan</a><br>
            </div>
        </div>
        </div>
</footer>

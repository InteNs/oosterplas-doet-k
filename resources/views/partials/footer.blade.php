<style>
</style>

<footer class="container-fluid">
    <div class="address">
        <adress>
            <br>
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
        </adress>
    </div>
        <a href="mailto:someone@example.com"></a>
</footer>

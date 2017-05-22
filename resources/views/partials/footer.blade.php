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


        <div class="twitter col-md-4">
            <a class="twitter-timeline" data-lang="nl" data-height="500"
               href="https://twitter.com/OosterplasDoet"
               data-chrome="nofooter">Tweets by OosterplasDoet</a>
            <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>

        <div class="facebook col-md-4">
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Foosterplasdoet&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=false&appId"
                height="500"  style="border:none;overflow:hidden;width:100%" scrolling="no" frameborder="0" allowTransparency="true">
        </iframe>
        </div>
        <br>

</footer>

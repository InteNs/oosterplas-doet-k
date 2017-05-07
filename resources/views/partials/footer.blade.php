<style>
</style>

<footer class="container-fluid">
    <div class="row">
        <div class="col-md-4 col-sm-12" style="text-align: left; line-height: 40px;">
            <br>
            <strong>stichting OosterplasDOET!</strong><br>

            <strong>Adres:</strong> {{ $settings->address }}<br>

            <strong>Postcode:</strong> {{ $settings->zipcode }}<br>

            <strong>Emailadres:</strong> {{ $settings->email }}<br>

            <strong>RSIN nummer:</strong> {{ $settings->{'RSIN-number'} }}<br>

            <strong>KvK nummer:</strong> {{ $settings->{'KvK-number'} }}<br>

            <strong>SBI-code:</strong> {{ $settings->{'SBI-code'} }}<br>
        </div>

        <br>

        <div class="col-md-4">
            <a class="twitter-timeline" data-lang="nl" data-height="500"
               href="https://twitter.com/OosterplasDoet"
               data-chrome="nofooter">Tweets by OosterplasDoet</a>
            <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <div class="col-md-4">
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Foosterplasdoet&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=false&appId"
                height="500"  style="border:none;overflow:hidden;width:100%" scrolling="no" frameborder="0" allowTransparency="true">
        </iframe>
        </div>
        <br>
    </div>
</footer>

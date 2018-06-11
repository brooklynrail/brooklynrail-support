<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="nav">

            <a href="/?=support">Current Issue</a>

            <a href="/about/?=support">About the Rail</a>

            <a href="https://store.brooklynrail.org/store/category/1?=support">Subscribe</a>

            <a href="/advertise/?=support">Advertise</a>

            <a href="/where-to-find-us/?=support">Find the Rail</a>

            <a href="https://www.instagram.com/brooklynrail/?hl=en?=support">Instagram</a>

        </div>
      </div>
    </div>
  </div>
</footer>

    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/js/custom.js"></script>
    
    <?php// require_once("includes/braintree-dropin.php"); ?>
    <?php require_once("includes/braintree-client.php"); ?>


    <!-- Google Analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-24931975-1', 'auto');
      ga('send', 'pageview');

      /**
       * Function that tracks a click on an outbound link in Google Analytics.
       * This function takes a valid URL string as an argument, and uses that URL string
       * as the event label.
       * https://support.google.com/analytics/answer/1136920?hl=en
       */
      var trackOutboundLink = function(url) {
        ga('send', 'event', 'outbound_ad', 'click', url, {
          'hitCallback': function () { document.location = url;
        } });
      }
    </script>

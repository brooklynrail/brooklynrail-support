<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

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

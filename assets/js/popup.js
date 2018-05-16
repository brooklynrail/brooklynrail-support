(function($){
  jQuery(document).ready(function() {

    // popup JS
    $( ".popup-close, .popup-overlay" ).click(function() {
      $("#support_popup").hide();
    });

    $( ".popup" ).click(function() {
      window.location.href = "https://brooklynrail.org/support?=p1";
    });

  });
})(jQuery);

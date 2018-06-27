(function($){
  jQuery(document).ready(function() {

    // A minimal slideshow for the #quote-box
    var currentIndex = 0,
    items = $('#quote-frame .quote'),
    itemAmt = items.length;
    $('#quote-frame .quote:first-child').addClass('active');

    function cycleItems() {
      var item = $('#quote-frame .quote').eq(currentIndex);
      items.removeClass('active');
      item.addClass('active');
    }
    var autoSlide = setInterval(function() {
      currentIndex += 1;
      if (currentIndex > itemAmt - 1) {
        currentIndex = 0;
      }
      cycleItems();
    }, 4000);

    // Determine which is the tallest of the .quote and set all the rest to that same height
    var maxHeight = -1;
    $('#quote-frame .quote').each(function() {
      maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
    });
    var qb = $('#quote-frame .paper');
    $(qb).height(maxHeight);

    // popup JS
    $( ".popup-close" ).click(function() {
      $("#support_popup").hide();
    });


    // send-friend

    // Validate Email(s)
    function validatemail(mail) {
      var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      if (mail.match(mailformat)) {
        return true;
      } else {
        return false;
      }
    }


    $( '#email' ).keyup(function() {
      var email = $(this).val();
      var valid = validatemail(email.trim());
      if (valid == true) {
        $(this).addClass('is-valid').removeClass('is-invalid').focus();
        $('#submit-button').removeAttr('disabled');
      } else {
        $(this).addClass('is-invalid').removeClass('is-valid').focus();
        $('#submit-button').prop('disabled', true);
      }
    });

    $( '#emails' ).keyup(function() {
      var raw = $(this).val();
      var emails = raw.split(",");
      var valid = true;
      emails.forEach(function (email) {
        var v = validatemail(email.trim());
        if (v == false) {
          valid = false;
        }
      });
      if (valid == true) {
        $(this).addClass('is-valid').removeClass('is-invalid').focus();
        $('#submit-button').removeAttr('disabled');
      } else {
        $(this).addClass('is-invalid').removeClass('is-valid').focus();
        $('#submit-button').prop('disabled', true);
      }
      $('#submit-button').attr('href', build_email(raw))
    });

    function build_email(emails) {
      var subject = "KEEP THE RAIL ALIVE AND FREE";
      var body = "hello!";
      var string = 'mailto:'+emails+'?subject='+subject+'?body='+body+'';
      var href = encodeURI(string);
      return href;
    }


  });
})(jQuery);

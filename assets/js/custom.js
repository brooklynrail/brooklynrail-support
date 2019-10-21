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

    // popup JS
    // On click, change the amount that'll be donated
    $( ".amt-select button" ).click(function(event) {
      event.preventDefault();
      change_selected($(this));
      var current_btn = $(this);
      var current_btn_amt = $(this).data('amt');
      $('#amount').val(current_btn_amt);
    });

    function change_selected(el){
      $('.amt-select button').each(function() {
        $(this).removeClass('active');
        $(el).addClass('active');
      });
    }

  });
})(jQuery);

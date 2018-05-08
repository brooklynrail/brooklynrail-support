(function($){
  jQuery(document).ready(function() {

    // A minimal slideshow for the #quote-box
    var currentIndex = 0,
    items = $('#quote-box .quote'),
    itemAmt = items.length;
    $('#quote-box .quote:first-child').addClass('active');

    function cycleItems() {
      var item = $('#quote-box .quote').eq(currentIndex);
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
    $('#quote-box .quote').each(function() {
      maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
    });
    $('#quote-box .quote').each(function() {
      $(this).height(maxHeight);
    });

  });
})(jQuery);

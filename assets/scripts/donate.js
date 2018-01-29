(function($) {
  if (!$('.donate-options').length) {
    return;
  }

  $('.donate-input-custom').on('click', function(e) {
    $(this).prev().prop('checked', true);
  });
})(jQuery);

(function($) {
  if (!$('.donate-options').length) {
    return;
  }

  $('.donate-input-custom').on('click', function(e) {
    $(this).prev().prop('checked', true);
  });

  $('.donate-value').on('change', function(e) {
    var text = $(this).parent().data('label') /*|| ''*/;

    $('.donate-label-amount-text').text(text);
  }).trigger('change');

})(jQuery);

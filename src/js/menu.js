(function ($) {
  $(document).ready(function () {

    $('.menu-expander').click(
	    function () {
				$('#navigation').toggleClass('open');
			}
    );
	});
})(jQuery);
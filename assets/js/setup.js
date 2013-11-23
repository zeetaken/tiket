/**
 * @author Novan
 */
$(function() {
	
	$('.carousel').carousel({
		interval : 5000
	// pause:"hover"
	});

	var secondMenu = $('#second-menu');
	   var top       = secondMenu.length ? secondMenu.offset().top : 0;
	   var height    = secondMenu.length ? secondMenu.outerHeight() : 0;
	   $(window).scroll(function () {
	      var scrollTop = $(this).scrollTop();

	     if (secondMenu.length) {
	         if ( scrollTop >= top ) {
	           $(document.body).css('padding-top', height);
	           secondMenu.addClass("navbar-fixed-top");
	        } else {
	           $(document.body).css('padding-top', '');
	           secondMenu.removeClass("navbar-fixed-top");
	        }
	     }

	     if ( scrollTop <= 0 ) {
	        $('.scrolltop').hide();
	     } else {
	        $('.scrolltop').show();
	     }
	   }).scroll();

});
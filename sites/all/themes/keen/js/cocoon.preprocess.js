(function($){
  Drupal.behaviors.ccnpreprocess1 = {
    attach: function (context, settings) {
	function center_bg(){
		$('.center-image').each(function(){
		  var bgSrc = $(this).attr('src');
		  $(this).parent().css({'background-image':'url('+bgSrc+')'});
		  $(this).remove();
		});
	}
	center_bg();

      /* MENU-SPECIFIC */
        $('.front ul.ccn-main-menu li a').addClass('scroll-to-link');
        $('.front ul.ccn-main-menu li a.no-scroll').removeClass('scroll-to-link');
        /* -------------------
        Removing URL before hash
        ---------------------*/
          $('.front ul.ccn-main-menu li a.scroll-to-link').each(function(){
            $(this).attr('href','#'+$(this).attr('href').split('#')[1]);
          });
      /* DRUPAL */
        $('.form-text').addClass('input-style');
        $('.form-textarea').addClass('tx-style');
      /* FIX */
        $('.alert button.close').click(function(){
          $(this).parent().remove();
        });
        $('.page-user #block-system-main').addClass('container');
        $('.page-user #block-system-main > div').addClass('col-md-12');
        $('.page-user #block-system-main > div > form').addClass('contact-form');
        $('nav .navigation a').addClass('animsition-link').wrapInner('<span></span>');
      $(window).load(function() {
        $('.ccn-nrg-blast-out').each(function(){
          var $ccnnrgblastout = $(this).find('img').attr('src');
          $(this).find('a').attr('href', $ccnnrgblastout);
        });
        $('.ccn-nrg-blast-out').each(function(){
          var image = new Image();
          image.src = $(this).find('img').attr("src");
          $(this).find('a').attr('data-size', image.width + 'x' + image.height);
        });
      });
    }
  };
}(jQuery));
jQuery( document ).ready(function( $ ) {
  // Inside of this function, $() will work as an alias for jQuery()
  // and other libraries also using $ will not be accessible under this shortcut
  // https://codex.wordpress.org/Function_Reference/wp_enqueue_script#jQuery_noConflict_Wrappers

  // Touch Device Detection
	var isTouchDevice = 'ontouchstart' in document.documentElement;
	if( isTouchDevice ) {
		$('body').removeClass('no-touch');
	}

  // Browser detection via Bowser (https://github.com/lancedikson/bowser) - add detection as needed
  if( bowser.msie && bowser.version == 11 ) {
    $('body').addClass('ie-11');
  } else if ( bowser.safari ) {
    $('body').addClass('safari');
  }

	// Nifty Nav
  $('#nifty-nav-toggle').niftyNav();

	// Tilt JS
	$('.js-tilt').tilt({
    maxTilt: 10,
})

	// Smooth Anchor Link Scrolling
	$('.anchor-scroll').on('click', function(e) {
		e.preventDefault();

		// Store hash
    var hash = this.hash;

    $('html, body').animate({
      scrollTop: $(hash).offset().top,
    }, 1200, function(){

      window.location.hash = hash;
    });
	});

	// First 50/50 block load
	$('.flexible-content').find('.fifty-fifty').first().find('.fifty-fifty__image').attr('data-aos-delay', '1600');
	$('.flexible-content').find('.fifty-fifty').first().find('.fifty-fifty__content').attr('data-aos-delay', '1600');

	// AOS animations
	AOS.init({
      duration: 600,
			offset: -100,
      easing: 'ease-in-out-quart',
      delay: 200,
			disable: 'mobile',
			once: 'true',
    });

	function explode(){
	  $('.work-page > div > ol > li').removeAttr('data-aos');
	}
	setTimeout(explode, 1300);



	// Slick Slider
  // iPhone
  $('.iphone-slider').slick({
    autoplay: true,
    autoplaySpeed: 3000,
    slidesToShow: 1,
    adaptiveHeight: true,
		fade: true,
    dots: true,
		arrows: false,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          arrows: false,
        },
      },
    ],
  });

});

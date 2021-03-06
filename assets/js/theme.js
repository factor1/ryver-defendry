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

	// Mobile Nav submenu
	$('.menu-item-has-children').click(function(){
		$(this).find('.sub-menu').slideToggle();
	});

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

	// Remodal Forms Submit button
	// Set Submit Button to disabled until required fields are filled
	$('.gform_button[value="Submit"]').attr('disabled', 'disabled');

	// Check required fields on "Tell Me More" Form and then remove the disabled from the submit button
	$('.remodal #gform_1 input[aria-required="true"]').keyup(function() {

	  var empty = false;
	  $('.remodal #gform_1 input[aria-required="true"]').each(function() {
	    if ($(this).val() == '') {
	      empty = true;
	    }
	  });

	  if (empty) {
	    $('#gform_1 .gform_button[value="Submit"]').attr('disabled', 'disabled'); // updated according to http://stackoverflow.com/questions/7637790/how-to-remove-disabled-attribute-with-jquery-ie
	  } else {
	    $('#gform_1 .gform_button[value="Submit"]').removeAttr('disabled'); // updated according to http://stackoverflow.com/questions/7637790/how-to-remove-disabled-attribute-with-jquery-ie
	  }
});
// Check required fields on "Learn More" Form and then remove the disabled from the submit button
$('.remodal #gform_2 input[aria-required="true"]').keyup(function() {

	var empty = false;
	$('.remodal #gform_2 input[aria-required="true"]').each(function() {
		if ($(this).val() == '') {
			empty = true;
		}
	});

	if (empty) {
		$('#gform_2 .gform_button[value="Submit"]').attr('disabled', 'disabled'); // updated according to http://stackoverflow.com/questions/7637790/how-to-remove-disabled-attribute-with-jquery-ie
	} else {
		$('#gform_2 .gform_button[value="Submit"]').removeAttr('disabled'); // updated according to http://stackoverflow.com/questions/7637790/how-to-remove-disabled-attribute-with-jquery-ie
	}
});

// Stop video if modal is closed
$('.remodal-close').click(function() {
	 var video01 = $("#video01 iframe").attr("src");
	 $("#video01 iframe").attr("src","");
	 $("#video01 iframe").attr("src",video01);
});

$('.remodal-wrapper').click(function() {
	 var video01 = $("#video01 iframe").attr("src");
	 $("#video01 iframe").attr("src","");
	 $("#video01 iframe").attr("src",video01);
});

// Fix Nav Bar
$(window).scroll(function () {
		//if you hard code, then use console
		//.log to determine when you want the
		//nav bar to stick.
		//console.log($(window).scrollTop())
	if ($(window).scrollTop() > 50) {
		$('.header').addClass('header--fixed');
	}
	if ($(window).scrollTop() < 51) {
		$('.header').removeClass('header--fixed');
	}
});

// Search Bar in Header
$('.defendry-search-toggle').click(function() {
	$('#modal-search').slideToggle('fast');
});

// Youtube Thumbnail HighRes
$('iframe.yt-hd-thumbnail').youTubeHDThumbnail({
	darkenThumbnail: true,
});

});

<?php // CSS & JavaScript Enqueues

/**
 * Defer jQuery Parsing using the HTML5 defer property
 */

if (!(is_admin() )) {
  function defer_parsing_of_js ( $url ) {
    if ( FALSE === strpos( $url, '.js' ) ) return $url;
    if ( strpos( $url, 'jquery.js' ) ) return $url;
    // return "$url' defer ";
    return "$url' defer onload='";
  }
  add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );
}

/**
 * Link to all theme CSS files.
 */
function prelude_theme_scripts() {
  // Google Fonts
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Overpass:300,400,600,700,900', array(), THEME_VERSION );

  // CSS
  wp_enqueue_style('prelude-css', get_template_directory_uri() . '/assets/css/theme.min.css', array(), THEME_VERSION );
  wp_enqueue_style('aos-css', get_template_directory_uri() . '/assets/css/aos.min.css', array(), THEME_VERSION );
  wp_enqueue_style('remodal-css', get_stylesheet_directory_uri() . '/assets/css/remodal.min.css', array(), THEME_VERSION );
  wp_enqueue_style('youtube-thumbnail-css', get_stylesheet_directory_uri() . '/assets/css/youtube-thumbnail.min.css', array(), THEME_VERSION );


  // JS
  wp_enqueue_script('prelude-js', get_template_directory_uri() . '/assets/js/theme.min.js', array('jquery'), THEME_VERSION, true );
  wp_enqueue_script('youtube-thumbnail-js', get_template_directory_uri() . '/assets/js/youtube-thumbnail.min.js', array('jquery'), THEME_VERSION, true );
  wp_enqueue_script( 'typekit', '//use.typekit.net/jws5pcx.js', array(), '1.0.0' );

}
add_action( 'wp_enqueue_scripts', 'prelude_theme_scripts' );

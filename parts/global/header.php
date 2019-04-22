<?php
/**
 * Header template part
 *
 * Template part used globaly
 *
 * @package Defendry
 * @author Dana Malkin <danamalkin.com>
 * @since 0.0.1
 */
 // Variables
?>

<header class="container header">
  <div class="row row--full-width row--align-items-center row--justify-content-center">
    <div class="col-3 md-col-4 sm-col-10">
      <a href="<?php echo home_url(); ?>">
        <img class="header__logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/Defendry-Logo.svg" alt="Defendry" />
      </a>
    </div>
    <div class="col-6 sm-col-6 lg-only text-right header__navigation-wrap">
      <?php // Primary Menu
        wp_nav_menu( array('theme_location' => 'primary', 'container' => 'nav', 'container_class' => 'primary-nav') );
      ?>
    </div>
    <div class="col-3 sm-col-2 lg-only text-right header__utility-wrap">
      <a class="defendry-search" href="#modal-search" onmouseup="setTimeout(function(){document.getElementById('rcp-search').focus()},10);"><i class="fa fa-search"></i></a>
      <a class="button button--primary" href="#tell-me-more">Tell Me More</a>
    </div>

  <?php // Small Navigation ?>
    <div class="sm-col-2 md-col-8 nifty-nav-wrap">
      <a href="#" id="nifty-nav-toggle"><span></span></a>
    </div>
  </div>

  <!-- Search Bar -->
  <div class="remodal remodal--search" data-remodal-id="modal-search">
	   <button data-remodal-action="close" class="remodal-close">X</button>
  	<form role="search" method="get" class="search-form" action="<?php get_template_directory_uri(); ?>/">
  		<label>
  			<span class="screen-reader-text">Search:</span>
  			<input type="search" id="rcp-search" class="search-field" placeholder="Search..." value="" name="s">
  		</label>
  		<button type="submit" class="search-submit" value="Search">
  			<i class="fa fa-search"></i>
  		</button>
  	</form>
  	<?php // echo do_shortcode('[ivory-search id="2344" title="Default Search Form"]'); ?>
  </div>


  <div class="nifty-panel">
    <div class="container">
      <div class="row">
        <?php // Mobile Menu
          wp_nav_menu(array('theme_location' => 'primary', 'container' => 'nav', 'container_class' => 'mobile-nav'));
        ?>
        <a class="button button--primary" href="#tell-me-more">Tell Me More</a>
        <a class="defendry-search" href="#modal-search" onmouseup="setTimeout(function(){document.getElementById('rcp-search').focus()},10);"><i class="fa fa-search"></i></a>
      </div>
    </div>
  </div>

</header>

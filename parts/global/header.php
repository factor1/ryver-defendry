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
    <div class="col-4 sm-col-10">
      <a href="<?php echo home_url(); ?>">
        <img class="header__logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/defendry-logo-dark.svg" alt="Defendry" />
      </a>
    </div>
    <div class="col-8 sm-col-8 sm-hide text-right">
      <?php // Primary Menu
        wp_nav_menu( array('theme_location' => 'primary', 'container' => 'nav', 'container_class' => 'primary-nav') );
      ?>
      <a class="button button--primary" href="#tell-me-more">Tell Me More</a>
    </div>

  <?php // Small Navigation ?>
    <div class="sm-col-2 sm-only">
      <a href="#" id="nifty-nav-toggle"><span></span></a>
    </div>
  </div>


  <div class="nifty-panel">
    <div class="container">
      <div class="row">
        <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => 'nav', 'container_class' => 'mobile-nav')); ?>
      </div>
    </div>
  </div>

</header>

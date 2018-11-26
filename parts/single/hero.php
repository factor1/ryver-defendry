<?php
/**
 * Single Hero template part
 *
 * Template part used on the single page
 *
 * @package Dana Malkin
 * @author Dana Malkin <danamalkin.com>
 * @since 0.0.1
 */

 // Variables
 $id = get_the_ID();
 $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'bio' );
 $url = $thumb['0'];

?>

<section class="container">
  <div class="row row--align-content-center single-page__hero">
    <div class="col-7 md-col-10 offset-4">
      <div class="single-page__hero-image" style="background:url(<?php echo $url; ?>) center center/cover no-repeat" data-aos="slide-down" data-aos-duration="500"></div>
      <img class="red-icon" id="icon5" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon.svg" data-aos="fade-in"/>
      <h2 class="single-page__hero-see-more text-center" data-aos="fade-in" data-aos-delay="2500" data-aos-duration="1000">
        See More <span class="white-circle">
          <a href="#more-content" class="anchor-scroll">
            <i class="fa fa-chevron-down" id="chev1"></i><i class="fa fa-chevron-down" id="chev2"></i>
          </a>
        </span="white-circle">
      </h2>
    </div>

    <div class="col-8 sm-col-10 offset-1 col-centered single-page__hero-text">
      <h1 data-aos="fade-left" data-aos-delay="400" data-aos-duration="800">
        <?php the_title(); ?>
      </h1>
      <div class="row" data-aos="fade-left" data-aos-delay="400" data-aos-duration="1200">
        <div class="col-8">
          <p>
            <?php the_content(); ?>
          </p>
        </div>
      </div>
    </div>

    <img class="red-icon" id="icon1" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1800" />
    <img class="red-icon" id="icon2" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1200" />
    <img class="red-icon" id="icon3" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" data-aos="fade-down" data-aos-delay="100" data-aos-duration="600" />
    <img class="red-icon" id="icon4" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" data-aos="fade-down" data-aos-delay="100" data-aos-duration="2600" />
  </div>
</section>

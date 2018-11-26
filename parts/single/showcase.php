<?php
/**
 * Single Image capture template part
 *
 * Template part used on the single page
 *
 * @package Dana Malkin
 * @author Dana Malkin <danamalkin.com>
 * @since 0.0.1
 */

 // Variables
 $image = get_field('work_featured_image');
 $phone_images = get_field('mobile_images');

?>

<?php if($image) : ?>
  <section class="container" id="laptop">
    <div class="row single-page__image">
      <div class="col-8 sm-col-12">
        <h2 class="single-page__hero-see-more text-center" data-aos="fade-in" data-aos-delay="1000" data-aos-duration="1000">
          Scroll on Laptop <span class="white-circle sm-hide">
            <a href="#laptop" class="big-laptop anchor-scroll">
              <i class="fa fa-chevron-down" id="chev1"></i><i class="fa fa-chevron-down" id="chev2"></i>
            </a>
          </span="white-circle">
        </h2>
        <figure class="showcase laptop" data-aos="fade-right" data-aos-delay="0">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/laptop.svg" />
          <div class="screenshot">
            <div class="screenshot__wrap">
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" />
            </div>
          </div>
        </figure>
      </div>
      <div class="col-3 sm-col-8 sm-col-centered">
        <figure class="showcase iphone" data-aos="fade-left" data-aos-delay="0">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/iPhone.svg" />
          <div class="iphone-slider">
            <?php if( $phone_images ): ?>
              <?php foreach( $phone_images as $image ): ?>
                <div class="gallery-img">
                  <img src="<?php echo $image['sizes']['large'];; ?>">
                </div>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
        </figure>
      </div>
      <div class="col-1 sm-hide"></div>

      <img class="red-icon" id="icon6" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" data-aos-delay="0" data-aos="fade-down" data-aos-duration="2000" />
      <img class="red-icon" id="icon13" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" data-aos-delay="0" data-aos="fade-down" data-aos-duration="1500" />
      <img class="red-icon" id="icon7" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" data-aos-delay="0" data-aos="fade-down" data-aos-duration="1500" />
    </div>
  </section>
<?php endif; ?>

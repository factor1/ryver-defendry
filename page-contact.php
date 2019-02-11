<?php
  /**
   * The default page template.
   *
   * Used when a default template individual page is queried.
   */
  get_header();
?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <section class="container animsition" data-animsition-in-class="fade-in-right-lg" data-animsition-in-duration="600" data-animsition-out-class="fade-out-left-lg" data-animsition-out-duration="400">
        <div class="row row--justify-content-center row--align-content-center contact-page">
          <div class="col-4 sm-col-9 col-centered">
            <div data-aos="fade-right" data-aos-delay="200" data-aos-duration="1200">
              <?php the_content(); ?>
            </div>
            <img data-tilt class="red-icon" id="icon5" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon.svg" />
          </div>

          <img class="red-icon" id="icon1" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" data-aos="fade-left" data-aos-delay="100" data-aos-duration="2600" />
          <img class="red-icon" id="icon2" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" data-aos="fade-left" data-aos-delay="100" data-aos-duration="2200" />
          <img class="red-icon" id="icon3" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1600" />
          <img class="red-icon" id="icon4" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000" />

        </div>
      </section>

    <?php endwhile; endif;

  get_footer();

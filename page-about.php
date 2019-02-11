<?php
  /**
   * The about page template.
   *
   * Used when a default template individual page is queried.
   */
  get_header();
?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    // Variables
    $img = get_the_post_thumbnail('bio');

    ?>

      <section class="container animsition" data-animsition-in-class="fade-in-right-lg" data-animsition-in-duration="600" data-animsition-out-class="fade-out-left-lg" data-animsition-out-duration="400">
        <div class="row row--justify-content-center row--align-content-center about-page">
          <div class="col-4 sm-col-10 sm-col-centered">
            <div data-aos="slide-left" data-aos-duration="600">
              <div class="about-page__img">
                <?php the_post_thumbnail('bio'); ?>
              </div>
            </div>
            <img class="red-icon" id="icon5" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon.svg" data-aos="fade-left" data-aos-duration="600"/>
          </div>
          <div class="col-6 offset-1 sm-col-10 sm-col-centered about-page__text" data-aos="fade-right" data-aos-duration="1400">
            <?php the_content(); ?>
          </div>

          <img class="red-icon" id="icon1" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" data-aos="fade-left" data-aos-delay="100" data-aos-duration="2600" />
          <img class="red-icon" id="icon2" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1200" />
          <img class="red-icon" id="icon3" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" data-aos="fade-left" data-aos-delay="100" data-aos-duration="2000" />
          <img class="red-icon" id="icon4" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" data-aos="fade-left" data-aos-delay="100" data-aos-duration="800" />

        </div>
      </section>

    <?php endwhile; endif;

  get_footer();

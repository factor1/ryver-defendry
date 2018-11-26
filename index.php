<?php
  /**
   * The default blog / index template.
   */
  get_header();

  if ( have_posts() ) : ?>

    <section class="container animsition" data-animsition-in-class="fade-in-right-lg" data-animsition-in-duration="400" data-animsition-out-class="fade-out-left-lg" data-animsition-out-duration="400">
      <div class="row row--justify-content-center row--align-content-center work-page">
        <div class="col-4 sm-col-12 work-titles-container">
          <ol data-aos="zoom-in-left" data-aos-duration="1200">
          <?php $num = 400; ?>
          <?php while ( have_posts() ) : the_post(); ?>
            <li class="post-title" id="<?php echo get_the_ID(); ?>" data-aos="zoom-in-left" data-aos-delay="500" data-aos-duration="<?php echo $num; ?>">
              <?php the_title(); ?>
            </li>
            <?php $num = $num + 200; ?>
          <?php endwhile; ?>
          </ol>
        </div>
        <div class="col-6 offset-1 work-image-container" data-aos="fade-right" data-aos-delay="400">
          <?php while ( have_posts() ) : the_post();
            // Variables
            $id = get_the_ID();
            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'feature' );
            $url = $thumb['0'];
          ?>
            <a class="image-wrap animsition-link" id="<?php echo $id; ?>" href="<?php the_permalink(); ?>" data-animsition-out-class="fade-out-up" data-animsition-out-duration="400">
              <div class="featured-image" style="background:url(<?php echo $url; ?>) center center/cover no-repeat" data-aos="zoom-in-right" data-aos-delay="500">
              <h3 class="text-hover text-center">View Project</h3>
              </div>
              <img class="red-icon" id="icon4" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon.svg" />
              <div class="white-lines"></div>
            </a>
          <?php endwhile; ?>
        </div>

        <img class="red-icon" id="icon1" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" data-aos="fade-left" data-aos-delay="100" data-aos-duration="800" />
        <img class="red-icon" id="icon2" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1600"/>
        <img class="red-icon" id="icon3" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" data-aos="fade-left" data-aos-delay="100" data-aos-duration="2400"/>

      </div>
    </section>

  <?php endif;

  get_footer();

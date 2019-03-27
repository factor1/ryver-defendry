<?php
  /**
   * The default blog / index template.
   */
  get_header();

  // get_template_part('parts/global/flexible-content'); ?>



  <?php if ( have_posts() ) : ?>

    <section class="container blog">
      <div class="row">
        <div class="sm-col-11 col-10 col-centered">
          <div class="blog__header text-center">
            <h1>Latest News</h1>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="sm-col-11 col-12 col-centered">

          <?php while ( have_posts() ) : the_post(); ?>

          <div class="row blog__single-row">

            <?php
              // variables
              $thumbnail = get_the_post_thumbnail();

              if ( empty($thumbnail) ) :
            ?>
              <div class="sm-col-11 col-4 col-centered columns">
                <a class="no-underline" href="<?php echo get_permalink(); ?>">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/defendry-tagline-dark.svg" alt="Defendry Logo" />
                </a>
              </div>
            <?php else : ?>
              <div class="sm-col-11 col-4 col-centered columns">
                <a class="no-underline" href="<?php echo get_permalink(); ?>">
                  <img src="<?php the_post_thumbnail_url( 'testimonial' ); ?>" />
                </a>
              </div>
            <?php endif; ?>

            <div class="sm-col-11 col-8 col-centered columns" data-aos="fade-left" data-aos-duration="800">
              <a class="no-underline" href="<?php echo get_permalink(); ?>">
                <h5>
                  <?php the_title(); ?>
                </h5>
              </a>
              <br />
              <ul class="list-items categories">
                <?php
                  $categories = get_the_category();
                  foreach ( $categories as $category ) {
                    echo '<li><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a></li>';
                  }
                ?>
              </ul>
              <p>
                <?php echo get_the_excerpt(); ?>
              </p>
              <a class="button button--primary" href="<?php echo get_permalink(); ?>">Read More</a>
            </div>

          </div>

          <?php endwhile; ?>
        </div>
      </div>

      <?php numeric_pagination();

      else :
        echo '<h2>Sorry, no posts have been found</h2>'; ?>

    </section>

  <?php endif;

  get_footer();

<?php
  /**
   * The archive template.
   *
   * Used when a category, author, or date is queried.
   */
  get_header(); ?>

  <?php if ( have_posts() ) : ?>

    <section class="container blog">
      <div class="row">
        <div class="sm-col-11 col-10 col-centered">
          <div class="blog__header text-center">
            <h1>Blog</h1>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="sm-col-11 col-11 col-centered">

          <?php while ( have_posts() ) : the_post(); ?>

          <div class="row row--align-items-center blog__single-row">

            <?php
              // variables
              $thumbnail = get_the_post_thumbnail();

              if ( empty($thumbnail) ) :
            ?>
              <div class="sm-col-12 md-col-10 col-3 col-centered">
                <a href="<?php echo get_permalink(); ?>">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/defendry-tagline-dark.svg" alt="Defendry Logo" />
                </a>
              </div>
            <?php else : ?>
              <div class="sm-col-12 md-col-10 col-3 col-centered">
                <a class="no-underline" href="<?php echo get_permalink(); ?>">
                  <img src="<?php the_post_thumbnail_url( 'full' ); ?>" />
                </a>
              </div>
            <?php endif; ?>

            <div class="sm-col-12 md-col-10 col-8 offset-1 col-centered">
              <a href="<?php echo get_permalink(); ?>">
                <h2>
                  <?php the_title(); ?>
                </h2>
                <h6>
                  <?php the_date(); ?>
                </h6>
              </a>
              <p>
                <?php echo get_the_excerpt(); ?>
              </p>
              <a class="button button--primary" href="<?php echo get_permalink(); ?>">Read More</a>
            </div>

          </div>

          <?php endwhile; ?>

          <?php the_posts_pagination();

          else :
            echo '<h2>Sorry, no posts have been found</h2>'; ?>
        </div>
      </div>

    </section>

  <?php endif;

  get_footer();

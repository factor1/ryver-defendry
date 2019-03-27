<?php
  /**
   * The single post template.
   *
   * Used when a single post is queried.
   */
  get_header();

  // variables
  $thumbnail = get_the_post_thumbnail();

  if( have_posts() ): while( have_posts() ): the_post(); ?>

    <section class="container blog blog--single">

      <div class="row">
        <div class="col-12 sm-col-11 col-centered">
          <img class="blog--single__featured-image" src="<?php the_post_thumbnail_url( 'full' ); ?>" />
          <h2><?php the_title(); ?></h2>
          <h5><?php the_date(); ?></h5>
          <?php the_content(); ?>
        </div>
      </div>

    </section>

  <?php endwhile; endif;

  get_template_part('parts/global/flexible-content');

  get_footer();

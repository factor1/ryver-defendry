<?php
  /**
   * The single post template.
   *
   * Used when a single post is queried.
   */
  get_header();

  // variables
  $thumbnail = get_the_post_thumbnail();

  if( have_posts() ): while( have_posts() ): the_post();

    //variables
    if ( $alt_text = get_the_post_thumbnail_caption() ) {
        // Nothing to do here
    } else {
        $alt_text = get_the_title();
    }
  ?>

    <section class="container blog blog--single">

      <div class="row">
        <div class="col-10 sm-col-11 col-centered">
          <img class="blog--single__featured-image" src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="<?php echo $alt_text; ?>" />
          <h2><?php the_title(); ?></h2>
          <h6><?php the_date(); ?></h6>
          <?php the_content(); ?>
        </div>
      </div>

    </section>

  <?php endwhile; endif;

  get_template_part('parts/global/flexible-content');

  get_footer();

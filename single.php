<?php
  /**
   * The single post template.
   *
   * Used when a single post is queried.
   */
  get_header();

  if( have_posts() ): while( have_posts() ): the_post(); ?>

    <section class="single-page animsition" data-animsition-in-class="fade-in-down-lg"
  data-animsition-in-duration="600"
  data-animsition-out-class="fade-out-down-lg"
  data-animsition-out-duration="400">

      <?php

        get_template_part('parts/single/hero');
        get_template_part('parts/single/info');
        get_template_part('parts/single/showcase');
        get_template_part('parts/single/features');
        get_template_part('parts/single/more-posts');

      ?>

    </section>

  <?php endwhile; endif;

  get_footer();

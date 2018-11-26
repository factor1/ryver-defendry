<?php
/**
 * Single other posts template part
 *
 * Template part used on the single page
 *
 * @package Dana Malkin
 * @author Dana Malkin <danamalkin.com>
 * @since 0.0.1
 */

 // Variables

 // the query
  $currentID = get_the_ID();
  $categories = get_the_category();
  $category_id = $categories[0]->cat_ID;
  $category_name = $categories[0]->cat_name;

  $args = array(
      'posts_per_page' => 2,
      'cat' => $category_id,
      'post__not_in' => array($currentID),
  );
  $nav_query = new WP_Query( $args );

?>

<?php if ( $nav_query->have_posts() ) : ?>

  <section class="container more-posts">
    <div class="row">
      <div class="col-10 sm-col-12 col-centered">
        <div class="row">
          <?php while ( $nav_query->have_posts() ) : $nav_query->the_post();
            // Variables
            $id = get_the_ID();
            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'show-more' );
            $url = $thumb['0'];

          ?>
            <div class="col-6 sm-col-12 margin-bottom">
              <a class="image-wrap animsition-link" href="<?php echo get_permalink(); ?>" data-animsition-out-class="fade-out-up" data-animsition-out-duration="400">
                <div class="more-posts__image" style="background:url(<?php echo $url; ?>) center center/cover;">
                  <h3 class="more-posts__title text-center">
                    <?php the_title(); ?>
                  </h3>
                  <h3 class="text-hover text-center">View Project</h3>
                </div>
                <div class="white-lines"></div>
              </a>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>

    <img class="red-icon" id="icon10" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" data-aos-delay="0" data-aos="fade-down" data-aos-duration="1500"/>
    <img class="red-icon" id="icon12" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" data-aos-delay="0" data-aos="fade-down" data-aos-duration="1000"/>
  </section>

<?php endif; ?>

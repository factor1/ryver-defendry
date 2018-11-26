<?php
/**
 * Single Features template part
 *
 * Template part used on the single page
 *
 * @package Dana Malkin
 * @author Dana Malkin <danamalkin.com>
 * @since 0.0.1
 */

 // Variables
 $url = get_field('url');

?>

<?php if(have_rows('features')) : ?>
  <section class="container single-page__features">
    <h1 class="text-center features-title">Features</h1>
    <div class="row">
      <div class="sm-block-grid-1 md-block-grid-2 block-grid-3">
        <?php while(have_rows('features')) : the_row();

          // variables
          $number = get_sub_field('number');
          $image = get_sub_field('image');
          $icon = get_sub_field('icon');
          $title = get_sub_field('title');
          $description = get_sub_field('description');

        ?>
          <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="600" class="col stretch text-center margin-bottom">
            <div class="feature-col">
              <h2 class="feature-number">
                <?php echo $number; ?>
              </h2>
              <?php if($image) : ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" />
              <?php endif; ?>
              <?php if($icon) : ?>
                <div class="icon-wrap">
                  <?php echo $icon; ?>
                </div>
              <?php endif; ?>
              <?php if($title) : ?>
                <h2 class="feature-title">
                  <?php echo $title; ?>
                </h2>
              <?php endif; ?>
              <?php if($description) : ?>
                <p class="feature-description">
                  <?php echo $description; ?>
                </p>
              <?php endif; ?>
            </div>
          </div>
        <?php endwhile; ?>
      </div>

      <img class="red-icon" id="icon8" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" data-aos="fade-down" data-aos-duration="1600"/>

    </div>

    <div class="row row--justify-content-center visit">
      <div class="col-4 sm-col-9 col-centered text-center">
        <span style="display: inline-block;">
          <a class="visit__url" href="<?php echo $url; ?>">Visit Website</a>
        </span>
        <img data-tilt class="red-icon" id="icon11" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon.svg" />
      </div>
    </div>
  </section>
<?php endif; ?>

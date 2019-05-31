<?php
/*
 * 4 Column Grid
 */
$headline = get_sub_field('headline');

$load = 100; ?>

<section class="container container--justify-content-center four-col">
    <div class="row">
      <div class="col-12">
        <h6 class="text-center">
          <span><?php echo $headline; ?></span>
        </h6>
      </div>
    </div>

    <?php if( have_rows('column') ) : ?>
      <div class="row">
        <div class="sm-block-grid-2 md-block-grid-4 block-grid-4 four-col__column">

        <?php while( have_rows('column') ) : the_row();
          $imageID = get_sub_field('image');
          $img = wp_get_attachment_image_src($imageID, 'column');
          $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
          $text = get_sub_field('description');
          ?>

          <div class="col" data-aos="fade-up" data-aos-duration="400" data-aos-delay="<?php echo $load; ?>">
            <div class="icon">
              <img src="<?php echo $img[0]; ?>" alt="<?php echo $alt_text; ?>">
            </div>

            <div class="text text-center">
              <p><?php echo $text; ?></p>
            </div>
          </div>

        <?php $load += 100; endwhile; ?>

      </div>
    </div>

  <?php endif; ?>

</section>

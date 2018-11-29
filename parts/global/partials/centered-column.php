<?php
/*
 * Centered Column Section
 */

// Custom Fields
$headline = get_sub_field('headline');

if( have_rows('content_blocks') ) : ?>

  <section class="container centered-column">
    <div class="row">
      <div class="col-12 text-center" data-aos="fade-up" data-aos-duration="800">
        <h1><?php echo $headline; ?></h1>
      </div>

      <div class="col-8 col-centered text-center">

        <?php while( have_rows('content_blocks') ) : the_row();
          $img = wp_get_attachment_image_src(get_sub_field('image'), 'column');
          $content = get_sub_field('content'); ?>

          <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
            <img src="<?php echo $img[0]; ?>" alt="Column image">

            <?php echo $content; ?>
          </div>

        <?php endwhile; ?>

      </div>
    </div>
  </section>

<?php endif; ?>

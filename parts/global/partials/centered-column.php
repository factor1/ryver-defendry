<?php
/*
 * Centered Column Section
 */

// Custom Fields
$bgToggle = get_sub_field('background_toggle');
$headline = get_sub_field('headline');
$headlineSize = get_sub_field('headline_size');
$btnToggle = get_sub_field('button_toggle');
$btn = get_sub_field('button');

// Conditional classes/styles
$bgClass = $bgToggle ? ' background' : '';

if( have_rows('content_blocks') ) : ?>

  <section class="container centered-column<?php echo $bgClass; ?>">
    <div class="row">
      <div class="col-12 text-center" data-aos="fade-up" data-aos-duration="800">
        <h1 class="centered-column__headline--<?php echo $headlineSize; ?>"><?php echo $headline; ?></h1>
      </div>

      <div class="col-8 col-centered text-center">

        <?php while( have_rows('content_blocks') ) : the_row();
          $img = wp_get_attachment_image_src(get_sub_field('image'), 'column');
          $content = get_sub_field('content');
          $divider = get_sub_field('divider_toggle');

          $dotClass = $divider ? ' class="dot"' : ''; ?>

          <div<?php echo $dotClass; ?> data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
            <?php if( $img ) : ?>
              <img src="<?php echo $img[0]; ?>" alt="Column image">
            <?php endif; ?>

            <?php echo $content; ?>
          </div>

        <?php endwhile; ?>

        <?php if( $btnToggle ) : ?>
          <div class="text-center" data-aos="fade-up" data-aos-duration="500">
            <a href="<?php echo esc_url($btn['url']); ?>" class="button button--primary" role="link" title="<?php echo $btn['title']; ?>">
              <?php echo $btn['title']; ?>
            </a>
          </div>
        <?php endif; ?>

      </div>
    </div>
  </section>

<?php endif; ?>

<?php
/*
 * Centered Column Section
 */

// Custom Fields
$bgToggle = get_sub_field('background_toggle');
$bgFlip = get_sub_field('flip_background_image');
$headline = get_sub_field('headline');
$headlineSize = get_sub_field('headline_size');
$btnToggle = get_sub_field('button_toggle');
$btn = get_sub_field('button');

// Conditional classes/styles
$bgClass = $bgToggle ? ' background' : '';
$bgFlipClass = $bgFlip ? ' background-flip' : '';

if( have_rows('content_blocks') ) : ?>

  <section class="container centered-column<?php echo $bgClass; ?><?php echo $bgFlipClass; ?>">
    <div class="row">
      <div class="col-12 sm-col-11 text-center" data-aos="fade-up" data-aos-duration="800">
        <h1 class="centered-column__headline--<?php echo $headlineSize; ?>"><?php echo $headline; ?></h1>
      </div>

      <div class="col-8 sm-col-11 col-centered text-center">

        <?php while( have_rows('content_blocks') ) : the_row();
          $dividerAbove = get_sub_field('divider_toggle_above');
          $imgSize = get_sub_field('image_size');
          $img = wp_get_attachment_image_src(get_sub_field('image'), $imgSize);
          $content = get_sub_field('content');
          $divider = get_sub_field('divider_toggle');

          $dotClassAbove = $dividerAbove ? ' dot--above' : '';
          $dotClass = $divider ? ' dot' : ''; ?>

          <div class="centered-column__row <?php echo $dotClass; echo $dotClassAbove; ?>" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
            <?php if( $img ) : ?>
              <img class="<?php if($imgSize == 'full') : echo 'full-image'; endif ?>" src="<?php echo $img[0]; ?>" alt="Column image">
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

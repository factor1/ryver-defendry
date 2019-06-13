<?php
/*
 * Centered Column Section
 */
// Custom Fields
$bgToggle = get_sub_field('background_toggle');
$bgFlip = get_sub_field('flip_background_image');
$headlineCenteredCol = get_sub_field('headline');
$headlineSize = get_sub_field('headline_size');
$headlineNoPadding = get_sub_field('remove_headline_top_padding');
$btnToggle = get_sub_field('button_toggle');
$btn = get_sub_field('button');
// Conditional classes/styles
$headlinePadding = $headlineNoPadding ? ' centered-column__headline--no-padding' : '';
$bgClass = $bgToggle ? ' background' : '';
$bgFlipClass = $bgFlip ? ' background-flip' : '';
if( have_rows('content_blocks') ) : ?>

  <section class="container centered-column<?php echo $bgClass; echo $bgFlipClass; ?>">
    <div class="row">
      <?php if($headlineCenteredCol) : ?>
        <div class="col-12 sm-col-11 text-center" data-aos="fade-up" data-aos-duration="800">
          <h1 class="centered-column__headline--<?php echo $headlineSize; echo $headlinePadding; ?>"><?php echo $headlineCenteredCol; ?></h1>
        </div>
      <?php endif; ?>

      <div class="col-8 sm-col-11 col-centered text-center">

        <?php while( have_rows('content_blocks') ) : the_row();
          $dividerAbove = get_sub_field('divider_toggle_above');
          $insertImage = get_sub_field('insert_image');
          $imgSize = get_sub_field('image_size');
          $imageID = get_sub_field('image');
          $img = wp_get_attachment_image_src($imageID, $imgSize);
          $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
          $content = get_sub_field('content');
          $divider = get_sub_field('divider_toggle');
          $removePaddingClass = $insertImage ? '' : 'centered-column__row--remove-padding';
          $dotClassAbove = $dividerAbove ? ' dot--above' : '';
          $dotClass = $divider ? ' dot' : ''; ?>

          <div class="centered-column__row <?php echo $removePaddingClass; ?> <?php echo $dotClass; echo $dotClassAbove; ?>" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
            <?php if( $img ) : ?>
              <img class="<?php if($imgSize == 'full') : echo 'full-image'; endif ?>" src="<?php echo $img[0]; ?>" alt="<?php echo $alt_text; ?>">
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

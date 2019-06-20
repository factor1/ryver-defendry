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
$headlinePadding = $headlineNoPadding ? ' scenario-map__headline--no-padding' : '';
$bgClass = $bgToggle ? ' background' : '';
$bgFlipClass = $bgFlip ? ' background-flip' : '';

if( have_rows('content_blocks') ) : ?>

  <section class="container scenario-map<?php echo $bgClass; echo $bgFlipClass; ?>">
    <div class="row">
      <?php if($headlineCenteredCol) : ?>
        <div class="col-12 sm-col-11 col-centered text-center" data-aos="fade-up" data-aos-duration="800">
          <h1 class="scenario-map__headline--<?php echo $headlineSize; echo $headlinePadding; ?>"><?php echo $headlineCenteredCol; ?></h1>
        </div>
      <?php endif; ?>

      <div class="col-8 md-col-10 sm-col-11 col-centered">

        <?php while( have_rows('content_blocks') ) : the_row();
          $remove_box_shadow = get_sub_field('remove_box_shadow');
          $headline = get_sub_field('headline');
          $subline = get_sub_field('subline');
          $dividerAbove = get_sub_field('divider_toggle_above');
          $multipleSteps = get_sub_field('multiple_steps_for_this_column');
          $horizontalSteps = get_sub_field('steps_horizontal_layout');
          $insertImage = get_sub_field('insert_image');
          $imgSize = get_sub_field('image_size');
          $imageID = get_sub_field('image');
          $img = wp_get_attachment_image_src($imageID, $imgSize);
          $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
          $content = get_sub_field('content');
          $divider = get_sub_field('divider_toggle');

          $remove_box_shadow_class = $remove_box_shadow ? ' scenario-map__row--remove-box-shadow' : '';
          $removePaddingClass = $insertImage ? '' : ' scenario-map__row--remove-padding';
          $dotClassAbove = $dividerAbove ? ' dot--above' : '';
          $dotClass = $divider ? ' dot' : ''; ?>

          <div class="row scenario-map__row <?php echo $removePaddingClass; echo $remove_box_shadow_class; echo $dotClass; echo $dotClassAbove; ?>" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
            <div class="col-12 text-center">
              <h2><?php echo $headline; ?></h2>
            </div>
            <div class="col-12 text-center">
              <h3><?php echo $subline; ?></h3>
            </div>

            <?php if($multipleSteps) : ?>
              <?php if($horizontalSteps) : ?>
                <!-- Horizontal Steps Wrap -->
                <div class="block-grid-3 sm-block-grid-1 scenario-map__row--horizontal">
              <?php endif; ?>

              <!-- Multi-Step Column -->
              <?php if( have_rows('repeat_steps') ) : while( have_rows('repeat_steps') ) : the_row();
              $imgSize = get_sub_field('image_size');
              $imageID = get_sub_field('image');
              $img = wp_get_attachment_image_src($imageID, $imgSize);
              $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
              $content = get_sub_field('content'); ?>

                <?php if($horizontalSteps) : ?>
                  <!-- Horizontal Steps -->
                  <div class="col stretch text-center">
                    <?php if( $img ) : ?>
                      <img class="scenario-map__row--horizontal__img <?php if($imgSize == 'full') : echo 'full-image'; endif ?>" src="<?php echo $img[0]; ?>" alt="<?php echo $alt_text; ?>">
                    <?php endif; ?>
                    <?php echo $content; ?>
                  </div>
                <?php else : ?>
                  <!-- Verticle Steps -->
                  <div class="col-5 sm-col-12 offset-1 text-center stretch scenario-map__row__column">
                    <?php if( $img ) : ?>
                      <img class="<?php if($imgSize == 'full') : echo 'full-image'; endif ?>" src="<?php echo $img[0]; ?>" alt="<?php echo $alt_text; ?>">
                    <?php endif; ?>
                  </div>
                  <div class="col-5 sm-col-12 stretch scenario-map__row__column sm-text-center">
                    <?php echo $content; ?>
                  </div>
                <?php endif; ?>

              <?php endwhile; endif; ?>
              <?php if($horizontalSteps) : ?>
                <!-- Horizontal Steps Wrap -->
                </div>
              <?php endif; ?>

            <?php else : ?>

              <!-- One Step Column -->
              <div class="col-5 sm-col-12 offset-1 text-center stretch scenario-map__row__column">
                <?php if( $img ) : ?>
                  <img class="<?php if($imgSize == 'full') : echo 'full-image'; endif ?>" src="<?php echo $img[0]; ?>" alt="<?php echo $alt_text; ?>">
                <?php endif; ?>
              </div>
              <div class="col-5 sm-col-12 stretch scenario-map__row__column sm-text-center">
                <?php echo $content; ?>
              </div>

            <?php endif; ?>
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

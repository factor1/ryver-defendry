<?php
//vars
$bgToggle = get_sub_field('background_toggle');
$header = get_sub_field('header');
$position = get_sub_field('image_position');
$img_id = get_sub_field('image');
$img = wp_get_attachment_image_src($img_id, 'fifty-fifty');
$alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);
$image_has_video_link_attached = get_sub_field('image_has_video_link_attached');
$video = get_sub_field('video');
$content_header = get_sub_field('content_header');
$content = get_sub_field('content');
$btnToggle = get_sub_field('button_toggle');
$btn = get_sub_field('button');

// Conditional classes/styles
$rowClass = $position == 'left' ? ' row--reverse' : '';
$bgClass = $bgToggle ? ' background' : '';
$imgAnimation = $position == 'left' ? 'fade-right' : 'fade-left';
$textAnimation = $position == 'right' ? 'fade-right' : 'fade-left';  ?>

<section class="container fifty-fifty<?php echo $bgClass; ?>">
  <div class="row">
    <div class="sm-col-11 col-10 col-centered">
      <div class="row row--align-items-center<?php echo $rowClass; ?>">

        <?php if($header) : ?>
          <div class="col-12" data-aos="fade-down" data-aos-duration="800" data-aos-delay="500">
            <h1 class="text-center">
              <?php echo $header; ?>
            </h1>
          </div>
        <?php endif; ?>

        <div class="col-6 sm-text-center" data-aos="<?php echo $textAnimation; ?>">
          <?php if($content_header) : ?>
            <h2><?php echo $content_header; ?></h2>
          <?php endif;

          echo $content; ?>
        </div>

        <div class="col-5 sm-col-8 sm-col-centered" data-aos="<?php echo $imgAnimation; ?>" data-aos-duration="500">
          
          <img src="<?php echo $img[0]; ?>" alt="<?php echo $alt_text; ?>" />
        </div>
      </div>

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

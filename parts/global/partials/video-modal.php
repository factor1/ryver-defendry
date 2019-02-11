<?php
/*
 * Video Modal Section
 */

// Custom Fields
$img = wp_get_attachment_image_src(get_sub_field('background_image'), 'video_bg');
$headline = get_sub_field('headline');
$video = get_sub_field('video');
$content = get_sub_field('content');

?>

<section class="container video-modal" style="background: url('<?php echo $img[0]; ?>') bottom center/cover no-repeat">
  <div class="row">
    <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="1400" data-aos-duration="800">
      <!-- <a href="#video-modal">
        <img src="<?php //echo get_template_directory_uri(); ?>/assets/img/play-btn.svg" alt="Play">
      </a> -->

      <h1><?php echo $headline; ?></h1>
    </div>
  </div>

  <?php if($content) : ?>
    <div class="row">
      <div class="col-6 md-col-8 sm-col-11 col-centered video-modal__content" data-aos="fade-down" data-aos-delay="800" data-aos-duration="800">
        <?php echo $content; ?>
      </div>
    </div>
  <?php endif; ?>

</section>

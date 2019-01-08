<?php
/*
 * Video Modal Section
 */

// Custom Fields
$img = wp_get_attachment_image_src(get_sub_field('background_image'), 'video_bg');
$headline = get_sub_field('headline');
$video = get_sub_field('video'); ?>

<section class="container video-modal" style="background: url('<?php echo $img[0]; ?>') bottom center/cover no-repeat">
  <div class="row">
    <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="800" data-aos-duration="800">
      <!-- <a href="#video-modal">
        <img src="<?php //echo get_template_directory_uri(); ?>/assets/img/play-btn.svg" alt="Play">
      </a> -->

      <h1><?php echo $headline; ?></h1>
    </div>
  </div>
</section>

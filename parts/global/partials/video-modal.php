<?php
/*
 * Video Modal Section
 */

// Custom Fields
$img = wp_get_attachment_image_src(get_sub_field('background_image'), 'video_bg');
$headline = get_sub_field('headline');
$headlineSize = get_sub_field('headline_size');
$video = get_sub_field('video');
$content = get_sub_field('content');

?>

<section class="container video-modal" style="background: url('<?php echo $img[0]; ?>') bottom center/cover no-repeat">
  <div class="row">
    <div class="col-12 text-center">

      <h1 class="video-modal__headline--<?php echo $headlineSize; ?>" data-aos="fade-down" data-aos-delay="500" data-aos-duration="500"><?php echo $headline; ?></h1>

      <a href="#video-modal">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/play-btn.svg" alt="Play" data-aos="fade-down" data-aos-delay="700" data-aos-duration="700">
      </a>

    </div>
  </div>

  <?php if($content) : ?>
    <div class="row">
      <div class="col-12 md-col-10 sm-col-8 col-centered video-modal__content" data-aos="fade-down" data-aos-delay="900" data-aos-duration="900">
        <?php echo $content; ?>
      </div>
    </div>
  <?php endif; ?>

</section>

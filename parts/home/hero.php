<?php

  // variables
  $bg_img_id = get_field('background_image');
  $bg_img = wp_get_attachment_image_src($bg_img_id, 'full');
  $header = get_field('header');
  $link = get_field('cta_button');

?>

  <section class="container hero" data-aos="fade-in" style="background:url('<?php echo $bg_img[0]; ?>') center center/cover no-repeat;">
    <a href="https://iotalk.com/" target="_blank">
      <img class="ryver-power" src="<?php echo get_template_directory_uri(); ?>/assets/img/iotalk-logo-white.svg" />
    </a>
    <div class="row hero__row">
      <div class="col-8 md-col-11 sm-text-center hero__row__content">
        <div class="hero__logo sm-text-center" data-aos="fade-down" data-aos-delay="800" data-aos-duration="800">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/defendry-tagline-white.svg" alt="Defendry" />
        </div>
        <h1 class="hero__headline" data-aos="fade-down" data-aos-delay="1000" data-aos-duration="600">
          <?php echo $header; ?>
        </h1>
        <div data-aos="fade-down" data-aos-delay="1200" data-aos-duration="400">
          <a class="button button--primary" href="<?php echo $link['url']; ?>">
            <?php echo $link['title']; ?>
          </a>
        </div>
      </div>
    </div>
  </section>

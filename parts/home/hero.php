<?php

  // variables
  $bg_img_id = get_field('background_image');
  $bg_img = wp_get_attachment_image_src($bg_img_id, 'full');
  // $logo_id = get_sub_field('logo');
  // $logo = wp_get_attachment_image_src($logo_id, 'logo');
  $header = get_field('header');
  $link = get_field('cta_button');

?>

  <section class="container hero" data-aos="fade-in" style="background:url('<?php echo $bg_img[0]; ?>') center center/cover no-repeat;">
    <a href="https://ryver.com/">
      <img class="ryver-power" src="<?php echo get_template_directory_uri(); ?>/assets/img/PoweredByRyver-Logo-DarkBG-2.svg" />
    </a>
    <div class="row">
      <div class="sm-col-11 col-6 md-col-8 offset-1 sm-col-centered sm-text-center">
        <div class="hero__logo" data-aos="fade-down" data-aos-delay="800" data-aos-duration="800">
          <img class="sm-hide" src="<?php echo get_template_directory_uri(); ?>/assets/img/iotalk-header-1.svg" alt="IoTalk" />
          <img class="sm-only" src="<?php echo get_template_directory_uri(); ?>/assets/img/iotalk-header-2.svg" alt="IoTalk" />
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

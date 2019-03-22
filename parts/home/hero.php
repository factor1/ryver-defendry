<?php

  // variables
  $bg_img_id = get_field('background_image');
  $bg_img = wp_get_attachment_image_src($bg_img_id, 'full');
  $art_img_id = get_field('art_image');
  $art_img = wp_get_attachment_image_src($art_img_id, 'home-hero-art');
  $art_screen_img_id = get_field('screen_for_art_image');
  $art_screen_img = wp_get_attachment_image_src($art_screen_img_id, 'feature');
  $header = get_field('header');
  $link = get_field('cta_button');

?>

  <section class="container hero" data-aos="fade-in" data-aos-delay="0" data-aos-duration="200" style="background:url('<?php echo $bg_img[0]; ?>') center center/cover no-repeat;">

    <a href="https://www.avnet.com" target="_blank" style="display:none;">
      <img class="ryver-power" src="<?php echo get_template_directory_uri(); ?>/assets/img/avnet-partnership-white.svg" />
    </a>

    <div class="row row--full-width hero__row">
      <?php if ($art_img) : ?>
        <img class="hero__art" src="<?php echo $art_img[0]; ?>" alt="ART" data-aos="fade-right" data-aos-delay="200" />
      <?php endif; ?>
      <?php if ($art_img) : ?>
        <img class="hero__art-screen" src="<?php echo $art_screen_img[0]; ?>" alt="ART's Screen" data-aos="fade-in" data-aos-delay="300" />
      <?php endif; ?>
      <div class="col-6 md-col-10 sm-col-11 col-right sm-text-center hero__row__content">
        <div class="hero__logo sm-text-center" data-aos="fade-left" data-aos-delay="800" data-aos-duration="800">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/defendry-tagline-white.svg" alt="Defendry" />
        </div>
        <h1 class="hero__headline" data-aos="fade-left" data-aos-delay="1000" data-aos-duration="600">
          <?php echo $header; ?>
        </h1>
        <div data-aos="fade-left" data-aos-delay="1200" data-aos-duration="400">
          <a class="button button--primary" href="<?php echo $link['url']; ?>">
            <?php echo $link['title']; ?>
          </a>
        </div>
      </div>
    </div>
  </section>

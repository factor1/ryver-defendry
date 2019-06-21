<?php

  // variables
  $fifty_fifty = get_field('5050_hero');
  $bg_img_id = get_field('background_image');
  $bg_img = wp_get_attachment_image_src($bg_img_id, 'full');
  $bg_img_position = get_field('background_position');
  $art_img_id = get_field('art_image');
  $art_img = wp_get_attachment_image_src($art_img_id, 'full');
  $alt_text = get_post_meta($art_img_id , '_wp_attachment_image_alt', true);
  $art_screen_img_id = get_field('screen_for_art_image');
  $art_screen_img = wp_get_attachment_image_src($art_screen_img_id, 'full');
  $header = get_field('header');
  $link = get_field('cta_button');
  $hero_video_link = get_field('hero_video_link');
  $hero_video_thumbnail_id = get_field('hero_video_thumbnail');
  $hero_video_thumbnail = wp_get_attachment_image_src($hero_video_thumbnail_id, 'full');
  $thumbnail_alt_text = get_post_meta($hero_video_thumbnail_id , '_wp_attachment_image_alt', true);
  $hero_video = get_field('hero_video');
  $hero_bottom_divider = get_field('hero_bottom_divider');

  // Conditional classes
  $sectionClass = $hero_bottom_divider ? ' hero--bottom-divider' : '';


?>

<?php if($fifty_fifty) : ?>

  <section class="container hero hero--fifty-fifty<?php echo $sectionClass; ?>" data-aos="fade-in" data-aos-delay="0" data-aos-duration="200" style="background:url('<?php echo $bg_img[0]; ?>') center <?php echo $bg_img_position; ?>/cover no-repeat;">

    <div class="row hero__row">
      <div class="col-6 sm-col-11 col-right sm-col-centered sm-text-center hero__row__content hero--fifty-fifty__left-col">
        <h1 class="hero__headline" data-aos="fade-left" data-aos-delay="200" data-aos-duration="200">
          <?php echo $header; ?>
        </h1>
        <div data-aos="fade-left" data-aos-delay="300" data-aos-duration="200">
          <a class="button button--primary hero-button" href="<?php echo $link['url']; ?>">
            <?php echo $link['title']; ?>
          </a>
        </div>

      </div>
      <div class="col-6 sm-col-11 sm-col-centered">
        <a href="#hero-video-modal">
          <img class="hero__thumbnail" src="<?php echo $hero_video_thumbnail[0]; ?>" alt="<?php echo $thumbnail_alt_text; ?>" data-aos="fade-right" data-aos-delay="400" data-aos-duration="200" />
        </a>
      </div>
    </div>
  </section>

<?php else : ?>

  <section class="container hero<?php echo $sectionClass; ?>" data-aos="fade-in" data-aos-delay="0" data-aos-duration="200" style="background:url('<?php echo $bg_img[0]; ?>') center center/cover no-repeat;">

    <?php if ($art_screen_img) : ?>
      <div class="hero__art-screen" data-aos="fade-in" data-aos-delay="500" style="background:url('<?php echo $art_screen_img[0]; ?>') center <?php echo $bg_img_position; ?>/cover no-repeat;"></div>
    <?php endif; ?>

    <a href="https://www.avnet.com" target="_blank" style="display:none;">
      <img class="ryver-power" src="<?php echo get_template_directory_uri(); ?>/assets/img/avnet-partnership-white.svg" />
    </a>

    <div class="row row--full-width hero__row">
      <?php if ($art_img) : ?>
        <img class="hero__art" src="<?php echo $art_img[0]; ?>" alt="<?php echo $alt_text; ?>" data-aos="fade-right" data-aos-delay="200" />
      <?php endif; ?>

      <div class="col-5 sm-col-11 col-right sm-col-centered sm-text-center hero__row__content">
        <div class="hero__logo sm-only sm-text-center" data-aos="fade-left" data-aos-delay="800" data-aos-duration="800">
          <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/Defendry-Logo-Reverse.svg" alt="Defendry" />
          </a>
        </div>
        <h1 class="hero__headline" data-aos="fade-left" data-aos-delay="1000" data-aos-duration="400">
          <?php echo $header; ?>
        </h1>
        <?php if($hero_video_link) : ?>
          <div data-aos="fade-left" data-aos-delay="1100" data-aos-duration="400">
            <a class="button button--video hero-button" href="<?php echo $hero_video_link['url']; ?>">
              <span><i class="fa fa-play"></i></span> <?php echo $hero_video_link['title']; ?>
            </a>
          </div>
        <?php endif; ?>
        <div data-aos="fade-left" data-aos-delay="1200" data-aos-duration="400">
          <a class="button button--primary hero-button" href="<?php echo $link['url']; ?>">
            <?php echo $link['title']; ?>
          </a>
        </div>

      </div>
    </div>
  </section>

<?php endif; ?>

<?php

  // variables
  $bg_img_id = get_field('background_image');
  $bg_img = wp_get_attachment_image_src($bg_img_id, 'full');
  $header = get_field('header');
  $header_color = get_field('header_color');
  //$link = get_field('cta_button');

  $header_color_class = if($header_color == 'grey') ? ' hero__headline--grey' : ' hero__headline--white';

?>

  <section class="container hero" data-aos="fade-in" style="background:url('<?php echo $bg_img[0]; ?>') center center/cover no-repeat;">
    <div class="row hero__row">
      <div class="col-7 md-col-8 sm-text-center hero__row__content">
        <h1 class="hero__headline <?php echo $header_color_class; ?>" data-aos="fade-down" data-aos-delay="1000" data-aos-duration="600">
          <?php echo $header; ?>
        </h1>
      </div>
    </div>
  </section>

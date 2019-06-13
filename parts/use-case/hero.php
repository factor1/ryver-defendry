<?php

  // variables
  $bg_img_id = get_field('background_image');
  $bg_img = wp_get_attachment_image_src($bg_img_id, 'full');
  $header = get_field('header');
  $header_color = get_field('header_color');
  $header_alignment = get_field('header_alignment');
  //$link = get_field('cta_button');

  // Conditional classes/styles
  $header_color_class = $header_color == 'grey' ? ' hero__headline--grey' : ' hero__headline--white';
  $header_alignment_col_class = $header_alignment == 'center' ? ' col-centered' : '';
  $header_alignment_h1_class = $header_alignment == 'center' ? ' text-center' : '';

?>

  <section class="container hero" data-aos="fade-in" style="background:url('<?php echo $bg_img[0]; ?>') center center/cover no-repeat;">
    <div class="row hero__row">
      <div class="col-12 sm-col-11 sm-col-centered <?php echo $header_alignment_col_class; ?> sm-text-center hero__row__content">
        <h1 class="hero__headline <?php echo $header_color_class; ?><?php echo $header_alignment_h1_class; ?>" data-aos="fade-up" data-aos-delay="200" data-aos-duration="200">
          <?php echo $header; ?>
        </h1>
      </div>
    </div>
  </section>

<?php

  // variables
  $bg_img_id = get_field('background_image');
  $bg_img = wp_get_attachment_image_src($bg_img_id, 'full');
  $header = get_field('header');
  //$link = get_field('cta_button');

?>

  <section class="container hero" data-aos="fade-in" style="background:url('<?php echo $bg_img[0]; ?>') center center/cover no-repeat;">
    <div class="row hero__row">
      <div class="col-7 md-col-8 sm-text-center">
        <div class="hero__logo sm-text-center" data-aos="fade-down" data-aos-delay="800" data-aos-duration="800">
	        <a href="<?php bloginfo('url');?>">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/defendry-tagline-dark.svg" alt="Defendry" />
	        </a>
        </div>
        <h1 class="hero__headline" data-aos="fade-down" data-aos-delay="1000" data-aos-duration="600">
          <?php echo $header; ?>
        </h1>
        
      </div>
    </div>
  </section>

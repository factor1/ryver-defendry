<?php

//vars
$header = get_sub_field('header');
$img_id = get_sub_field('image');
$img = wp_get_attachment_image_src($img_id, 'fifty-fifty');
$link = get_sub_field('link');

?>
<section class="container cta">
    <div class="row">
      <div class="col-10 sm-col-11 col-centered">

        <div class="row">
          <div class="sm-col-12 sm-col-centered col-8 columns stretch" data-aos="fade-left" data-aos-delay="400">

            <?php if($header) : ?>
              <h1 class="text-center">
                <?php echo $header; ?>
              </h1>
            <?php endif; ?>
            <?php if($link) : ?>
              <a class="button button--primary" href="<?php echo $link['url']; ?>">
                <?php echo $link['title']; ?>
              </a>
            <?php endif; ?>

          </div>

          <div class="sm-col-12 col-4 columns stretch cta__image-wrap">
            <div class="fifty-fifty__image" data-aos="fade-in">
              <!-- <img src="<?php // echo $img[0]; ?>" /> -->
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-mark.svg" />
            </div>
          </div>

        </div>
      </div>
    </div>
</section>

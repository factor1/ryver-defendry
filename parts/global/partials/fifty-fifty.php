<?php

//vars
$header = get_sub_field('header');
$position = get_sub_field('image_position');
$img_id = get_sub_field('image');
$img = wp_get_attachment_image_src($img_id, 'fifty-fifty');
$content_header = get_sub_field('content_header');
$text_row = get_sub_field('text_row');

?>
<section class="container fifty-fifty">
    <div class="row">
      <div class="sm-col-11 col-10 col-centered">
        <div class="row">

          <?php if($header) : ?>
            <div class="col-12">
              <h1 class="text-center">
                <?php echo $header; ?>
              </h1>
            </div>
          <?php endif; ?>

          <?php if($position === "left") : ?>

            <div class="sm-col-12 col-6 columns stretch fifty-fifty__image-wrap">
              <div class="fifty-fifty__image" data-aos="fade-right" data-aos-duration="500">
                <img src="<?php echo $img[0]; ?>" />
              </div>
            </div>

            <div class="sm-col-12 col-6 columns stretch fifty-fifty__content-wrap">

              <div class="row fifty-fifty__content" data-aos="fade-left" data-aos-delay="700">

                <?php if($content_header) : ?>
                  <h2>
                    <?php echo $content_header; ?>
                  </h2>
                <?php endif; ?>

                <?php foreach($text_row as $i => $item) {

                  // variables
                  $icon = $text_row[$i]['text_row_icon'];
                  //$icon = wp_get_attachment_image_src($icon_id, 'full');
                  $text = $text_row[$i]['text_row_text'];

                ?>

                <div class="columns__text-wrap">
                  <?php if($icon) : ?>
                    <div class="columns__icon">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $icon; ?>.svg" />
                    </div>
                  <?php endif; ?>
                  <div class="columns__text">
                    <?php echo $text; ?>
                  </div>
                </div>

                <?php } ?>

              </div>

            </div>

          <?php elseif($position === "right") : ?>

            <div class="sm-col-12 col-6 columns stretch fifty-fifty__content-wrap">

              <div class="row fifty-fifty__content" data-aos="fade-right" data-aos-delay="700">

                <?php if($content_header) : ?>
                  <h2>
                    <?php echo $content_header; ?>
                  </h2>
                <?php endif; ?>

                <?php foreach($text_row as $i => $item) {

                  // variables
                  $icon = $text_row[$i]['text_row_icon'];
                  //$icon = wp_get_attachment_image_src($icon_id, 'full');
                  $text = $text_row[$i]['text_row_text'];

                ?>

                <div class="columns__text-wrap">
                  <?php if($icon) : ?>
                    <div class="columns__icon">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $icon; ?>.svg" />
                    </div>
                  <?php endif; ?>
                  <div class="columns__text">
                    <?php echo $text; ?>
                  </div>
                </div>

                <?php } ?>

              </div>

            </div>

            <div class="sm-col-12 col-6 columns stretch fifty-fifty__image-wrap">
              <div class="fifty-fifty__image" data-aos="fade-left" data-aos-duration="500">
                <img src="<?php echo $img[0]; ?>" />
              </div>
            </div>

          <?php endif; ?>

        </div>
      </div>
    </div>
</section>

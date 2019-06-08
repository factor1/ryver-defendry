<?php

//vars
$columns = get_sub_field('columns');
$header = get_sub_field('header');

?>

<section class="container three-col">
  <div class="row">
    <div class="sm-col-11 col-12 columns col-centered">
      <?php if($header) : ?>
        <h1 class="text-center" data-aos="fade-up">
          <?php echo $header; ?>
        </h1>
      <?php endif; ?>
    </div>
  </div>

  <?php if( have_rows('columns') ) : ?>

    <div class="row">
      <div class="col-10 sm-col-11 col-centered">
        <div class="sm-block-grid-1 md-block-grid-2 block-grid-3 three-col__grid">
          <?php $load = 100; ?>
          <?php while( have_rows('columns') ) : the_row();
            // variables
            $img_id = get_sub_field('image');
            $img = wp_get_attachment_image_src($img_id, '');
            //$alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);
            $text = get_sub_field('text');

          ?>
            <div class="col stretch text-center" data-aos="fade-up" data-aos-duration="400" data-aos-delay="<?php echo $load; ?>">
              <div class="col-wrap">
                <div class="three-col-layout__img" style="background: url('<?php echo $img[0]; ?>') center/contain no-repeat"></div>
                <?php echo $text; ?>
              </div>
            </div>
          <?php $load += 100; ?>
          <?php endwhile; ?>

        </div>
      </div>
    </div>

  <?php endif; ?>

</section>

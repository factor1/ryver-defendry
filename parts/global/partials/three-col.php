<?php

//vars
$columns = get_sub_field('columns');
$header = get_sub_field('header');

?>

<section class="container three-col">
  <div class="row">
    <div class="sm-col-11 col-12 columns col-centered">
      <?php if($header) : ?>
        <h1 class="text-center" data-aos="fade-down">
          <?php echo $header; ?>
        </h1>
      <?php endif; ?>
    </div>
  </div>

  <?php if( have_rows('columns') ) : ?>

    <div class="row">
      <div class="col-10 sm-col-11 col-centered">
        <div class="sm-block-grid-1 md-block-grid-2 block-grid-3 three-col__grid">
          <?php while( have_rows('columns') ) : the_row();
            // variables
            $load = 100;
            $img = wp_get_attachment_image_src(get_sub_field('image'), '');
            $text = get_sub_field('text');

          ?>
            <div class="col stretch text-center" data-aos="fade-in" data-aos-duration="400" data-aos-delay="<?php echo $load; ?>">
              <div class="col-wrap">
                <div class="three-col-layout__img" style="background: url('<?php echo $img[0]; ?>') center/contain no-repeat"></div>
                <?php echo $text; ?>
              </div>
            </div>
          <?php $load += 50; ?>
          <?php endwhile; ?>

        </div>
      </div>
    </div>

  <?php endif; ?>

</section>

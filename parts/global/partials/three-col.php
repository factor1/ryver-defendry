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

  <div class="row">
    <div class="col-10 sm-col-11 col-centered">
      <div class="sm-block-grid-1 block-grid-3">
        <?php foreach($columns as $i => $item) {
          // variables
          $load = 700;

          $img = $columns[$i]['image'];
          //$img = wp_get_attachment_image_src($img_id, 'fifty-fifty');
          $text = $columns[$i]['text'];

        ?>
          <div class="col stretch text-center" data-aos="fade-in" data-aos-duration="400" data-aos-delay="<?php echo $load; ?>">
            <div class="col-wrap">
              <?php if($img) : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $img; ?>.svg" />
              <?php endif; ?>
              <?php echo $text; ?>
            </div>
          </div>
        <?php $load += 200; ?>
        <?php } ?>

      </div>
    </div>
  </div>

</section>

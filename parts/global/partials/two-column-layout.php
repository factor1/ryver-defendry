<?php
/*
 * Two Column Layout
 */

// Custom Fields
$headline = get_sub_field('headline');

if( have_rows('columns') ) :
  $i = 1; ?>

  <section class="container two-column-layout">
    <div class="row row--justify-content-space-around">
      <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="300" data-aos-duration="800">
        <h1><?php echo $headline; ?></h1>
      </div>

      <?php while( have_rows('columns') ) : the_row();
        $img = wp_get_attachment_image_src(get_sub_field('image'), '');
        $headline = get_sub_field('column_headline');
        $content = get_sub_field('column_content');
        $animation = $i == 1 ? 'fade-right' : 'fade-left'; ?>

        <div class="col-5 sm-col-8 sm-col-centered text-center" data-aos="<?php echo $animation; ?>" data-aos-delay="300" data-aos-duration="800">
          <div class="two-column-layout__img" style="background: url('<?php echo $img[0]; ?>') center/contain no-repeat"></div>

          <h2><?php echo $headline; ?></h2>

          <?php echo $content; ?>
        </div>

      <?php $i++; endwhile; ?>

    </div>
  </section>

<?php endif; ?>

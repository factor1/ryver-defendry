<?php
/*
 * Icon Block Grid
 */

if( have_rows('icon_blocks') ) :

  $i = 1; ?>

  <section class="container container--justify-content-center icon-block-grid">


      <?php while( have_rows('icon_blocks') ) : the_row();
        $img = wp_get_attachment_image_src(get_sub_field('icon'), 'column');
        $text = get_sub_field('text');

        // Conditional animation
        $animation = $i % 2 == 0 ? 'fade-left' : 'fade-right'; ?>

        <div class="row" data-aos="<?php echo $animation; ?>" data-aos-duration="800" data-aos-delay="500">
          <div class="col-5 sm-col-10 col-centered container icon-block-grid__column">
            <div class="icon">
              <img src="<?php echo $img[0]; ?>" alt="Response stage icon">
            </div>

            <div class="text">
              <p><?php echo $text; ?></p>
            </div>
          </div>
        </div>

      <?php $i++; endwhile; ?>

  </section>

<?php endif; ?>

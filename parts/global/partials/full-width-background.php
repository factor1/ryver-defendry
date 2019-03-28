<?php
/*
 * Full Width Background Section
 */

// Custom Fields
$img = wp_get_attachment_image_src(get_sub_field('background'), 'full');
$page_position = get_sub_field('page_position');
$headline = get_sub_field('headline');
$numColumns = get_sub_field('number_of_columns');
$copy = get_sub_field('support_content');
$btn = get_sub_field('button');

 ?>



<section class="container full-width-background <?php if($page_position) : echo "full-width-background--middle-position"; endif; ?>" style="background: url('<?php echo $img[0]; ?>') left top/cover no-repeat">
  <div class="row">

    <?php if($numColumns == 1) : ?>

      <div class="sm-col-11 col-10 col-centered text-center" data-aos="fade-up" data-aos-duration="800">
        <h4><?php echo $headline; ?></h4>

        <?php if($copy); echo $copy;?>

        <a href="<?php echo esc_url($btn['url']); ?>" class="button button--white" role="link" title="<?php echo $btn['title']; ?>">
          <?php echo $btn['title']; ?>
        </a>
      </div>

    <?php elseif($numColumns == 3) : ?>
      <div class="sm-col-11 col-11 col-centered text-center" data-aos="fade-up" data-aos-duration="800">
        <h4><?php echo $headline; ?></h4>
        <div class="sm-block-grid-1 block-grid-3">

          <?php if( have_rows('columns') ):

           	// loop through the rows of data
            while ( have_rows('columns') ) : the_row();

              // Custom Fields
              $colHeadline = get_sub_field('headline');
              $colText = get_sub_field('text');
              $colBtn = get_sub_field('button');
              $link_target = $colBtn['target'] ? $colBtn['target'] : '_self';
              $colBtnType = get_sub_field('button_type');
              $colBtnPosition = get_sub_field('button_position'); ?>

              <div class="col stretch text-center full-width-background__col">
                <h2><?php echo $colHeadline; ?></h2>
                <div class="full-width-background__col__content">
                  <?php echo $colText; ?>
                  <a target="<?php echo esc_attr($link_target); ?>" rel="noreferrer" rel="noopener" href="<?php echo esc_url($colBtn['url']); ?>" class="button button--<?php echo $colBtnType; ?><?php if($colBtnPosition == 'top') : echo ' button--top"' ; endif; ?>" role="link" title="<?php echo $colBtn['title']; ?>">
                    <?php echo $colBtn['title']; ?>
                  </a>
                </div>
              </div>

            <?php endwhile;

          endif ?>

        </div>
      </div>
    <?php endif; ?>

  </div>
</section>

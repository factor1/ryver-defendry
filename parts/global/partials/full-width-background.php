<?php
/*
 * Full Width Background Section
 */

// Custom Fields
$img = wp_get_attachment_image_src(get_sub_field('background'), 'full');
$page_position = get_sub_field('page_position');
$headline = get_sub_field('headline');
$copy = get_sub_field('support_content');
$btn = get_sub_field('button');
 ?>



<section class="container full-width-background <?php if($page_position) : echo "full-width-background--middle-position"; endif; ?>" style="background: url('<?php echo $img[0]; ?>') left top/cover no-repeat">
  <div class="row">
    <div class="sm-col-11 col-10 col-centered text-center" data-aos="fade-up" data-aos-duration="800">
      <h4><?php echo $headline; ?></h4>

      <?php if($copy); echo $copy;?>

      <a href="<?php echo esc_url($btn['url']); ?>" class="button button--white" role="link" title="<?php echo $btn['title']; ?>">
        <?php echo $btn['title']; ?>
      </a>
    </div>
  </div>
</section>

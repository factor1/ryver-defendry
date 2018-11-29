<?php
/*
 * Full Width Background Section
 */

// Custom Fields
$img = wp_get_attachment_image_src(get_sub_field('background'), 'video_bg');
$headline = get_sub_field('headline');
$btn = get_sub_field('button'); ?>

<section class="container full-width-background" style="background: url('<?php echo $img[0]; ?>') left top/cover no-repeat">
  <div class="row">
    <div class="col-12 text-center">
      <h4><?php echo $headline; ?></h4>

      <a href="<?php echo esc_url($btn['url']); ?>" class="button button--white" role="link" title="<?php echo $btn['title']; ?>">
        <?php echo $btn['title']; ?>
      </a>
    </div>
  </div>
</section>

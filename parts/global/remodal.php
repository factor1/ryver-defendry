<!-- Tell Me More -->

<?php
  // variables
  $tmm_title = get_field('tmm_title', 'option');
  $tmm_description = get_field('tmm_description', 'option');
  $tmm_content = get_field('tmm_content', 'option');

?>

<div class="remodal" data-remodal-id="tell-me-more">
  <div class="remodal__wrap">
    <div data-remodal-action="close" class="remodal-close">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/baseline-add_circle_outline.svg" />
      <div class="close-bg"></div>
    </div>
    <div class="remodal__header">
      <?php if($tmm_title) : ?>
        <h2>
          <?php echo $tmm_title; ?>
        </h2>
      <?php endif; ?>
    </div>
    <div class="remodal__body">
      <?php if($tmm_description) : ?>
        <p class="text-center">
          <?php echo $tmm_description; ?>
        </p>
      <?php endif; ?>
      <?php echo $tmm_content; ?>
    </div>
  </div>
</div>

<!-- Learn More -->

<?php
  // variables
  $lm_title = get_field('lm_title', 'option');
  $lm_description = get_field('lm_description', 'option');
  $lm_content = get_field('lm_content', 'option');

?>

<div class="remodal" data-remodal-id="learn-more">
  <div class="remodal__wrap">
    <div data-remodal-action="close" class="remodal-close">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/baseline-add_circle_outline.svg" />
      <div class="close-bg"></div>
    </div>
    <div class="remodal__header">    
      <?php if($lm_title) : ?>
        <h2>
          <?php echo $lm_title; ?>
        </h2>
      <?php endif; ?>
    </div>
    <div class="remodal__body">
      <?php if($lm_description) : ?>
        <p class="text-center">
          <?php echo $lm_description; ?>
        </p>
      <?php endif; ?>
      <?php echo $lm_content; ?>
    </div>
  </div>
</div>

<?php // Video Modals
if( have_rows('flexible_content') ):  while ( have_rows('flexible_content') ) : the_row();
  if( get_row_layout() == 'video_modal' ) :
    $video = get_sub_field('video'); ?>

    <div class="remodal-bg">
      <div class="remodal remodal--video" data-remodal-id="video-modal">
        <div data-remodal-action="close" class="remodal-close">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/baseline-add_circle_outline.svg" />
          <div class="close-bg"></div>
        </div>

        <div class="flex-video" id="video01">
          <?php echo $video; ?>
        </div>
      </div>
    </div>

  <?php endif;
endwhile; endif; ?>

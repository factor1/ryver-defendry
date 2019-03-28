<?php

// check if the flexible content field has rows of data
if( have_rows('flexible_content') ): ?>

  <div class="flexible-content">

    <?php

     // loop through all the rows of flexible content
     while ( have_rows('flexible_content') ) : the_row();


       // 50/50
       if( get_row_layout() == 'fifty_fifty' ) :
         get_template_part('parts/global/partials/fifty-fifty');

       // 3 Column
       elseif( get_row_layout() == 'three_column' ) :
         get_template_part('parts/global/partials/three-col');

       // CTA
       elseif( get_row_layout() == 'cta' ) :
         get_template_part('parts/global/partials/cta');

       // Video Modal
       elseif( get_row_layout() == 'video_modal' ) :
         get_template_part('parts/global/partials/video-modal');

       // Two Column Layout
       elseif( get_row_layout() == 'two_column_layout' ) :
         get_template_part('parts/global/partials/two-column-layout');

       // Centered Column
       elseif( get_row_layout() == 'centered_column' ) :
         get_template_part('parts/global/partials/centered-column');

       // Icon Block Grid
       elseif( get_row_layout() == 'icon_block_grid' ) :
         get_template_part('parts/global/partials/icon-block-grid');

       // Full Width Background
       elseif( get_row_layout() == 'full_width_background_section' ) :
         get_template_part('parts/global/partials/full-width-background');

       endif;

     endwhile; // close the loop of flexible content

    ?>

  </div>

  <?php

elseif( have_rows('flexible_content_home') ): ?>

  <div class="flexible-content">

    <?php

     // loop through all the rows of flexible content
     while ( have_rows('flexible_content') ) : the_row();


       // 50/50
       if( get_row_layout() == 'fifty_fifty' ) :
         get_template_part('parts/global/partials/fifty-fifty');

       // 3 Column
       elseif( get_row_layout() == 'three_column' ) :
         get_template_part('parts/global/partials/three-col');

       // CTA
       elseif( get_row_layout() == 'cta' ) :
         get_template_part('parts/global/partials/cta');

       endif;

     endwhile; // close the loop of flexible content

    ?>

  </div>


<?php endif;

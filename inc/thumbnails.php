<?php

/*-----------------------------------------------------------------------------
  Get featured image as url
-----------------------------------------------------------------------------*/
function featuredURL($size = 'full'){
  $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $size );
  $url = $thumb['0'];
  echo $url;
}

/*-----------------------------------------------------------------------------
  Adds thumbnail support and additional thumbnail sizes
-----------------------------------------------------------------------------*/

if( function_exists('prelude_features') ){
  // Use add_image_size below to add additional thumbnail sizes
  add_image_size('bio', '600', '800', 'true');
  add_image_size('feature', '600', '600', 'true');
  add_image_size('show-more', '800', '500', 'true');
}

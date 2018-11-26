<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="<?php the_title(); ?>" />
  <meta property="og:site_name" content="<?php bloginfo('name') ?>">

  <?php
  /* Theme color for browsers that support it
  <meta name="theme-color" content="#000">
  */
  ?>

  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php endif; ?>

  <?php if (is_search()) { ?>
   <meta name="robots" content="noindex, nofollow" />
	<?php } ?>

  <?php if ( is_singular() && comments_open() ) wp_enqueue_script( 'comment-reply' ); ?>

  <?php wp_head(); ?>


  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-57476026-4"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-57476026-4');
  </script>


    <link rel="stylesheet" href="https://use.typekit.net/jws5pcx.css">
</head>

<body <?php body_class(); ?>>


  <?php // Main Content ?>
  <main>

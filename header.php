<?php
/**
 *Theme Header
 */
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=yes">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon" />
  <title><?php wp_title('|', true, 'right'); ?></title>
  <script type="text/javascript" src="//use.typekit.net/izi7tnt.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  <?php wp_head(); ?>
  <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	  ga('create', 'UA-42486629-1', 'ryanwiemer.com');
	  ga('send', 'pageview');
  </script>
</head>
<body <?php body_class('loading'); ?>>
<header class="site-header">
    <div class="site-header__container">
      <nav class="site-header__nav">
            <?php wp_nav_menu( array( 'menu' => 'Menu 1', 'container' => 'ul', 'menu_class' => '', 'container_class' => '') ); ?>
      </nav>
      <div class="site-header__inner">
        <a href="<?php echo site_url(); ?>"><h1 class="site-header__title">Ryan Wiemer</h1></a>
        <button class="site-header__toggle icon-"></button>
      </div>
    </div>
</header>

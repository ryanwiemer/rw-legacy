<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package rw
 */
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=yes">
  <title>About Ryan Wiemer</title>
  <script type="text/javascript" src="//use.typekit.net/izi7tnt.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="site-header">
  <section>
    <nav class="site-header__nav">
          <?php wp_nav_menu( array( 'menu' => 'Menu 1', 'container' => 'ul', 'menu_class' => '', 'container_class' => '') ); ?>
    </nav>
    <div>
      <a href="<?php echo site_url(); ?>"><h1 class="site-header__title">Ryan Wiemer</h1></a>
      <button class="site-header__toggle icon-"></button>
    </div>
    <section>
</header>

<?php
/**
  * Header
  */
?><!DOCTYPE html>
<html lang="en">
<head>
<title><?php wp_title('|', true, 'right'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">

<!-- Fav Icon -->
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon" />
<?php wp_head(); ?>

<!-- Fontdeck -->
<script type="text/javascript">
var html = document.getElementsByTagName('html')[0];
html.className += '  wf-loading';
setTimeout(function() {
  html.className = html.className.replace(' wf-loading', '');
}, 5000);

WebFontConfig = { fontdeck: { id: '60762' } };

(function() {
  var wf = document.createElement('script');
  wf.src = 'http://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
  wf.type = 'text/javascript';
  wf.async = 'true';
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(wf, s);
})();
</script>
<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-42486629-1', 'ryanwiemer.com');
  ga('send', 'pageview');
</script>

</head>
<body <?php body_class(); ?>>
  <header class="header">
    <nav class="nav">
      <a href="<?php echo site_url(); ?>"><h1>Ryan Wiemer</h1></a>
      <?php wp_nav_menu( array( 'menu' => 'Menu 1', 'container' => false, 'menu_class' => '', 'container_class' => '') ); ?>
    </nav>
  </header>

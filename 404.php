<?php
/**
	* 404
	*/
get_header(); ?>

<div class="container">
	<h2 class="error404__title">Error 404!</h2>
	<p class="error404__message">Oops! That page can&rsquo;t be found. Please check the URL and try again. Or return to the homepage by clicking <a href="<?php echo site_url(); ?>">here</a>.</p>
	<img class="error404__image" src="<?php echo site_url(); ?>/wp-content/uploads/2015/10/twilight_zone.gif"/>
</div> <!-- container -->
<?php get_footer(); ?>

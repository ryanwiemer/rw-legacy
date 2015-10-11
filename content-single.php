<?php
/**
	* Content-Single
	*/
?>

<div class="container">
<div class="single__details">
<h2 class="single__title"><?php the_title(); ?></h3>
	<ul>
		<li><p>A minimal and clean photography website built on WordPress.</p></li>
		<li><strong>Role:</strong> <?php $category = get_the_category(); echo $category[0]->cat_name; ?></li>
		<li><strong>URL:</strong> <a href="#" target="_blank">www.kathrynkellerartist.com</a></li>
	</ul>
</div>


<div class="navigation">
	<span class="navigation__left"><?php previous_post_link('%link',''); ?></span>
	<span class="navigation__right"><?php next_post_link('%link',''); ?></span>
</div> <!--navigation -->

<?php the_content(); ?>
</div> <!-- container -->

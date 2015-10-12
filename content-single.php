<?php
/**
	* Content-Single
	*/
?>

<div class="container">
<div class="single__details">
	<div class="single__details__left">
		<h2><?php the_title(); ?></h2>
	</div>
	<ul class="single__details__right">
		<li class="first"><?php the_field('single_description'); ?></li>
		<li><strong>Role:</strong> <?php $category = get_the_category(); echo $category[0]->cat_name; ?></li>
		<li><strong>URL:</strong> <?php the_field('single_url');?></li>
	</ul>
</div>

<?php the_content(); ?>
<div class="single__navigation">
	<span class="single__navigation__left"><?php previous_post_link('%link','Previous Project'); ?></span>
	<span class="single__navigation__right"><?php next_post_link('%link','Next Project'); ?></span>
</div>
</div> <!-- container -->

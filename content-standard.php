<?php
/**
	* Content-Standard
	*/
?>

<article class="project">
	<a href="<?php the_permalink(); ?>">
		<?php if ( has_post_thumbnail() ) {$medium = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');?>
		<img src="<?php echo $medium[0]; ?>"><?php } else {echo '<img src="http://placehold.it/350x150"/>';}?>
		<h2><?php the_title(); ?></h2>
		<h3><?php $category = get_the_category(); echo $category[0]->cat_name; ?></h3>
	</a>
</article>

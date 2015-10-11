<?php
/**
	* Content-Standard
	*/
?>

<article class="project">
	<a href="<?php the_permalink(); ?>">
		<div class="project__overlay"></div>
		<?php if ( has_post_thumbnail() ) {$medium = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');?>
		<img src="<?php echo $medium[0]; ?>"><?php } else {echo '<img src="http://placehold.it/1500x1125"/>';}?>
		<figure>
			<h2><?php the_title(); ?></h2>
			<h3><?php $category = get_the_category(); echo $category[0]->cat_name; ?></h3>
		</figure>
	</a>
</article>

<?php
/**
	* Content-Standard
	*/
?>

<article class="post">
	<div class="post__img" style="background-image: url('<?php if ( has_post_thumbnail() ) { $image_id = get_post_thumbnail_id();
	$image_url = wp_get_attachment_image_src($image_id,'medium', true);
	echo $image_url[0]; } else {$placeholder = get_template_directory_uri() . '/assets/img/placeholder.png'; echo $placeholder;}?>');" >
	</div>
	<div class="post__details">
		<h2 class="post__title"><?php the_title(); ?></h2>
		<hr>
		<div>
			<p class="post__date"><?php the_time('F j, Y'); ?></p>
		</div>
		<a class="post__read btn"href="<?php echo get_permalink(); ?>">Read More</a>
	</div>
</article>

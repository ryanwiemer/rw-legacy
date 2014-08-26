<?php
/**
 * The template used for the project post type
 */
?>

<div class="project" style="background-image: url('<?php if ( has_post_thumbnail() ) { $image_id = get_post_thumbnail_id();
$image_url = wp_get_attachment_image_src($image_id,'medium', true);
echo $image_url[0]; } else {$placeholder = get_template_directory_uri() . '/assets/img/placeholder.png'; echo $placeholder;}?>');" >
	<a href="<?php echo get_permalink(); ?>"><h2 class="project__title"><?php the_title(); ?></h2></a>
</div>

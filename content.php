<?php
/**
 * @package rw
 */
?>



<article class="post">

<div class="post__img" style="background-image: url('<?php if ( has_post_thumbnail() ) { $image_id = get_post_thumbnail_id();
$image_url = wp_get_attachment_image_src($image_id,'full', true);
echo $image_url[0]; } else {}?>');" >
</div>

<div class="post__details">
	<h2 class="post__title"><?php the_title() ;?></h2>
	<hr>
	<p class="post__date"><span class="icon-clock"></span><?php the_date(); ?></p>
	<p class="post__tag"><span class="icon-tag"></span><?php $category = get_the_category(); echo $category[0]->cat_name; ?></p>
	<a class="post__read"href="<?php echo get_permalink(); ?>">read more</a>
</div>

</article>

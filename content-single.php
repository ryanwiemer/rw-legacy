<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package rw
 */
?>

<div class="hero" style="background-image: url('<?php if ( has_post_thumbnail() ) { $image_id = get_post_thumbnail_id();
$image_url = wp_get_attachment_image_src($image_id,'full', true);
echo $image_url[0]; } else {}?>');">
<div>
		<h2 class="hero__title"><?php the_title() ;?></h2>
	</div>

</div> <!-- hero -->
<div class="wrapper">
<div class="container">

<div class="navigation">
	<span class="article__date"><span class="icon-clock"></span><?php the_date(); ?></span>	
	<span class="article__tag"><span class="icon-tag"></span><?php $category = get_the_category(); echo $category[0]->cat_name; ?></span>
	<div class="navigation__right">
	<?php next_post('%',
	'next article', 'no'); ?>
	</div>
	<div class="navigation__left">
	<?php previous_post('%',
	'previous article', 'no'); ?>
	</div>
</div> <!-- end navigation -->

<?php the_content(); ?>

</div> <!-- container -->
</div> <!-- wrapper -->

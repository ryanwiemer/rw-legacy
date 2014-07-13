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
	<?php if(!is_singular( 'projects' ) ){?>
	<span class="article__date"><span class="icon-clock"></span><?php the_date(); ?></span>
	<?php }
	else {}?>


	<span class="article__tag"><span class="icon-tag"></span><?php $category = get_the_category(); echo $category[0]->cat_name; ?></span>
	<div class="navigation__right">
<?php if(!is_singular( 'projects' ) ){?>
	<?php next_post('%',
	'next post', 'no'); ?>
	</div>
	<div class="navigation__left">
	<?php previous_post('%',
	'prev post', 'no'); ?>
	</div>

	<?php }
	else {?>
	<?php next_post('%',
	'next project', 'no'); ?>
	</div>
	<div class="navigation__left">
	<?php previous_post('%',
	'prev project', 'no'); ?>
	</div>
<?php }?>
</div> <!-- end navigation -->
<?php the_content(); ?>

<?php
	// If comments are open or we have at least one comment, load up the comment template
	if ( comments_open() || '0' != get_comments_number() ) :
		comments_template();
	endif;
?>
</div> <!-- container -->
</div> <!-- wrapper -->

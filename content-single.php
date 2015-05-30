<?php
/**
	* Content-Single
	*/
?>

<div class="hero__filler">
<div class="hero" style="background-image: url('<?php if ( has_post_thumbnail() ) { $image_id = get_post_thumbnail_id();
$image_url = wp_get_attachment_image_src($image_id,'full', true);
echo $image_url[0]; } else {}?>');">
			<h2 class="hero__title"><?php the_title() ;?>
				<?php if(get_field('hero_link'))
					{
						echo '<a href="' . get_field('hero_link') . '"class="web-link icon-link"></a>';
					}
				?>
			</h2>
</div>
</div>

</div> <!-- hero -->
<div class="wrapper">
<div class="container">

<div class="navigation">

	<?php if(!is_singular( 'projects' ) ){?>
	<span class="navigation__left"><?php previous_post_link('%link',''); ?></span>
	<span class="post__date"><?php the_time('F j, Y'); ?></span>
	<span class="navigation__right"><?php next_post_link('%link',''); ?></span>

	<?php }else {?>
	<span class="navigation__left"><?php previous_post_link('%link',''); ?></span>
	<span class="post__tag"><?php $category = get_the_category(); echo $category[0]->cat_name; ?></span>
	<span class="navigation__right"><?php next_post_link('%link',''); ?></span>
	<?php }?>

</div> <!--navigation -->

<?php the_content(); ?>
<?php
	// If comments are open or we have at least one comment, load up the comment template
	if ( comments_open() || '0' != get_comments_number() ) :
		comments_template();
	endif;
?>
</div> <!-- container -->
</div> <!-- wrapper -->

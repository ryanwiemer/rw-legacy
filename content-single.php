<?php
/**
	* Content-Single
	*/
?>

<div class="container">

<div class="navigation">
	<span class="navigation__left"><?php previous_post_link('%link',''); ?></span>
	<span class="post__date"><?php the_time('F j, Y'); ?></span>
	<span class="navigation__right"><?php next_post_link('%link',''); ?></span>
</div> <!--navigation -->

<?php the_content(); ?>
<?php
	// If comments are open or we have at least one comment, load up the comment template
	if ( comments_open() || '0' != get_comments_number() ) :
		comments_template();
	endif;
?>
</div> <!-- container -->

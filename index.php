<?php
/**
 * Index
 */

get_header(); ?>
<div class="container">
	<?php if ( have_posts() ) : ?>
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<p><?php _e( 'Sorry, there are no posts.' ); ?></p>
	<?php endif; ?>

	<div class="pag-nav">
		 <?php posts_nav_link(' ','Newer Posts','Older Posts'); ?>
	</div>
</div> <!-- container -->
<?php get_footer(); ?>

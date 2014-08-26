<?php
/**
 * The main template file.
 */

get_header(); ?>
<div class="wrapper">
<div class="container">
<div class="page-header">
	<h2 class="page-header__title">My Words, Thoughts and Insights</h2>
</div>

	<?php if ( have_posts() ) : ?>
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<p><?php _e( 'Sorry, there are no posts' ); ?></p>
	<?php endif; ?>

	<div class="pag-nav">
		 <?php posts_nav_link(' ','Newer Posts','Older Posts'); ?>
	</div>
</div> <!-- container -->
</div> <!-- wrapper -->
<?php get_footer(); ?>

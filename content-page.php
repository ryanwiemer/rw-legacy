<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package rw
 */
?>
<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'content', 'page' ); ?>

<?php endwhile; // end of the loop. ?>

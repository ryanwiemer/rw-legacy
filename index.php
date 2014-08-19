<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package rw
 */

get_header(); ?>
<div class="wrapper">
<div class="container">
<div class="page-header">
		<?php	if ( is_home() ) { ?>
				<h2 class="page-header__title"> My Words, <em>Thoughts</em> and Insights</h2>
			<?php	} else { ?>
				<h2 class="page-header__title"> See My <em>Projects</em> on the Web</h2>
		<?php	}
			?>
</div>

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>


		<?php	if ( is_home() ) { ?>
    <div class="pag-nav">
				 <?php posts_nav_link(' ','Newer Posts','Older Posts'); ?>
				</div>
			<?php	} else { ?>
    		<div class="pag-nav">
						<?php	posts_nav_link(' ','Newer Projects','Older Projects'); ?>
						</div>
		<?php	}
			?>

</div> <!-- container -->
</div> <!-- wrapper -->
<?php get_footer(); ?>

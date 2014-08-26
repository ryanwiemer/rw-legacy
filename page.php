<?php
/**
 *
 * @package rw
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>
  <?php /* Start the Loop */ ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <?php
      get_template_part( 'content', 'page' );
    ?>

<?php endwhile; else: ?>
    <p><?php _e( 'Sorry, that page does not exist.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>

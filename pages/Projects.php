<?php
/**
 * Template Name: Projects Page
 * Description: A Page Template for the Projects Page
 */
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="wrapper">
<div class="container">

  <?php the_content(); ?>

<?php endwhile; else: ?>

  <p>Sorry, this page does not exist</p>

<?php endif; ?>


</div> <!-- container -->
</div> <!-- wrapper -->

<?php get_footer(); ?>

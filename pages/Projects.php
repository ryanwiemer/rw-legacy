<?php
/**
 * Template Name: Projects Page
 * Description: A Page Template for the Projects Page
 */
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="hero hero--projects">
<div>
    <h2 class="hero__title--projects">Amateur Developer and web enthusiast</h2>
  </div>
</div> <!-- hero -->
<div class="wrapper">
<div class="container">

  <?php the_content(); ?>

<?php endwhile; else: ?>

  <p>Sorry, this page does not exist</p>

<?php endif; ?>


</div> <!-- container -->
</div> <!-- wrapper -->

<?php get_footer(); ?>

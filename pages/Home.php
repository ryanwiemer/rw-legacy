<?php
/**
 * Template Name: Home Page
 * Description: A Page Template for the Home Page
 */
get_header(); ?>

<div class="hero hero--home">
  <div>
    <h2 class="hero__title">Lorem Ipsum dolor</h2>
  </div>
  <a href="#" class="hero__scroll">scroll down</a>
</div> <!-- hero -->
<div class="wrapper">
<div class="container">



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php the_content(); ?>

<?php endwhile; else: ?>

  <p>Sorry, this page does not exist</p>

<?php endif; ?>


</div> <!-- container -->
</div> <!-- wrapper -->

<?php get_footer(); ?>

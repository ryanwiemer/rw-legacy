<?php
/**
 * Template Name: About Page
 * Description: A Page Template for the Home Page / About Page
 */
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="wrapper">
<div class="container">

  <div class="about__image">
    <img src="http://placehold.it/150x200" />
  </div>
  <h2 class="about__title"><?php the_title(); ?></h2>
  <hr>
  <div class="about__bio">
    <?php the_content(); ?>
    <a href="#" class="btn">
        download resume
    </a>
  </div>


<?php endwhile; else: ?>

  <p>Sorry, this page does not exist</p>

<?php endif; ?>


</div> <!-- container -->
</div> <!-- wrapper -->

<?php get_footer(); ?>

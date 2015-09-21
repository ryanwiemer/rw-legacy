<?php
/**
 * Template Name: Info Page
 * Description: A Page Template for the Info Page
 */
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="hero"></section>
<div class="container">

<p id="info-intro">Hello lorem <a href="#">ipsum dolore set</a>. Vitae ante ipsum. Nunc.Fusce quis quam eu ipsum. Laoreet sed. Sed pulvinar non enim eget. Quisque in nisl egestas, consectetur. Vivamus consequat nunc tortor, non.</p>

<?php the_content(); ?>

<?php endwhile; else: ?>

  <p>Sorry, this page does not exist</p>

<?php endif; ?>

</div> <!-- container -->
<?php get_footer(); ?>

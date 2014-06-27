<?php
/**
 * Template Name: About Page
 * Description: A Page Template for the Home Page / About Page
 */
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="wrapper">
<div class="container">
  <?php the_content(); ?>

  <div class="about__image">
    <img src="http://placehold.it/150x200" />
  </div>
  <h2 class="about__title"><?php the_field('hero_title'); ?></h2>
  <hr>
  <div class="about__bio">
    <p>Praesent adipiscing eu ante egestas fringilla. Duis sagittis pretium enim, viverra faucibus ipsum. Duis lobortis tincidunt magna, sit amet blandit elit eleifend ut. Morbi quis mauris nec ligula egestas laoreet. Donec in sollicitudin mi. Morbi malesuada erat justo, et ultrices libero condimentum non. Integer vulputate elementum eros ac volutpat. Nulla at sem sit amet nisl mollis posuere. Proin sit amet odio dignissim, pretium tortor eget, semper neque. Nullam accumsan dui justo, sed semper orci hendrerit non. Aliquam bibendum urna mi, sit amet ullamcorper orci sodales ut. Sed ultricies enim eget suscipit eleifend. Quisque ut urna sed ipsum luctus condimentum vel ac velit.</p>
    <p>Praesent adipiscing eu ante egestas fringilla. Duis sagittis pretium enim, viverra faucibus ipsum. Duis lobortis tincidunt magna, sit amet blandit elit eleifend ut. Morbi quis mauris nec ligula egestas laoreet. Donec in sollicitudin mi. Morbi malesuada erat justo, et ultrices libero condimentum non. Integer vulputate elementum eros ac volutpat. Nulla at sem sit amet nisl mollis posuere. Proin sit amet odio dignissim, pretium tortor eget, semper neque. Nullam accumsan dui justo, sed semper orci hendrerit non. Aliquam bibendum urna mi, sit amet ullamcorper orci sodales ut. Sed ultricies enim eget suscipit eleifend. Quisque ut urna sed ipsum luctus condimentum vel ac velit.</p>
  </div>


<?php endwhile; else: ?>

  <p>Sorry, this page does not exist</p>

<?php endif; ?>


</div> <!-- container -->
</div> <!-- wrapper -->

<?php get_footer(); ?>

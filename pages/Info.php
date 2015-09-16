<?php
/**
 * Template Name: Info Page
 * Description: A Page Template for the Info Page
 */
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="container">

<div class="about__image">
  <img alt="Ryan Wiemer" src="<?php echo get_template_directory_uri(); ?>/assets/img/bio.jpg">
</div>

<div class="about__bio">
  <?php the_content(); ?>
  <a href="<?php echo get_site_url(); ?>/wp-content/uploads/2014/07/Ryan-Wiemer-Resume.pdf" class="btn">Download Resume</a>
</div>

<?php endwhile; else: ?>

  <p>Sorry, this page does not exist</p>

<?php endif; ?>

</div> <!-- container -->
<?php get_footer(); ?>

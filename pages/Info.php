<?php
/**
 * Template Name: Info Page
 * Description: A Page Template for the Info Page
 */
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="container">
<div class="info-image">
</div>
<h2 class="info-title">Lorem Ipsum Dolor</h2>

<div class="info-bio">
  <?php the_content(); ?>
  <a href="<?php echo get_site_url(); ?>/wp-content/uploads/2014/07/Ryan-Wiemer-Resume.pdf" class="btn">Download Resume</a>
</div>

<?php endwhile; else: ?>

  <p>Sorry, this page does not exist</p>

<?php endif; ?>

</div> <!-- container -->
<?php get_footer(); ?>

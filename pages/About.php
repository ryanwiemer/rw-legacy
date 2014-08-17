<?php
/**
 * Template Name: About Page
 * Description: A Page Template for the About Page
 */
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="wrapper">
<div class="container">
<div class="page-header">
  <h2 class="page-header__title">All About <em>Ryan Wiemer</em></h2>
</div>

  <div class="about__image">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bio.jpg" alt="Ryan Wiemer"/>
  </div>
  <div class="about__bio">
    <?php the_content(); ?>
    <a href="<?php echo get_site_url(); ?>/wp-content/uploads/2014/07/Ryan-Wiemer-Resume.pdf" class="btn">Download Resume</a>
  </div>


<?php endwhile; else: ?>

  <p>Sorry, this page does not exist</p>

<?php endif; ?>

</div> <!-- container -->
</div> <!-- wrapper -->
<?php get_footer(); ?>

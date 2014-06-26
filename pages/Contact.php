<?php
/**
 * Template Name: Contact Page
 * Description: A Page Template for the Contact Page
 */
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="hero hero--image" style="background-image: url('<?php if ( has_post_thumbnail() ) { $image_id = get_post_thumbnail_id();
$image_url = wp_get_attachment_image_src($image_id,'full', true);
echo $image_url[0]; } else {}?>');">
<div>
    <h2 class="hero__title">Lorem ipsum dolor set.</h2>
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

<?php
/**
 * Template Name: Info Page
 * Description: A Page Template for the Info Page
 */
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="banner">
  <div class="banner__contents">
    <h2 class="banner__text">
      <?php the_field('banner_headline'); ?>
    </h2>
  </div>
</section> <!-- Intro -->
<div id="info-top" class="container">

<section class="info">

  <div class="info__image">

    <?php if ( has_post_thumbnail() ) { the_post_thumbnail();} else { echo '<img src="http://placehold.it/600x600" />'; }?>

    <?php if( have_rows('contact_links') ): ?>
      <ul class="contact__methods">
        <?php while( have_rows('contact_links') ): the_row();?>
          <li><?php the_sub_field('contact_link'); ?></li>
        <?php endwhile; ?>
      </ul>
    <?php endif; ?>

  </div>

  <div class="info__bio">
    <?php the_content(); ?>
  </div>

</section>
<?php endwhile; else: ?>
  <p>Sorry, this page does not exist</p>
<?php endif; ?>

</div> <!-- container -->
<?php get_footer(); ?>

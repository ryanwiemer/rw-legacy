<?php
/**
 * Template Name: Projects Page
 * Description: A Page Template for the Projects Page
 */
get_header(); ?>

<div class="wrapper">
<div class="container">

<?php $loop = new WP_Query( array( 'post_type' => 'project_post_type', 'posts_per_page' => 6 ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

<div class="project" style="background-image: url('<?php if ( has_post_thumbnail() ) { $image_id = get_post_thumbnail_id();
$image_url = wp_get_attachment_image_src($image_id,'full', true);
echo $image_url[0]; } else {}?>');" >
<a href="<?php echo get_permalink(); ?>"><h2 class="project__title"><?php the_title(); ?></h2></a>
</div>

<?php endwhile; wp_reset_query(); ?>

</div> <!-- container -->
</div> <!-- wrapper -->

<?php get_footer(); ?>

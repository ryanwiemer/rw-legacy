<?php
/**
  * Projects Page
  */
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="wrapper">
<div class="container">
  <div class="page-header">
    <h2 class="page-header__title">I'm a Digital Marketer Who Loves the Web</h2><p class="page-header__paragraph">My name is Ryan Wiemer and I work to make the web a better place one project at a time</p>
  </div>

  <?php
    if ( get_query_var('paged') ) {
        $paged = get_query_var('paged');
    } else if ( get_query_var('page') ) {
        $paged = get_query_var('page');
    } else {
        $paged = 1;
    }
    $args = array('post_type' => 'projects', 'paged' => $paged, 'posts_per_page' => '6');
    $temp = $wp_query;
    $wp_query = null;
    $wp_query = new WP_Query();
    $wp_query->query($args);
    while ($wp_query->have_posts()) : $wp_query->the_post();
  ?>

  <?php get_template_part( 'content', 'projects' ); ?>
  <?php endwhile; ?>

  <div class="pag-nav">
      <?php previous_posts_link('Newer Projects') ?>
      <?php next_posts_link('Older Projects') ?>
  </div>

  <?php $wp_query = null; $wp_query = $temp;  // Reset ?>

  <?php endwhile; else: ?>
    <p><?php _e( 'Sorry, there are no projects.' ); ?></p>
  <?php endif; ?>

</div> <!-- container -->
</div> <!-- wrapper -->
<?php get_footer(); ?>

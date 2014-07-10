<?php
/**
 *
 * @package rw
 */

get_header(); ?>

<div class="wrapper">
<div class="container">
<?php
    get_template_part( 'content', get_post_format() );
?>

</div> <!-- container -->
</div> <!-- wrapper -->

<?php get_footer(); ?>

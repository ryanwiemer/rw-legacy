<?php
/**
 *
 * @package rw
 */

get_header(); ?>

<div class="container">
<div class="wrapper">

<?php
    get_template_part( 'content', get_post_format() );
?>

</div> <!-- wrapper -->
</div> <!-- container -->

<?php get_footer(); ?>

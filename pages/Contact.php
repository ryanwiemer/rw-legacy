<?php
  if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
    wpcf7_enqueue_scripts();
  }
?>

<?php
/**
 * Template Name: Contact Page
 * Description: A Page Template for the Contact Page
 */
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="wrapper">
<div class="container">

<form class="form" method="post" name="contact" novalidate="novalidate">
  <div class="form__intro">
    <h2 class="form__intro__title">Get in Touch</h2>
    <hr>
    <p class="form__intro__message"><?php the_content(); ?></p>
  </div>


  <fieldset>
    <div class="form__name">
      <input class="form__name__input" name="name" placeholder="Name"required="" type="text" value="" />
    </div>

    <div class="form__email">
      <input class="form__email__input" name="email" placeholder="Email" required="" type="text" value="" />
    </div>

    <div class="form__message">
      <textarea class="form__message__textarea" placeholder="Message"name="message" required=""></textarea>
    </div>

    <input class="form__submit" name="submit" type="submit" value="send" />
  </fieldset>
</form>
<div class="form__success">

Message sent successfully. Thank you!

</div>
<div class="form__error">

Something went wrong, try refreshing and submitting the form again.

</div>



<?php endwhile; else: ?>

  <p>Sorry, this page does not exist</p>

<?php endif; ?>


</div> <!-- container -->
</div> <!-- wrapper -->

<?php get_footer(); ?>

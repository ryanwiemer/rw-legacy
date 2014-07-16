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
<div class="page-header">
  <h2 class="page-header__title"> How to get in <em>contact</em></h2>
</div>

<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact.jpg" class="contact-intro__image" />
<div class="contact-intro">
  <p class="contact-intro__content">I am currently available for small projects or other work opportunities. If you'd like to work together or just want to say "hi" please fill out the form below.</p>
</div>


<form class="form" method="post" name="contact" novalidate="novalidate">
  <fieldset>
    <div class="form__name">
      <input class="form__name__input" name="name" placeholder="Name"required="" type="text" value="" />
    </div>

    <div class="form__email">
      <input class="form__email__input" name="email" placeholder="Email" required="" type="text" value="" />
    </div>

    <div class="form__subject">
      <input class="form__subject__input" name="subject" placeholder="Subject" required="" type="text" value="" />
    </div>

    <div class="form__message">
      <textarea class="form__message__textarea" placeholder="Message"name="message" required=""></textarea>
    </div>

    <input class="form__submit btn" name="submit" type="submit" value="send" />
    <div class="form__success">
      Message sent successfully!
    </div>
    <div class="form__error">
      Error, try again.
    </div>
  </fieldset>
</form>

<script>
Modernizr.load({
  test: Modernizr.input.placeholder,
  nope: 'http://ryanwiemer.com/wp-content/themes/rw/assets/js/placeholders.min.js',
});
</script>

<?php endwhile; else: ?>

  <p>Sorry, this page does not exist</p>

<?php endif; ?>

</div> <!-- container -->
</div> <!-- wrapper -->

<?php get_footer(); ?>

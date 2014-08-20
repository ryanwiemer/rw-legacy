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
  <h2 class="page-header__title"> How to Get in Contact</h2>
</div>
<div class="contact-intro">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact.jpg" class="contact-intro__image"/>
</div>

<form class="form" method="post" name="contact">
  <fieldset>
    <div class="form__name">
      <input class="form__name__input" name="name" for="name" placeholder="Name" type="text"/>
    </div>

    <div class="form__email">
      <input class="form__email__input" name="email" for="email" placeholder="Email" type="text"/>
    </div>

    <div class="form__subject">
      <input class="form__subject__input" name="subject" for="subject" placeholder="Subject" type="text"/>
    </div>

    <div class="form__message">
      <textarea class="form__message__textarea" name="message" for="message" placeholder="Message" type="text"></textarea>
    </div>

    <div class="form__bot">
      <input class="form__bot__input" name="bot" for="bot" placeholder="Spam filter (Leave blank)" type="text"/>
    </div>

    <input class="form__submit btn" name="submit" type="submit" value="Send Message"/>

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
  nope: '<?php echo get_template_directory_uri(); ?>/assets/js/placeholders.min.js',
});
</script>

<?php endwhile; else: ?>

  <p>Sorry, this page does not exist</p>

<?php endif; ?>

</div> <!-- container -->
</div> <!-- wrapper -->
<?php get_footer(); ?>

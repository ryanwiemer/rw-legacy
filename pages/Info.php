<?php
/**
 * Template Name: Info Page
 * Description: A Page Template for the Info Page
 */
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="intro">
  <a href="#info"></a>
  <p class="intro__text">Ryan Wiemer<br><span>Digital Project Manager</span></p>
  <div class="intro__scroll"><span>Scroll Down</span></div>
</section> <!-- Intro -->
<div class="container">

<section id="info" class="info">
  <div class="info__bio">
    <p>
      My name is Ryan Wiemer and I am a project manager working in San Francisco, California. I particularly enjoy working on interactive and web focused projects. I have expertise in strategic planning, technical problem solving and front end web development. I currently work at <a href="#">Epsilon</a>, a global marketing agency, where I have managed proejcts for clients including Pacific Union, ProSight Specialty Insurance, RSA, and American Express just to name a few.
    </p>
    <p>
      When not working I can usually be found reading up on the latest tech gadgets, exploring the San Francisco Bay Area, or out taking photographs. I love meeting new people with similar passions or goals in making a difference on the web. If you are interested in possible work or project opportunities please feel free to get in touch.
    </p>
    <ul class="contact__methods">
      <li><a href="mailto:ryan@ryanwiemer.com">ryan@ryanwiemer.com</a></li>
      <li><a href="http://ryanwiemer.dev/assets/ryan_wiemer_resume.pdf" target="_blank">Resume</a></li>
      <li><a href="https://www.linkedin.com/in/ryanwiemer" target="_blank">LinkedIn</a></li>
      <li><a href="https://instagram.com/ryanwiemer/" target="_blank">Instagram</a></li>
    </ul>
  </div>
  <img class="info__image" src='http://placehold.it/600x600' />
</section>

<?php the_content(); ?>
<?php endwhile; else: ?>
  <p>Sorry, this page does not exist</p>
<?php endif; ?>

</div> <!-- container -->
<?php get_footer(); ?>

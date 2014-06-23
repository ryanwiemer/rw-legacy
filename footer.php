<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package rw
 */
?>
<footer class="site-footer">
  <div class="site-footer__container">
    <div class="site-footer__colophon">
      &copy; Copyright 2014 Ryan Wiemer. All Rights Reserved.
    </div>
    <div class="site-footer__icons">
      <a href="https://github.com/ryanwiemer" target="blank" class="icon-github"></a>
      <a href="https://github.com/ryanwiemer" target="blank" class="icon-linkedin"></a>
      <a href="https://github.com/ryanwiemer" target="blank" class="icon-mail"></a>
    </div>
  </div>
</footer>
</body>
<?php wp_footer(); ?>
<script>
$(document).ready(function(){
$('.site-header__toggle').click(function() {
  $('body').toggleClass('open');
})});
</script>
</html>

//Menu
$(document).ready(function() {
  $('.site-header__toggle').click(function() {
  $('body').toggleClass('open');
  });
  $('.page-projects .site-header__inner a').click(function() {
    return false;
  });
  $('.site-header__nav .active a').click(function() {
    return false;
  });
});

//Loading classes
$(window).load(function() {
  $('body').removeClass('loading');
  $('body').addClass('loaded');
});

//Check for FastClick
Modernizr.load({
  test: Modernizr.touch,
  yep: 'http://ryanwiemer.com/wp-content/themes/rw/assets/js/vendor/fastclick.min.js',
  callback: function () {
  window.addEventListener('load', function() {
    FastClick.attach(document.body);
}, false);
  }
});

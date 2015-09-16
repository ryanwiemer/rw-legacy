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

$(document).ready(function(){
$('.site-header__toggle').click(function() {
  $('body').toggleClass('open');
});});

$(window).load(function() {
  $("body").removeAttr("id");
});

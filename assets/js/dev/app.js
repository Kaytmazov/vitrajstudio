jQuery(window).scroll(function() {
  var height = jQuery(window).scrollTop();

  if(height > 40){
    jQuery('header').addClass('scroll');
  } else {
    jQuery('header').removeClass('scroll');
  }
});
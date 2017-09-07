// Скрываем Header-top
jQuery(window).scroll(function() {
  var height = jQuery(window).scrollTop();

  if(height > 136){
    jQuery('header').addClass('scroll');
  } else {
    jQuery('header').removeClass('scroll');
  }
});

// Открываем Модальное окно
jQuery(document).ready(function(){
  jQuery('button.icon-tel').on('click', function(e){
    jQuery('.popup-contacts').addClass('open');
    e.preventDefault();
  });
  jQuery('.overlay, .icon-close').on('click', function(e){
    jQuery('.popup').removeClass('open');
    e.preventDefault();
  });

});
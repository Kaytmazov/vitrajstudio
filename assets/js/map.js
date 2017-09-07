ymaps.ready(init);
var myMap, 
  myPlacemark;

function init(){ 
  myMap = new ymaps.Map("map", {
    center: [42.982000, 47.463800],
    zoom: 17,
    controls: []
  }); 

  if (document.documentElement.clientWidth < 769) {
    myMap.setCenter([42.982000, 47.463800], 16);
  }

  if (document.documentElement.clientWidth < 576) {
    myMap.setCenter([42.982000, 47.466300], 16);
  }
  
  myMap.controls.add('fullscreenControl');

  myMap.controls.add('zoomControl', {
    float: 'none', 
    position: {
      top: 60,
      right: 10
    }
  });

  myPlacemark = new ymaps.Placemark([42.981583, 47.466045], {
    hintContent: 'Vitraj Studio!'
  }, {
    // Опции.
    // Необходимо указать данный тип макета.
    iconLayout: 'default#image',
    // Своё изображение иконки метки.
    iconImageHref: '/wp-content/themes/vitrajstudio/img/map-marker.png',
    // Размеры метки.
    iconImageSize: [269, 117],
    // Смещение левого верхнего угла иконки относительно
    // её "ножки" (точки привязки).
    iconImageOffset: [-100, -120]
  });
  
  myMap.geoObjects.add(myPlacemark);

  myMap.behaviors.disable('scrollZoom');

  
}
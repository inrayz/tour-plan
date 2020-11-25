var mySwiper = new Swiper('.hotel-slider__container', {
  // Optional parameters
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: '.hotel-slider__button_next',
    prevEl: '.hotel-slider__button_prev',
  },
  effect: "coverflow" ,

  keyboard: {
    enabled: true,
    onlyInViewport: false,
  },
})
ymaps.ready(init);
  function init(){
    var myMap = new ymaps.Map("map", {
      center: [7.83819490, 98.29879829],
      zoom: 17
        });
    }
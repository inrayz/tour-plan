var hotelSlider = new Swiper('.hotel-slider__container', {
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
var reviewsSlider = new Swiper('.reviews-slider', {
  // Optional parameters
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: '.reviews-slider__button--next',
    prevEl: '.reviews-slider__button--prev',
  },
})    

var menuButton = document.querySelector(".menu-button");
menuButton.addEventListener('click', function () {
  console.log('Клик по кнопке')
  document.querySelector(".navbar__nav").classList.toggle('navbar__nav_visible')
});


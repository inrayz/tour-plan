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

$(document).ready(function () {
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
    nextEl: '.reviews-slider__button_next',
    prevEl: '.reviews-slider__button_prev',
  },
})

var menuButton = document.querySelector(".menu-button");
menuButton.addEventListener('click', function () {
  console.log('Клик по кнопке')
  document.querySelector(".navbar__nav").classList.toggle('navbar__nav_visible')
});

var modalButton = $('[data-toggle=modal]');
var closeModalButton = $('.modal__close');
modalButton.on('click', openModal);
closeModalButton.on('click', closeModal);

function openModal() {
  var modalOverlay = $('.modal__overlay');
  var modalDialog = $('.modal__dialog');
  modalOverlay.addClass('modal__overlay_visible');
  modalDialog.addClass('modal__dialog_visible');
}
function closeModal(event) {
  event.preventDefault();
  var modalOverlay = $('.modal__overlay');
  var modalDialog = $('.modal__dialog');
  modalOverlay.removeClass('modal__overlay_visible');
  modalDialog.removeClass('modal__dialog_visible');
}
});

  $(document).keyup(function(esc) {
    if (esc.which == 27) {
      $(".modal__overlay").removeClass("modal__overlay_visible")
      $(".modal__dialog").removeClass("modal__dialog_visible")
  }

  //Обработка форм 
  $(".form").each(function() {
    $(this).validate({
      errorClass: "invalid",
      messages: {
        name: {
          required:"Specified name",
          minlenght: "The name must be at least 2 letters long"
        },
        email: {
          required: "We need your email address to contact you",
          email: "Your email address must be in the format of name@domain.com"
        },
        phone: {
          required: "Phone number required",
          minlenght: "The phone number must be at least 16 characters long"
        },
      },
    });
  })
  $(".form").ready(function(){
    $(".input__phone").mask("+7(999)-999-9999");
  });
});
AOS.init();
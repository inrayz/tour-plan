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
    nextEl: '.reviews-slider__button--next',
    prevEl: '.reviews-slider__button--prev',
  },
})    

var menuButton = document.querySelector(".menu-button");
menuButton.addEventListener('click', function () {
  console.log('Клик по кнопке')
  document.querySelector(".navbar__nav").classList.toggle('navbar__nav_visible')
});

// // Отправка данных на сервер
// function send(event, php){
// console.log("Отправка запроса");
// event.preventDefault ? event.preventDefault() : event.returnValue = false;
// var req = new XMLHttpRequest();
// req.open('POST', php, true);
// req.onload = function() {
// 	if (req.status >= 200 && req.status < 400) {
// 	json = JSON.parse(this.response); // Ебанный internet explorer 11
//     	console.log(json);
        
//     	// ЗДЕСЬ УКАЗЫВАЕМ ДЕЙСТВИЯ В СЛУЧАЕ УСПЕХА ИЛИ НЕУДАЧИ
//     	if (json.result == "success") {
//     		// Если сообщение отправлено
//     		alert("Сообщение отправлено");
//     	} else {
//     		// Если произошла ошибка
//     		alert("Ошибка. Сообщение не отправлено");
//     	}
//     // Если не удалось связаться с php файлом
//     } else {alert("Ошибка сервера. Номер: "+req.status);}}; 

// // Если не удалось отправить запрос. Стоит блок на хостинге
// req.onerror = function() {alert("Ошибка отправки запроса");};
// req.send(new FormData(event.target));
// }
    
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
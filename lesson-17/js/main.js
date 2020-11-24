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

    // Функция ymaps.ready() будет вызвана, когда
    // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
    ymaps.ready(init);
    function init(){
        // Создание карты.
        var myMap = new ymaps.Map("map", {
            // Координаты центра карты.
            // Порядок по умолчанию: «широта, долгота».
            // Чтобы не определять координаты центра карты вручную,
            // воспользуйтесь инструментом Определение координат.
            center: [7.83819490, 98.29879829],
            // Уровень масштабирования. Допустимые значения:
            // от 0 (весь мир) до 19.
            zoom: 17
        });
    }
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Best Tour Plan - Hotel Booking</title>
  <script src="https://api-maps.yandex.ru/2.1/?apikey=c9a8404a-039b-4a1d-95bb-e305b0a77a23&lang=ru_RU">
  </script>
  <!-- jQuery 1.8 or later, 33 KB -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;600;700&family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
</head>
  <body>
    <header class="navbar navbar__mobile_fixed">
      <div class="container">
        <div class="navbar-top">
          <a href="#" class="logo">
            <img src="img/horizontal-logo.svg" alt="Logo: Best Tour Plan" class="logo__image">
          </a>
          <form action="#" class="search navbar__search navbar__search_mobile_hidden">
            <input type="text" class="search__input" placeholder="Search Location">
            <button class="search__button">
              <img src="img/search.svg" alt="Icon: search">
            </button>
          </form>

          <a href="#" class="user navbar__user navbar__user_mobile_hidden">
            <img 
            src="img/user-avatar.jpg" 
            alt="avatar: Nathan" 
            class="avatar user__avatar"
          />
            <span class="user__name">Nathan</span>
          </a><!-- /.user -->
          <button class="menu-button navbar-top__menu-button">
            <span class="menu-button__line"></span>
            <span class="menu-button__line"></span>
            <span class="menu-button__line"></span>
          </button>
        </div><!-- /.navbar__top -->
      </div><!-- ./container -->
      <div class="navbar__nav">
        <div class="container">
          <ul class="navbar-menu">
            <li class="navbar-menu__item navbar-menu__item_mobile_visible">
              <a href="#" class="user navbar__user navbar__user_mobile_visible">
                <img src="img/user-avatar.jpg" alt="avatar: Nathan" class="avatar user__avatar" />
                <span class="user__name user__name_light">Nathan</span>
              </a><!-- /.user -->
            </li>
            <li class="navbar-menu__item navbar-menu__item_mobile_visible">
              <form action="#" class="search navbar__search navbar__search_mobile_visible">
                <input type="text" class="search__input" placeholder="Search Location">
                <button class="search__button">
                  <img src="img/search.svg" alt="Icon: search">
                </button>
              </form>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">All Deals</a>
            </li>
            <li class="navbar-menu__item">
             <a href="#" class="navbar-menu__link">Hotels</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Activities</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Hotel Day Packages</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Restaurants</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Events</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Rodrigues</a>
            </li>
          </ul>
        </div>
      </div>
    </header>
    <nav class="breadcrumb">
      <div class="container">
        <ul class="breadcrumb-list">
          <li class="breadcrumb-list__item">
            <a href="#" class="breadcrumb-list__link">Home</a>
          </li>
          <li class="breadcrumb-list__item">
            <a href="#" class="breadcrumb-list__link">Flash Offers</a>
          </li>
          <li class="breadcrumb-list__item">
            Grand Hilton Hotel
          </li>
        </ul>
      </div>
      <!-- /.container -->
    </nav>
    <!-- /.brewadcrumb -->
    <section class="hotel">
      <div class="container">
        <div class="hotel-info">
          <div class="hotel-info__text">
           <div class="hotel-wrapper">
              <div class="stars">
                <img class="stars__image" src="img/star.svg" alt="">
                <img class="stars__image" src="img/star.svg" alt="">
                <img class="stars__image" src="img/star.svg" alt="">
                <img class="stars__image" src="img/star.svg" alt="">
                <img class="stars__image" src="img/star.svg" alt="">
              </div>
              <h1 class="hotel-name hotel-info__name">Grand Hilton Hotel</h1>
              <span class="offer hotel-info__offer">Flash Offer</span>
            </div>
            <p class="hotel-description hotel-info__description">
              Half-Board/ All Inclusive + Complimentary Activities + Child Stays Free
            </p>
          </div>
          <!-- /.hotel-info__text -->
          <div class="rating hotel-info__rating">
            <span class="rating__text">User rating</span>
            <span class="rating__counter">4.5/<span class="rating__counter__max">5</span></span>
          </div>
          <!-- /.hotel-info__right -->
        </div>
        <!-- /.horel-info -->
        <div class="hotel-grid">
          <div class="hotel-slider">
            <!-- Slider main container -->
            <div class="swiper-container hotel-slider__container">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper hotel-slider__wrapper">
                <!-- Slides -->
                <div class="swiper-slide"><img class="swiper-slide__image" src="img/slide-1.jpg" alt="slide"></div>
                <div class="swiper-slide"><img class="swiper-slide__image" src="img/slide-2.jpg" alt="slide"></div>
                <div class="swiper-slide"><img class="swiper-slide__image" src="img/slide-3.jpg" alt="slide"></div>
                <div class="swiper-slide"><img class="swiper-slide__image" src="img/slide-4.jpg" alt="slide"></div>
                <div class="swiper-slide"><img class="swiper-slide__image" src="img/slide-5.jpg" alt="slide"></div>
              </div>
              <!-- If we need navigation buttons -->
              <button class="hotel-slider__button hotel-slider__button_prev"></button>
              <button class="hotel-slider__button hotel-slider__button_next"></button>
            </div>
            <!-- /.swiper-container -->
          </div>
          <!-- /.slider -->
          <div class="hotel-right">
            <div class="booking">
              <div class="booking__info">
                <div class="booking__price">
                  <span class="booking__start">price starts as</span>
                  <strong class="booking__pricetag">$ 8,500</strong>
                  <span class="booking__per-room">per room / night</span>
                </div>
                <!-- /.booking__price -->
                <div class="booking__room">
                  <div class="booking__text">
                    <img src="img/user.svg" alt="Icon: user" class="booking__icon">
                    <span class="booking__description">2 x Guests</span>
                  </div>
                  <div class="booking__text">
                    <img src="img/home.svg" alt="Icon: home" class="booking__icon">
                    <span class="booking__description">1 x Room</span>
                  </div>
                </div>
                <!-- /.booking__room -->
              </div>
              <!-- /.booking__info -->
              <div class="booking__call-center">
                <span class="booking__heading">Quick Booking</span>
                <a href="tel:12100" class="booking__number">
                  <img src="img/phone-call.svg" alt="Icon: phone">
                  <span class="booking__num">12100</span>
                </a>
              </div>
              <!-- /.booking__call-center -->
              <button class="button booking__button">View Other Options</button>
            </div>
            <!-- /.booking -->
            <div id="map" class="map"></div>
          </div>
          <!-- /.hotel-right -->
          <!-- /.map -->
        </div>
        <!-- /.hotel-grid -->
      </div>
      <!-- /.container -->
    </section>
    <section class="packages">
      <div class="container packages__container">
        <h2 class="packages__title">Other Packages</h2>
        <div class="packages-wrapper">
          <div class="packages__card packages__card_item">
            <span class="packages__offer packages__offer_main">Flash Offer</span>
            <div class="packages__info_one">
              <div class="container__image">
                <span class="packages__offer packages__offer_main">Flash Offer</span>
                <img class="packages__image_one" src="img/packages-1.jpeg" alt="">
              </div>
              <div class="packages__info_all">
                <div class="packages__rating packages__rating_none">
                  <img class="packages__images" src="img/star.svg" alt="">
                  <img class="packages__images" src="img/star.svg" alt="">
                  <img class="packages__images" src="img/star.svg" alt="">
                  <img class="packages__images" src="img/star.svg" alt="">
                  <img class="packages__images" src="img/star.svg" alt="">
                </div>
                <h3 class="packages__info_title packages__hotelname">Hotel Blue Haven</h3>
                <div class="packages__subtitle" >
                  <span class="packages__subtitle_text packages__subtitle_text_none">Aute quis duis excepteur excepteur ipsum cat eiusmod consectetur enim laborum magna llit. Ipsum est fugiat velit ea
                  llamco do esse ut in veniam sun in onsequat. Aute quis duis epteur excepteur ipsum occaecat eiusmod nsectetur enim
                  laborum magna mollit. Ipsum est fugiat velit ea ullamco do</span>
                </div>
                <div class="packages__room packages__room_one">
                  <div class="packages__text packages__text_one">
                    <img src="img/map-pin.svg" alt="" class="packages__icon">
                    <span class="packages__distance">1749 Wheeler Ridge Delaware</span>
                  </div>
                  <div class="packages__text packages__text_one">
                    <img src="img/user.svg" alt="" class="packages__icon">
                    <span class="packages__description">2 x Guests</span>
                  </div>
                  <div class="packages__text packages__text_one">
                    <img src="img/home.svg" alt="" class="packages__icon">
                    <span class="packages__description">1 x Room</span>
                  </div>
                </div>
                <div class="packages__price">
                  <span class="packages__oldprice">$ 10,500</span>
                  <div class="packages__newprice">
                    <span class="packages__num">$ 8,500</span>
                    <button class="button packages__button">Book Now</button>
                  </div>
                </div>
                <!-- /.packages__price -->
              </div>
            </div>
            <!-- /.packages__info -->
          </div>
          <!-- /.packages__card -->
          <div class="packages__card ">
            <span class="packages__offer">Flash Offer</span>
            <img class="packages__image" src="img/packages-2.jpeg" alt="">
            <div class="packages__info">
              
              <h3 class="packages__info_title">LUX* Belle Mare</h3>
              
              <div class="packages__room">
                <div class="packages__text">
                  <img src="img/map-pin.svg" alt="" class="packages__icon">
                  <span class="packages__distance">1749 Wheeler Ridge Delaware</span>
                </div>
                <div class="packages__text">
                  <img src="img/user.svg" alt="" class="packages__icon">
                  <span class="packages__description">2 x Guests</span>
                </div>
                <div class="packages__text">
                  <img src="img/home.svg" alt="" class="packages__icon">
                  <span class="packages__description">1 x Room</span>
                </div>
              </div>
              <div class="packages__price">
                <span class="packages__oldprice">$ 8,500</span>
                <div class="packages__newprice">
                  <span class="packages__num">$ 3,000</span>
                  <button class="button packages__button">Book Now</button>
                </div>
              </div>
              <!-- /.packages__price -->
            </div>
            <!-- /.packages__info -->
          
          </div>
          <!-- /.packages__card -->
          <div class="packages__card">
            <span class="packages__offer">Flash Offer</span>
            <img class="packages__image" src="img/packages-3.jpeg" alt="">
            <div class="packages__info">
              
              <h3 class="packages__info_title">White Palace</h3>
              
              <div class="packages__room">
                <div class="packages__text">
                  <img src="img/map-pin.svg" alt="" class="packages__icon">
                  <span class="packages__distance">1749 Wheeler Ridge Delaware</span>
                </div>
                <div class="packages__text">
                  <img src="img/user.svg" alt="" class="packages__icon">
                  <span class="packages__description">2 x Guests</span>
                </div>
                <div class="packages__text">
                  <img src="img/home.svg" alt="" class="packages__icon">
                  <span class="packages__description">1 x Room</span>
                </div>
              </div>
              <div class="packages__price">
                <span class="packages__oldprice">$ 10,500</span>
                <div class="packages__newprice">
                  <span class="packages__num">$ 9,500</span>
                  <button class="button packages__button">Book Now</button>
                </div>
              </div>
              <!-- /.packages__price -->
            </div>
            <!-- /.packages__info -->
          
          </div>
          <!-- /.packages__card -->
          <div class="packages__card">
            <span class="packages__offer">Flash Offer</span>
            <img class="packages__image" src="img/packages-4.jpeg" alt="">
            <div class="packages__info">
              
              <h3 class="packages__info_title">Luxury Place</h3>
              
              <div class="packages__room">
                <div class="packages__text">
                  <img src="img/map-pin.svg" alt="" class="packages__icon">
                  <span class="packages__distance">1749 Wheeler Ridge Delaware</span>
                </div>
                <div class="packages__text">
                  <img src="img/user.svg" alt="" class="packages__icon">
                  <span class="packages__description">2 x Guests</span>
                </div>
                <div class="packages__text">
                  <img src="img/home.svg" alt="" class="packages__icon">
                  <span class="packages__description">1 x Room</span>
                </div>
              </div>
              <div class="packages__price">
                <span class="packages__oldprice">$ 4,500</span>
                <div class="packages__newprice">
                  <span class="packages__num">$ 2,500</span>
                  <button class="button packages__button">Book Now</button>
                </div>
              </div>
              <!-- /.packages__price -->
            </div>
            <!-- /.packages__info -->
          
          </div>
          <!-- /.packages__card -->
          <div class="packages__card">
            <span class="packages__offer">Flash Offer</span>
            <img class="packages__image" src="img/packages-5.jpeg" alt="">
            <div class="packages__info">
              <h3 class="packages__info_title">Hotel Five Star</h3>
              <div class="packages__room">
                <div class="packages__text">
                  <img src="img/map-pin.svg" alt="" class="packages__icon">
                  <span class="packages__distance">1749 Wheeler Ridge Delaware</span>
                </div>
                <div class="packages__text">
                  <img src="img/user.svg" alt="" class="packages__icon">
                  <span class="packages__description">2 x Guests</span>
                </div>
                <div class="packages__text">
                  <img src="img/home.svg" alt="" class="packages__icon">
                  <span class="packages__description">1 x Room</span>
                </div>
              </div>
              <div class="packages__price">
                <span class="packages__oldprice">$ 6,500</span>
                <div class="packages__newprice">
                  <span class="packages__num">$ 3,500</span>
                  <button class="button packages__button">Book Now</button>
                </div>
              </div>
              <!-- /.packages__price -->
            </div>
            <!-- /.packages__info -->
          
          </div>
          <!-- /.packages__card -->
        </div>
        <!-- /.packages-wrapper -->
      </div>
      <!-- /.container -->
    </section>
    <section class="newsletter parallax-window" data-speed="0.5" data-parallax="scroll" data-image-src="img/newsletter-bg.jpeg">
      <div class="newsletter-wrapper">
        <h2 class="newsletter-title newsletter__title">
          subscribe to our
          <span class="newsletter-title__strong">Newsletter</span>
        </h2>
        <form action="#" class="subscribe newsletter__subscribe">
          <input type="text" class="subscribe__input" placeholder="Your email address">
          <button class="subscribe__button">
            Send
          </button>
        </form>
      </div>
      <!-- /.newsletter-wrapper -->
    </section>
    <section class="reviews">
      <div class="container">
        <h2 class="reviews__title">What people think about us</h2>
        
        <div class="swiper-container reviews-slider">
          
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="reviews-slider__item">
                <div class="reviews-slider__profile">
                  <img src="img/reviews-avatar.jpeg" alt="Photo: Megan Fox" class="reviews-slider__avatar">
                  <h3 class="reviews-slider__username">Megan Fox</h3>
                  <span class="reviews-slider__date">Stayed 18 Nov, 2019</span>
                  <div class="reviews-slider__rating">
                    <img class="reviews-slider__rating_img" src="img/star.svg" alt="">
                    <img class="reviews-slider__rating_img" src="img/star.svg" alt="">
                    <img class="reviews-slider__rating_img" src="img/star.svg" alt="">
                    <img class="reviews-slider__rating_img" src="img/star.svg" alt="">
                    <img class="reviews-slider__rating_img" src="img/star.svg" alt="">
                  </div>
                  <!-- /.reviews-slider__rating -->
                </div>
                <!-- /.reviews-slider__profile -->
                <p class="reviews-slider__text">It was very nice hotel with cleanliness. Staff behavior was good and polite. They welcome us very well. Issue was only
                that Lift was not in working and we were allotted to 3rd floor and amenities articles were in corner of gallery which
                were giving bad feeling. Breakfast was good and support of the staff was also very nice. Location is not good as per
                atmosphere, it is very nearby most of the popular places but self location in a narrow street is not good. Overall it
                was a good experience and could recommend.</p>
              </div>
              <!-- /.reviews-slider__item -->
            </div>
            <!-- /.swiper-slide -->
            <div class="swiper-slide">
              <div class="reviews-slider__item">
                <div class="reviews-slider__profile">
                  <img src="img/reviews-avatar-2.jpeg" alt="Photo: Roberta Jons" class="reviews-slider__avatar">
                  <h3 class="reviews-slider__username">Roberta Johns</h3>
                  <span class="reviews-slider__date">Stayed 20 Dec, 2018</span>
                  <div class="reviews-slider__rating">
                    <img src="img/star.svg" alt="">
                    <img src="img/star.svg" alt="">
                    <img src="img/star.svg" alt="">
                    <img src="img/star.svg" alt="">
                    <img src="img/star.svg" alt="">
                  </div>
                  <!-- /.reviews-slider__rating -->
                </div>
                <!-- /.reviews-slider__profile -->
                <p class="reviews-slider__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem rerum nesciunt ipsa. Modi, id dolor quidem et odit placeat iste doloremque, nobis reprehenderit ullam consequatur eius, impedit hic cupiditate facilis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores ipsum maiores voluptatibus cumque dolores doloremque nesciunt nemo quis modi amet. Fugit, accusantium expedita rem sapiente voluptatum nobis distinctio quam? Ipsam.
                </p>
              </div>
              <!-- /.reviews-slider__item -->
            </div>
            <!-- /.swiper-slide -->
            <div class="swiper-slide">
              <div class="reviews-slider__item">
                <div class="reviews-slider__profile">
                  <img src="img/reviews-avatar-3.jpeg" alt="Photo: Jessica Smith" class="reviews-slider__avatar">
                  <h3 class="reviews-slider__username">Jessica Smith</h3>
                  <span class="reviews-slider__date">Stayed 3 Nov, 2017</span>
                  <div class="reviews-slider__rating">
                    <img src="img/star.svg" alt="">
                    <img src="img/star.svg" alt="">
                    <img src="img/star.svg" alt="">
                    <img src="img/star.svg" alt="">
                    <img src="img/star.svg" alt="">
                  </div>
                  <!-- /.reviews-slider__rating -->
                </div>
                <!-- /.reviews-slider__profile -->
                <p class="reviews-slider__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem rerum nesciunt ipsa. Modi, id dolor quidem et odit
                placeat iste doloremque, nobis reprehenderit ullam consequatur eius, impedit hic cupiditate facilis. Lorem ipsum dolor
                sit amet consectetur adipisicing elit. Asperiores ipsum maiores voluptatibus cumque dolores doloremque nesciunt nemo
                quis modi amet. Fugit, accusantium expedita rem sapiente voluptatum nobis distinctio quam? Ipsam.</p>
              </div>
              <!-- /.reviews-slider__item -->
            </div>
            <!-- /.swiper-slide -->
          </div>
          <!-- /.swiper-wrapper -->
          
          
          <button class="reviews-slider__button reviews-slider__button--prev"></button>
          <button class="reviews-slider__button reviews-slider__button--next"></button>
        
        </div>
        <!-- /.rewiews-slider -->
      </div>
    </section>
    <section class="activities">
      <div class="container">
        <h2 class="activities__title">Other Activities</h2>
        <div class="activities-wrapper">
          <div class="card activities__card">
            <img src="img/activity-1.jpeg" alt="" class="card__image">
            <h3 class="card__title card__title--one">The curious corner
              of chamarel</h3>
            <button class="card__button">Book Now</button>
          </div>
          <!-- /.card -->
          <div class="card activities__card">
            <img src="img/activity-2.jpeg" alt="" class="card__image">
            <h3 class="card__title card__title--two">Gymkhana club golf
              course</h3>
            <button class="card__button">Book Now</button>
          </div>
          <!-- /.card -->
          <div class="card activities__card">
            <img src="img/activity-3.jpeg" alt="" class="card__image">
            <h3 class="card__title card__title--three">Tamarind falls hiking
              trip - full day</h3>
            <button class="card__button">Book Now</button>
          </div>
          <!-- /.card -->
          <div class="card activities__card">
            <img src="img/activity-4.jpeg" alt="" class="card__image">
            <h3 class="card__title card__title--four">The blue marine discovery
              quest</h3>
            <button class="card__button">Book Now</button>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.activities-wrapper -->
      </div>
    </section>
    <footer class="footer">
      <div class="container footer__container">
        <div class="footer-wrapper">
          <img src="img/vartical-logo.svg" alt="" class="logo footer__logo">
          <div class="footer__list footer__categories">
            <h3 class="footer__title">ALL CATEGORIES</h3>
            <ul class="footer__ul">
              <li class="footer__item"><a href="#" class="footer__link">Hotels</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Activities</a></li>
              <li class="footer__item"><a href="#" class="footer__link">All Deals</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Spa Packages</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Hotel Day Packages</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Restaurants</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Fitness</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Rodrigues</a></li>
            </ul>
          </div>
          <!-- /.footer__list -->
          <div class="footer__list footer__additional">
            <h3 class="footer__title">ADDITIONAL INFORMATION</h3>
            <ul class="footer__ul">
              <li class="footer__item"><a href="#" class="footer__link">About Us</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Contact Us</a></li>
              <li class="footer__item"><a href="#" class="footer__link">How does it work?</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Frequently Asked Questions</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Deals.mu loyalty program</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Promote your Business on BTP</a></li>
            </ul>
          </div>
          <!-- /.footer__list -->
          <div class="footer__social-network">
            <h3 class="footer__title footer__title--inline">Social Network</h3>
            <div class="footer__social-links">
              <a href="#" class="footer__link"><img src="img/facebook.svg" alt=""></a>
              <a href="#" class="footer__link"><img src="img/youtube.svg" alt=""></a>
              <a href="#" class="footer__link"><img src="img/instagram.svg" alt=""></a>
            </div>
            <!-- /.footer__social-links -->
          </div>
          <!-- /.footer__social-network -->
          <div class="footer__list footer__legal">
            <h3 class="footer__title">LEGAL INFORMATION</h3>
            <ul class="footer__ul">
              <li class="footer__item"><a href="#" class="footer__link">Terms & Conditions</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Disclaimer</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Cancellation policy</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Privacy</a></li>
            </ul>
          </div>
          <!-- /.footer__list -->
          <div class="footer__contact-details">
            <h3 class="footer__title footer__title--mb-3">Contact Details</h3>
            <p class="footer__text">Feel free to contact us by phone, email or by our contact form</p>
            <ul class="footer__ul">
              <li class="footer__item  footer__item--mb-2">
               <div class="footer__icon-wrapper">
                  <img class="footer__icon" src="img/map-marker.svg" alt="">
               </div>
                9748 Blossom Hill Rd undefined Lansing, Idaho 68545 United States
              </li>
              <li class="footer__item  footer__item--mb-2">
                <div class="footer__icon-wrapper">
                  <img class="footer__icon" src="img/contact-phone-call.svg" alt="">
                </div>
                Tel (business hours) : 269 1500 <br>
                Tel (hotline) Monday - Saturday: 52-56-61-38 (08:00 am – 20:00 pm) <br>
                Tel (hotline) Sunday: 52-56-61-38 (08:00 am – 14:00 pm)

              </li>
              <li class="footer__item footer__item--mb-2">
                <div class="footer__icon-wrapper">
                  <img class="footer__icon" src="img/email.svg" alt="">
                </div>
                cherly.lawson@example.com
              </li>
            </ul>
            <!-- /.footer__text -->
          </div>
          <!-- /.footer__contact-details -->
          <div class="footer__contact-form">
            <h3 class="footer__title footer__title--mb-3">Send us a message</h3>
            <form action="send.php" method="POST" class="footer__form">
              <input 
              type="text" 
              class="input footer__input" 
              placeholder="Your Full Name*"
              name="name">

              <input 
              type="text" 
              class="input footer__input" 
              placeholder="Phone Number*"
              name="phone">

              <textarea 
              class="footer__message"
               cols="30" 
               rows="10" 
               placeholder="Message"
               name="message">
              </textarea>
              <div class="footer__button_fields">
                <button class="button footer__button" type="submit">Send</button>
                <span class="footer__info">* Required Fields</span>
              </div>
            </form>
          </div>
          <!-- /.footer__contact-form -->
        </div>
        <!-- /.footer-wrapper -->
        <div class="footer__payment">
          <div class="footer__payment_links">
            <a href="#" class="footer__payment_link">Disclaimer</a>
            <a href="#" class="footer__payment_link">Conditions of use</a>
            <a href="#" class="footer__payment_link">Cancellation policy</a>
          </div>
          <div class="footer__payment_icon">
            <a href="#"><img src="img/payment.jpg" alt=""></a>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
<!DOCTYPE html>
<html lang="ru">
<?php 
$title_page = 'Отель Инфинити';
include_once 'includes/head.php'; ?>
<body>
    <!-- Header Section Begin -->
    <?php include 'includes/header.php'; ?>
    <!-- Header End -->

    <!-- Hero Area Section Begin -->
    <section class="hero-area hero-area-main set-bg" data-setbg="img/baner2.jpeg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="hero-text">
                        <h1>Скидка молодоженам на<br> медовый месяц  -10%</h1>
                    </div>
                    <a href="tel:+79283026100" class="primary-btn primary-btn-baner">Получить скидку</a>
 
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Area Section End -->

    <!-- Search Filter Section Begin -->
    <?php include 'includes/search-filter.php'; ?>
    <!-- Search Filter Section End -->

    <!-- Intro Text Section Begin -->
    <section class="intro-section spad">
        <div class="container">
            <div class="row intro-text">
                <div class="col-lg-6">
                    <div class="intro-left">
                        <div class="section-title">
                            <span>infinity otel</span>
                            <h2>Об отеле</h2>
                        </div>
                        <p>Современный отель «Infinity» соответствует высокому стандарту и предлагает отличные условия для комфортного отдыха. Каждый наш номер оснащен всем необходимым, а дружелюбный и отзывчивый персонал поможет вам в любом вопросе.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="intro-right">
                        <ul>
                            <li class='d-flex align-items-center intro-right__item'>
                                <i class='bx bx-check'></i>
                                <p class='intro-right__text'>Бесплатный трансфер до моря с 8:00 до 18:00</p>
                            </li>

                            <li class='d-flex align-items-center intro-right__item'>
                                <i class='bx bx-check'></i>
                                <p class='intro-right__text'>Прачечная</p>
                            </li>

                            <li class='d-flex align-items-center intro-right__item'>
                                <i class='bx bx-check'></i>
                                <p class='intro-right__text'>Бесплатный трансфер в отель из г.Геленджика и г.Новороссийска</p>
                            </li>

                            <li class='d-flex align-items-center intro-right__item'>
                                <i class='bx bx-check'></i>
                                <p class='intro-right__text'>Бассейн с подогревом, под открытым небом</p>
                            </li>

                            <li class='d-flex align-items-center intro-right__item'>
                                <i class='bx bx-check'></i>
                                <p class='intro-right__text'>Спутниковое ТВ и Wi-fi</p>
                            </li>

                            <li class='d-flex align-items-center intro-right__item'>
                                <i class='bx bx-check'></i>
                                <p class='intro-right__text'>Бесплатная парковка под видеонаблюдением</p>
                            </li>

                            <li class='d-flex align-items-center intro-right__item'>
                                <i class='bx bx-check'></i>
                                <p class='intro-right__text'>Зона отдыха на территории отеля, с прохлаждающими напитками и блюдами
                                </p>
                            </li>                        
                        </ul>
                        <!-- <p>Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra.</p> -->
                        <!-- <a href="#" class="primary-btn">Make a Reservation</a> -->
                    </div>
                </div>
                <div class="intro-bottom">
                     <p class='intro-bottom__text'>
                     Зона отдыха, кухня и бассейн на территории
                        отеля работают 
                        <span>до 23:00</span> 
                            
                    </p>
                     <a href="tel:+79283026100" class="primary-btn">Позвонить</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Intro Text Section End -->

    <!-- Facilities Section Begin -->
    <section class="facilities-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="facilities-item set-bg" data-setbg="img/rooms/dvuhmestniy.jpeg">
                        <div class="fi-title">
                            <h2>Эконом</h2>
                            <p>от 2000р/сутки</p>
                            <p>1 двухспальная кровать</p>
                            <p>2 взрослых + 1 ребенок до 3-х лет</p>
                        </div>
                        <div class="facilities-item-bottom">
                            <div class="fi-features">
                            <div class="fi-info">
                                <i class="flaticon-019-television"></i>
                                <p>Телевизор</p>
                            </div>
                            <div class="fi-info">
                                <i class="flaticon-029-wifi"></i>
                                <p>Wi-fi</p>
                            </div>
                            <div class="fi-info">
                                <i class="flaticon-003-air-conditioner"></i>
                                <p>Сплит</p>
                            </div>
                            <div class="fi-info">
                                <i class="flaticon-036-parking"></i>
                                <p>Парковка</p>
                            </div>
                            <div class="fi-info">
                                <i class="flaticon-007-swimming-pool"></i>
                                <p>Трансфер</p>
                            </div>
                        </div>
                            <a href="desc-rooms.php" class="primary-btn primary-btn-rooms">Подробнее</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="facilities-item set-bg" data-setbg="img/rooms/trehmestniy.jpeg">
                        <div class="fi-title">
                            <h2>Стандарт</h2>
                            <p>от 2500р/сутки</p>
                            <p>1 двухспальная кровать <br> и 1 односпальная</p>
                            <p>3 взрослых + 1 ребенок до 3-х лет</p>                        
                        </div>
                        <div class="facilities-item-bottom">
                            <div class="fi-features">
                            <div class="fi-info">
                                <i class="flaticon-019-television"></i>
                                <p>Телевизор</p>
                            </div>
                            <div class="fi-info">
                                <i class="flaticon-029-wifi"></i>
                                <p>Wi-fi</p>
                            </div>
                            <div class="fi-info">
                                <i class="flaticon-003-air-conditioner"></i>
                                <p>Сплит</p>
                            </div>
                            <div class="fi-info">
                                <i class="flaticon-036-parking"></i>
                                <p>Парковка</p>
                            </div>
                            <div class="fi-info">
                                <i class="flaticon-007-swimming-pool"></i>
                                <p>Трансфер</p>
                            </div>
                        </div>
                            <a href="desc-rooms.php" class="primary-btn primary-btn-rooms">Подробнее</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="facilities-item set-bg" data-setbg="img/rooms/chetirehmestniy.jpeg">
                        <div class="fi-title">
                            <h2>Люкс</h2>
                            <p>от 3000р/сутки</p>
                            <p>1 двухспальная кровать <br> и 2 односпальные</p>
                            <p>4 взрослых + 1 ребенок до 3-х лет</p>                        
                        </div>
                        <div class="facilities-item-bottom">
                            <div class="fi-features">
                            <div class="fi-info">
                                <i class="flaticon-019-television"></i>
                                <p>Телевизор</p>
                            </div>
                            <div class="fi-info">
                                <i class="flaticon-029-wifi"></i>
                                <p>Wi-fi</p>
                            </div>
                            <div class="fi-info">
                                <i class="flaticon-003-air-conditioner"></i>
                                <p>Сплит</p>
                            </div>
                            <div class="fi-info">
                                <i class="flaticon-036-parking"></i>
                                <p>Парковка</p>
                            </div>
                            <div class="fi-info">
                                <i class="flaticon-007-swimming-pool"></i>
                                <p>Трансфер</p>
                            </div>
                        </div>
                            <a href="desc-rooms.php" class="primary-btn primary-btn-rooms">Подробнее</a>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-lg-6">
                    <div class="facilities-item set-bg" data-setbg="img/rooms/dvuhmestniy.jpeg">
                        <div class="fi-title">
                            <h2>Номер эконом класса</h2>
                            <p>от 2000р/сутки</p>
                            <p>1 двухспальная кровать</p>
                            <p>2 взрослых + 1 ребенок до 3-х лет</p>
                        </div>
                        <div class="facilities-item-bottom">
                            <div class="fi-features">
                            <div class="fi-info">
                                <i class="flaticon-019-television"></i>
                                <p>Телевизор</p>
                            </div>
                            <div class="fi-info">
                                <i class="flaticon-029-wifi"></i>
                                <p>Wi-fi</p>
                            </div>
                            <div class="fi-info">
                                <i class="flaticon-003-air-conditioner"></i>
                                <p>Сплит</p>
                            </div>
                            <div class="fi-info">
                                <i class="flaticon-036-parking"></i>
                                <p>Парковка</p>
                            </div>
                            <div class="fi-info">
                                <i class="flaticon-007-swimming-pool"></i>
                                <p>Трансфер</p>
                            </div>
                        </div>
                            <a href="desc-rooms.php" class="primary-btn primary-btn-rooms">Подробнее</a>
                        </div>
                    </div>
                </div> -->

            </div>
        </div>
    </section>
    <!-- Facilities Section End -->

    <!-- Testimonial Section Begin -->
    <?php include 'includes/feedback.php'; ?>

    <!-- Video Section Begin -->
    <div class="video-section">
        <!-- <div class="video-bg set-bg" data-setbg="img/video-bg.jpg">
        <div class="container">
           

                <div class="ri-slider-item main-slider-item">
                    <div class="ri-sliders owl-carousel">
                        <div class="single-img set-bg" data-setbg="img/rooms/room-1.jpg"></div>
                        <div class="single-img set-bg" data-setbg="img/rooms/room-2.jpg"></div>
                        <div class="single-img set-bg" data-setbg="img/rooms/room-3.jpg"></div>
                    </div>
                 </div>
        </div>
        </div> -->
        <iframe src="https://yandex.ru/maps?ll=37.938699%2C44.656290&panorama%5Bpoint%5D=37.938699%2C44.656290&panorama%5Bdirection%5D=293.518188%2C-3.223383&panorama%5Bid%5D=1300054979_777004485_23_1654860455&panorama%5Bspan%5D=33.626648%2C80.000000" width="100%" height="430" frameborder="0">    
            </iframe>
    </div>
    <!-- Video Section End -->

    <!-- Home Page About Section Begin -->
    <section class="homepage-about spad">
        <div class="container">
                <div class="about-text">
                    <div class="section-title">
                        <h2 class='text-center'>Что есть интересного рядом с нами?</h2>
                    </div>
                    <p class='text-center'>Если вам станет скучно, просто оглянитесь вокруг!
                    </p>
                </div>
                <div class="d-flex flex-column align-items-center" >
                    <div class="row d-flex justify-content-center">
                        <div class="about-gallery">
                            <div class="">
                                <div class="about-img">
                                    <img src="img/excursion/11.jpg" alt="">
                                    <p>Набережная</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="about-img">
                                    <img src="img/excursion/2.jpeg" alt="">
                                    <p>Ледниковый период</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="about-img">
                                    <img src="img/excursion/3.jpeg" alt="">
                                    <p>Динопарк</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="about-img">
                                    <img src="img/excursion/4.jpg" alt="">
                                    <p>Дельфинарий</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="about-img">
                                    <img src="img/excursion/20.jpg" alt="">
                                    <p>Мастерская стекла</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="about-img">
                                    <img src="img/excursion/5.jpg" alt="">
                                    <p>Культурный центр "Старый парк"</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="about-img">
                                    <img src="img/excursion/6.jpeg" alt="">
                                    <p>Памятник погибшим на пароходе «Адмирал Нахимов»</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="about-img">
                                    <img src="img/excursion/7.jpg" alt="">
                                    <p>Веревочный парк узелок»</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="about-img">
                                    <img src="img/excursion/8.jpeg" alt="">
                                    <p>Крокодиловый каньон</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="about-img">
                                    <img src="img/excursion/9.jpg" alt="">
                                    <p>Город кубанских мастеров</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="about-img">
                                    <img src="img/excursion/10.jpg" alt="">
                                    <p>Кастальская купель</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="about-img">
                                    <img src="img/excursion/011.jpg" alt="">
                                    <p>Дом вверх дном</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="about-img">
                                    <img src="img/excursion/12.jpeg" alt="">
                                    <p>Начало аллеи</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="about-img">
                                    <img src="img/excursion/13.jpeg" alt="">
                                    <p>Самая большая детская площадка Кабардинки</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="about-img">
                                    <img src="img/excursion/14.jpeg" alt="">
                                    <p>Выброшенный на мель корабль Рио</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="about-img">
                                    <img src="img/excursion/15.jpeg" alt="">
                                    <p>Локация скала</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="about-img">
                                    <img src="img/excursion/16.jpeg" alt="">
                                    <p>Набережная</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="about-img">
                                    <img src="img/excursion/17.jpeg" alt="">
                                    <p>Центральный пляж</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="about-img">
                                    <img src="img/excursion/18.jpeg" alt="">
                                    <p>Пляж галька</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="about-img">
                                    <img src="img/excursion/19.jpeg" alt="">
                                    <p>Набережная</p>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <a href="tel:+79283026100" class="primary-btn about__primary-btn">Узнать</a>
                </div>

            </div>
    </section>
    <!-- Home Page About Section End -->

      <!-- ======= Frequently Asked Questioins Section ======= -->
      <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h4 class='faq__title'>Часто задаваемые вопросы</h4>
        </div>

        <ul class="faq-list">

        <li class='faq__item'>
            <div class="question" href="#faq1">Какие справки необходимы при заселении? <i class='bx bx-chevron-down'></i>
            </div>
            <div id="faq1" class="faq__answer">
              <p>
              Справка или QR-код из личного кабинета портала Госуслуги о вакцинации от COVID-19 или перенесенном заболевании. Или ПЦР тест срокм до 2 суток.
              </p>
            </div>
          </li>

          <li class='faq__item'>
            <div class="question" href="#faq1">Возможно ли проживание с питомцем? <i class='bx bx-chevron-down'></i>
            </div>
            <div id="faq1" class="faq__answer">
              <p>
              В нашем отеле не предусмотрено размещение с домашними животными.
              </p>
            </div>
          </li>

          <li class='faq__item'>
            <div class="question" href="#faq1">Какие условия раннего заезда или позднего выезда? <i class='bx bx-chevron-down'></i>
            </div>
            <div id="faq1" class="faq__answer">
              <p>
              Условия раннего заезда или позднего выезда, обговариваются индивидуально, в зависимости от даты бронирования. Для получения точной информации, оставьте заявку на сайте или свяжитесь с нами по телефону 
              </p>
            </div>
          </li>

          <li class='faq__item'>
            <div class="question" href="#faq1"> В какое время осуществляется заезд и выезд гостей? <i class='bx bx-chevron-down'></i>
            </div>
            <div id="faq1" class="faq__answer">
              <p>
                Выезд до 12:00 <br>
                Заселение после 14:00           
               </p>
            </div>
          </li>

          
        </ul>

      </div>
    </section><!-- End Frequently Asked Questioins Section -->

    <!-- Footer Section Begin -->
    <?php include 'includes/footer.php'; ?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/show-element.js"></script>
    <script src="js/feedback.js"></script>
</body>

</html>
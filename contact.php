<!DOCTYPE html>
<html lang="ru">

<?php 
$title_page = 'Контакты Отеля Инфинити';
include_once 'includes/head.php'; ?>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Header Section Begin -->
    <?php include 'includes/header.php'; ?>
    <!-- Header End -->

    <!-- Hero Area Section Begin -->
    <div class="hero-area set-bg other-page" data-setbg="img/about_bg.jpg">
    </div>
    <!-- Hero Area Section End -->

    <!-- Search Filter Section Begin -->
    <section class="search-filter other-page-filter">
        <div class="container">
         <div class="row">
                <div class="col-lg-12">
                    <form action="#" class="check-form">
                        <h4>Бронирование номеров</h4>
                        <div class="datepicker">
                            <p>Заезд</p>
                            <input type="text" class="datepicker-1" value="дд / мм / гггг">
                            <img src="img/calendar.png" alt="">
                        </div>
                        <div class="datepicker">
                            <p>Выезд</p>
                            <input type="text" class="datepicker-2" value="дд / мм / гггг">
                            <img src="img/calendar.png" alt="">
                        </div>
                        <!-- <div class="room-quantity">
                            <div class="single-quantity">
                                <p>Adults</p>
                                <div class="pro-qty"><input type="text" value="0"></div>
                            </div>
                            <div class="single-quantity">
                                <p>Children</p>
                                <div class="pro-qty"><input type="text" value="0"></div>
                            </div>
                            <div class="single-quantity last">
                                <p>Rooms</p>
                                <div class="pro-qty"><input type="text" value="0"></div>
                            </div>
                        </div> -->
                        <div class="room-selector">
                            <p>Номера</p>
                            <select class="suit-select">
                                <option>выбрать номер</option>
                                <option value="">Двухместный</option>
                                <option value="">Трехместный</option>
                                <option value="">Четырехместный</option>
                                <option value="">Эконом класс</option>

                            </select>
                        </div>
                        <button type="submit">Найти номер</button>
                    </form>
                </div>
            </div>
        </div>
    </section> 
    <!-- Search Filter Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="contact-section-top">
                    <div class="">
                        <div class="contact-title">
                            <div class="section-title">
                                <span>infinity hotel</span>
                                <h2>Современный и уютный отель 
                                    <br />в г. Геленджик
                                </h2>
                                <div class="section-contact__btn">
                                    <a href="#" class="primary-btn">Выбрать номера</a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="info-box">
                            <img src="img/contact-logo.png" alt="">
                            <ul>
                                <li>Краснодарский край <br />
                                    город Геленджик <br>
                                    поселок Кабардинка <br>
                                    ул. Пионерская 27 <br>
                                    8 (928) 302-61-00
                               </li>
                                <li></li>
                                <!-- <li>Заезд:  12:00</li> -->
                            </ul>
                            <div class="social-links">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                

                
            </div>
            <!-- <div class="row">
                <div class="col-lg-8">
                    <form action="#" class="contact-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Your name">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" placeholder="Your email">
                            </div>
                            <div class="col-lg-12">
                                <input type="text" class="subject" placeholder="Subject">
                                <textarea placeholder="Message"></textarea>
                                <button type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="info-box">
                        <img src="img/contact-logo.png" alt="">
                        <ul>
                            <li>1525 Madison Lane, <br />Los Angeles, CA</li>
                            <li>+1 (603)535-4592</li>
                            <li>hello@youremail.com</li>
                            <li>Everyday: 06:00 -22:00</li>
                        </ul>
                        <div class="social-links">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Section Begin -->
    <div class="map">
<!-- 
    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A87c647e889d50588f8b6be0a0d3e77b10b7bc82098b71b4523d12386458fd55d&amp;source=constructor" width="100%" height="400" frameborder="0">
    </iframe> -->
    <iframe src="https://yandex.ru/maps?ll=37.938699%2C44.656290&panorama%5Bpoint%5D=37.938699%2C44.656290&panorama%5Bdirection%5D=293.518188%2C-3.223383&panorama%5Bid%5D=1300054979_777004485_23_1654860455&panorama%5Bspan%5D=33.626648%2C80.000000" width="100%" height="430" frameborder="0">    
    </iframe>
   
    </div>
    <!-- Map Section End -->

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
</body>

</html>
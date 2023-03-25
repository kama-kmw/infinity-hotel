<!DOCTYPE html>
<html lang="ru">
<?php 
$title_page = 'Номера Отеля Инфинити';
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

    <!-- Room Section Begin -->
    <section class="room-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ri-slider-item">
                        <div class="ri-sliders owl-carousel">
                            <div class="single-img set-bg" data-setbg="img/rooms/dvuh/4.jpeg"></div>
                            <div class="single-img set-bg" data-setbg="img/rooms/dvuh/8.jpeg"></div>
                            <div class="single-img set-bg" data-setbg="img/rooms/dvuh/3.jpeg"></div>
                            <div class="single-img set-bg" data-setbg="img/rooms/dvuh/6.jpeg"></div>
                            <div class="single-img set-bg" data-setbg="img/rooms/dvuh/9.jpeg"></div>
                            <div class="single-img set-bg" data-setbg="img/rooms/dvuh/1.jpg"></div>
                            <div class="single-img set-bg" data-setbg="img/rooms/dvuh/2.JPG"></div>
                            <div class="single-img set-bg" data-setbg="img/rooms/dvuh/7.jpeg"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ri-text">
                        <div class="section-title">
                            <div class="section-title">
                                <span>infinity hotel</span>
                                <h2>Эконом</h2>
                            </div>
                                <p>Небольшой двухместный номер с 1-ой кроватью или  
                                    2-мя 
                                    отдельными кроватями.
                                    Бронирование номеров от 3-х суток.
                                </p>
                            <div class="ri-features">
                                <div class="ri-info">
                                    <i class="flaticon-019-television"></i>
                                    <p>Телевизор</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <p>Wi-fi</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <p>Сплит</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-036-parking"></i>
                                    <p>Парковка</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-007-swimming-pool"></i>
                                    <p>Трансфер</p>
                                </div>
                            </div>
                            <a href="#" class="primary-btn">Забронировать</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 order-lg-2">
                    <div class="ri-slider-item">
                        <div class="ri-sliders owl-carousel">
                            <div class="single-img set-bg" data-setbg="img/rooms/chetireh/1.jpeg"></div>
                            <div class="single-img set-bg" data-setbg="img/rooms/chetireh/2.jpeg"></div>
                            <div class="single-img set-bg" data-setbg="img/rooms/chetireh/3.jpeg"></div>
                            <div class="single-img set-bg" data-setbg="img/rooms/chetireh/4.jpeg"></div>
                            <div class="single-img set-bg" data-setbg="img/rooms/chetireh/5.jpeg"></div>
                            <div class="single-img set-bg" data-setbg="img/rooms/chetireh/6.jpeg"></div>
                            <div class="single-img set-bg" data-setbg="img/rooms/chetireh/7.jpeg"></div>
                            <div class="single-img set-bg" data-setbg="img/rooms/chetireh/8.jpeg"></div>
                            <div class="single-img set-bg" data-setbg="img/rooms/chetireh/9.jpeg"></div>
                            <div class="single-img set-bg" data-setbg="img/rooms/chetireh/10.jpeg"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="ri-text left-side">
                        <div class="section-title">
                            <div class="section-title">
                                <span>infinity hotel</span>
                                <h2>Стандарт</h2>
                            </div>
                                <p>Трехместный номер с 1-ой двуспальной кроватью и 
                                    1-ой 
                                    отдельной кроватью.
                                    Бронирование номеров от 3-х суток.
                                </p>
                            <div class="ri-features">
                                <div class="ri-info">
                                    <i class="flaticon-019-television"></i>
                                    <p>Телевизор</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <p>Wi-fi</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <p>Сплит</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-036-parking"></i>
                                    <p>Парковка</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-007-swimming-pool"></i>
                                    <p>Трансфер</p>
                                </div>
                            </div>
                            <a href="#" class="primary-btn">Забронировать</a> <br>
                            <br>
                            <a href="desc-rooms.php" class="primary-more primary-btn-rooms">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="ri-slider-item">
                        <div class="ri-sliders owl-carousel">
                            <div class="single-img set-bg" data-setbg="img/rooms/chetireh/"></div>
                            <div class="single-img set-bg" data-setbg="img/rooms/treh/2.jpeg"></div>
                            <div class="single-img set-bg" data-setbg="img/rooms/treh/3.jpeg"></div>
                            <div class="single-img set-bg" data-setbg="img/rooms/treh/4.jpeg"></div>
                            <div class="single-img set-bg" data-setbg="img/rooms/treh/5.jpeg"></div>
                            <div class="single-img set-bg" data-setbg="img/rooms/treh/6.jpeg"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ri-text">
                        <div class="section-title">
                            <div class="section-title">
                            <span>infinity hotel</span>
                                <h2>Люкс</h2>
                            </div>
                                <p>Четырехместный номер с 1-ой двуспальной кроватью и 
                                    2-мя отдельными кроватями.
                                    Бронирование номеров от 3-х суток.
                                </p>
                            <div class="ri-features">
                                <div class="ri-info">
                                    <i class="flaticon-019-television"></i>
                                    <p>Телевизор</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <p>Wi-fi</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <p>Сплит</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-036-parking"></i>
                                    <p>Парковка</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-007-swimming-pool"></i>
                                    <p>Трансфер</p>
                                </div>
                            </div>
                            <a href="#" class="primary-btn">Забронировать</a> <br>
                            <br>
                            <a href="desc-rooms.php" class="primary-more primary-btn-rooms">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-lg-6 order-lg-2">
                    <div class="ri-slider-item">
                        <div class="ri-sliders owl-carousel">
                            <div class="single-img set-bg" data-setbg="img/rooms/room-4.jpg"></div>
                            <div class="single-img set-bg" data-setbg="img/rooms/room-3.jpg"></div>
                            <div class="single-img set-bg" data-setbg="img/rooms/room-2.jpg"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="ri-text left-side">
                        <div class="section-title">
                            <div class="section-title">
                                <span>infinity hotel</span>
                                <h2>Номер эконом класса</h2>
                            </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing 
                                    elit, sed do eiusmod tempor incididunt.
                                </p>
                                <div class="ri-features">
                                <div class="ri-info">
                                    <i class="flaticon-019-television"></i>
                                    <p>Телевизор</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <p>Wi-fi</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <p>Сплит</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-036-parking"></i>
                                    <p>Парковка</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-007-swimming-pool"></i>
                                    <p>Трансфер</p>
                                </div>
                            </div>
                            <a href="#" class="primary-btn">Забронировать</a> <br>
                            <br>
                            <a href="desc-rooms.php" class="primary-more primary-btn-rooms">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
    <!-- Room Section End -->

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
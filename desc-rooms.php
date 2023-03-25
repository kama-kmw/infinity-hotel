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
                            <div class="single-img set-bg" data-setbg="img/rooms/dvuh-2.jpeg"></div>
                            <div class="single-img set-bg" data-setbg="img/rooms/dvuh-1.jpeg"></div>
                            <div class="single-img set-bg" data-setbg="img/rooms/dvuh-3.jpeg"></div>
                            <div class="single-img set-bg" data-setbg="img/rooms/dvuh-4.jpeg"></div>
                            <div class="single-img set-bg" data-setbg="img/rooms/dvuh-5.jpeg"></div>
                            <div class="single-img set-bg" data-setbg="img/rooms/dvuh-6.jpeg"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ri-text">
                        <div class="section-title">
                            <div class="section-title">
                                <span>infinity hotel</span>
                                <h2>Двухместный номер</h2>
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
                            <!-- <a href="#" class="primary-btn">Забронировать</a> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-11">
                    <div class="ri-text section-rooms">
                        <div class="section-title">
                            <div class="section-title section-title-rooms">
                                <h2>Стоимость</h2>
                            </div>

                            <div class="rooms-desc-top">
                                <p class=''>Если у вас есть пожелания по номеру – напишите комментарий к бронированию, и мы сделаем все возможное для выполнения вашего запроса.
                                </p>

                                <a href="tel:+79283026100" class="primary-btn btn-rooms">Забронировать</a>
                            </div>

                        </div>

                        <div class="section-rooms-bottom">
                            <div class="section-rooms__item">
                                <p>Дата</p>
                                <p>Цена</p>
                            </div>
                            <div class="section-rooms__item">
                                <p>май</p>
                                <p>2000 р./сутки</p>    
                            </div>

                            <div class="section-rooms__item">
                                <p>июнь (01.06-15.06)</p>
                                <p>2500 р./сутки</p>    
                            </div>

                            <div class="section-rooms__item">
                                <p>июнь (16.06-30.06)</p>
                                <p>3300 р./сутки</p>    
                            </div>   
                            
                            <div class="section-rooms__item">
                                <p>июль - август</p>
                                <p>3500 р./сутки</p>    
                            </div>       
                            
                            <div class="section-rooms__item">
                                <p>сентябрь (01.09-10.09)</p>
                                <p>3000 р./сутки</p>    
                            </div> 
                            
                            <div class="section-rooms__item">
                                <p>сентябрь (11.09-01.10)</p>
                                <p>2500 р./сутки</p>    
                            </div>                            

                        </div>

                        <div class="section-rooms-equipment">
                            <div class="section-title section-title-rooms">
                                <h2>Оснащение номера</h2>
                            </div>
                            <ul class='section-rooms__list'>
                                <li class='section-rooms__item-equipment'>
                                    <i class='bx bx-check'></i>
                                    <p class=''>Телевизор</p>
                                </li>

                                <li class='section-rooms__item-equipment'>
                                    <i class='bx bx-check'></i>
                                    <p class=''>Wi-fi</p>
                                </li>

                                <li class='section-rooms__item-equipment'>
                                    <i class='bx bx-check'></i>
                                    <p class=''>Кондиционер</p>
                                </li>

                                <li class='section-rooms__item-equipment'>
                                    <i class='bx bx-check'></i>
                                    <p class=''>Прикроватные розетки
                                    </p>
                                </li>

                                <li class='section-rooms__item-equipment'>
                                    <i class='bx bx-check'></i>
                                    <p class=''>Банные полотенца
                                    </p>
                                </li>

                                <li class='section-rooms__item-equipment'>
                                    <i class='bx bx-check'></i>
                                    <p class=''>Банные полотенца
                                    </p>
                                </li>

                                <li class='section-rooms__item-equipment'>
                                    <i class='bx bx-check'></i>
                                    <p class=''>Стол и два стула для балкона
                                    </p>
                                </li>

                                <li class='section-rooms__item-equipment'>
                                    <i class='bx bx-check'></i>
                                    <p class=''>Одноразовый шампунь и мыло для рук
                                    </p>
                                </li>

                                <li class='section-rooms__item-equipment'>
                                    <i class='bx bx-check'></i>
                                    <p class=''>Шкаф
                                    </p>
                                </li>

                                <li class='section-rooms__item-equipment'>
                                    <i class='bx bx-check'></i>
                                    <p class=''>Тапочки
                                    </p>
                                </li>

                                <li class='section-rooms__item-equipment'>
                                    <i class='bx bx-check'></i>
                                    <p class=''>Постельное белье
                                    </p>
                                </li>

                                <li class='section-rooms__item-equipment'>
                                    <i class='bx bx-check'></i>
                                    <p class=''>Зеркало
                                    </p>
                                </li>

                                <li class='section-rooms__item-equipment'>
                                    <i class='bx bx-check'></i>
                                    <p class=''>Встроенный фен
                                    </p>
                                </li>

                                <li class='section-rooms__item-equipment'>
                                    <i class='bx bx-check'></i>
                                    <p class=''>Гладильная с утюгом на каждом этаже
                                    </p>
                                </li>

                            </ul>
                        </div>


                    </div>
                </div>
            </div>


           
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
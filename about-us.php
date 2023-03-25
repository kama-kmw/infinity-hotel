<!DOCTYPE html>
<html lang="ru">

    <?php 
    $title_page = 'Об отеле Инфинити';
    include_once 'includes/head.php'; ?>


<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <?php include 'includes/header.php'; ?>

    <!-- Header End -->

    <!-- Hero Area Section Begin -->
    <div class="hero-area set-bg other-page" data-setbg="img/about_bg.jpg">
    </div>
    <!-- Hero Area Section End -->

    <!-- Search Filter Section Begin -->
  
    <!-- Search Filter Section End -->

    <!-- About Us Section Begin -->
    <section class="about-us spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="about-left">
                        <div class="section-title">
                            <span>INFINITY OTEL</span>
                            <h2>Отличный отдых в <br />нашем отеле</h2>
                        </div>
                        <p class="second-text">Современный отель «Infinity» соответствует высокому стандарту и предлагает отличные условия для комфортного отдыха. Каждый наш номер оснащен всем необходимым, а дружелюбный и отзывчивый персонал поможет вам в любом вопросе.</p>
                        <!-- <p>Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra.</p> -->
                        <!-- <a href="#" class="primary-btn">Make a Reservation</a> -->
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="row">
                        <img src="img/baner2.jpeg" alt=""> 
                    </div>      
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section End -->

    <!-- Milestone Counter Section Begin -->
    <section class="milestone-counter spad set-bg" data-setbg="img/about/milestone-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="mc-item">
                        <div class="mc-num">
                            <span class="counter">25</span>
                        </div>
                        <div class="mc-text">
                            <h3>Номеров</h3>
                            <p>от Р2000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mc-item">
                        <div class="mc-num">
                            <span class="counter">367</span>
                            <!-- <strong>K</strong> -->
                        </div>
                        <div class="mc-text">
                            <h3>Отзывов</h3>
                            <p>ы
                            все довольны</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mc-item">
                        <div class="mc-num">
                            <span class="counter">150</span>
                        </div>
                        <div class="mc-text">
                            <h3>Дней/ Годы</h3>
                            <p>от P2000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Milestone Counter Section End -->

    <!-- Award Section Begin -->
    <!-- <section class="award-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Our Awards</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="award-item">
                        <img src="img/about/award-img.png" alt="">
                        <h5>2011</h5>
                        <h4>Best Hotel in Europe</h4>
                        <span>Elite Hotel award</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiselit. Vivamus libero mauris, bibendum eget
                            sapien ac, ultrices rhoncus ipsum. Donec nec sapien in urna.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="award-item">
                        <img src="img/about/award-img.png" alt="">
                        <h5>2012</h5>
                        <h4>Best Services</h4>
                        <span>Elite Hotel award</span>
                        <p>Ipsum dolor sit amet, consectetur adipiselit. Vivamus libero mauris, bibendum eget sapien ac,
                            ultrices rhoncus ipsum. Donec nec sapien in urna fermentum ornare.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="award-item">
                        <img src="img/about/award-img.png" alt="">
                        <h5>2014</h5>
                        <h4>Best Hotel Spa</h4>
                        <span>Elite Hotel award</span>
                        <p>Dolor sit amet, consectetur adipiselit. Vivamus libero mauris, bibendum eget sapien ac,
                            ultrices rhoncus ipsum. Donec nec sapien in urna fermentum ornare. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="award-item">
                        <img src="img/about/award-img.png" alt="">
                        <h5>2016</h5>
                        <h4>Best Luxury Hotel</h4>
                        <span>Elite Hotel award</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiselit. Vivamus libero mauris, bibendum eget
                            sapien ac, ultrices rhoncus ipsum. Donec nec sapien in urna.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="award-item">
                        <img src="img/about/award-img.png" alt="">
                        <h5>2017</h5>
                        <h4>2nd Place @ Best Hotel</h4>
                        <span>Elite Hotel award</span>
                        <p>Ipsum dolor sit amet, consectetur adipiselit. Vivamus libero mauris, bibendum eget sapien ac,
                            ultrices rhoncus ipsum. Donec nec sapien in urna fermentum ornare.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="award-item">
                        <img src="img/about/award-img.png" alt="">
                        <h5>2018</h5>
                        <h4>Best Hotel Spa</h4>
                        <span>Elite Hotel award</span>
                        <p>Dolor sit amet, consectetur adipiselit. Vivamus libero mauris, bibendum eget sapien ac,
                            ultrices rhoncus ipsum. Donec nec sapien in urna fermentum ornare.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Award Section End -->

    <!-- Call To Action Begin -->
    <!-- <section class="callto-section">
        <div class="container">
            <div class="callto-text">
                <h2>Book your stay with us now!</h2>
            </div>
            <a href="#" class="primary-btn">Make a Reservation</a>
        </div>
    </section> -->
    <!-- Call To Action End  -->

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
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Videograph Template">
    <meta name="keywords" content="Videograph, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Videograph | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?=assets()?>/phograph/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?=assets()?>/phograph/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?=assets()?>/phograph/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?=assets()?>/phograph/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?=assets()?>/phograph/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?=assets()?>/phograph/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?=assets()?>/phograph/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <?=include_page('landing/nav')?>
    <!-- Header End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="<?=assets()?>/phograph/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>About us</h2>
                        <div class="breadcrumb__links">
                            <a href="#">Home</a>
                            <span>About</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about__pic">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="about__pic__item about__pic__item--large set-bg"
                                    data-setbg="<?=assets()?>/phograph/img/about/about-1.jpg"></div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="about__pic__item set-bg" data-setbg="<?=assets()?>/phograph/img/about/about-2.jpg"></div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="about__pic__item set-bg" data-setbg="<?=assets()?>/phograph/img/about/about-3.jpg"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__text">
                        <div class="section-title">
                            <span>About videograph</span>
                            <h2>WHo we are?</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="services__item">
                                    <div class="services__item__icon">
                                        <img src="<?=assets()?>/phograph/img/icons/si-3.png" alt="">
                                    </div>
                                    <h4>Video distribution</h4>
                                    <p>Whether you’re halfway through the editing process, or you.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="services__item">
                                    <div class="services__item__icon">
                                        <img src="<?=assets()?>/phograph/img/icons/si-4.png" alt="">
                                    </div>
                                    <h4>Video hosting</h4>
                                    <p>Whether you’re halfway through the editing process, or you.</p>
                                </div>
                            </div>
                        </div>
                        <div class="about__text__desc">
                            <p>Formed in 2006 by Matt Hobbs and Cael Jones, Videoprah is an award-winning, full-service
                                production company specializing in commercial, broadcast, tourism & action sport video
                                production services has been featured.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial spad set-bg" data-setbg="<?=assets()?>/phograph/img/testimonial-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <span>Loved By Clients</span>
                        <h2>What clients say?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="testimonial__slider owl-carousel">
                    <div class="col-lg-4">
                        <div class="testimonial__item">
                            <div class="testimonial__text">
                                <p>Delivers such a great service that it can benefit all kinds of people from any number
                                    of industries.</p>
                            </div>
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="<?=assets()?>/phograph/img/testimonial/ta-1.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Krista Attorn</h5>
                                    <span>Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial__item">
                            <div class="testimonial__text">
                                <p>Videographer delivers such a great service that it can benefit all kinds of people
                                    from any number.</p>
                            </div>
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="<?=assets()?>/phograph/img/testimonial/ta-2.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Krista Attorn</h5>
                                    <span>Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial__item">
                            <div class="testimonial__text">
                                <p>Videographer delivers such a great service that it can benefit all kinds of people
                                    from any number.</p>
                            </div>
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="<?=assets()?>/phograph/img/testimonial/ta-3.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Krista Attorn</h5>
                                    <span>Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial__item">
                            <div class="testimonial__text">
                                <p>Delivers such a great service that it can benefit all kinds of people from any number
                                    of industries.</p>
                            </div>
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="<?=assets()?>/phograph/img/testimonial/ta-1.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Krista Attorn</h5>
                                    <span>Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial__item">
                            <div class="testimonial__text">
                                <p>Videographer delivers such a great service that it can benefit all kinds of people
                                    from any number.</p>
                            </div>
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="<?=assets()?>/phograph/img/testimonial/ta-2.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Krista Attorn</h5>
                                    <span>Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Counter Section Begin -->
    <section class="counter">
        <div class="container">
            <div class="counter__content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item">
                            <div class="counter__item__text">
                                <img src="<?=assets()?>/phograph/img/icons/ci-1.png" alt="">
                                <h2 class="counter_num">230</h2>
                                <p>Compled Projects</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item second__item">
                            <div class="counter__item__text">
                                <img src="<?=assets()?>/phograph/img/icons/ci-2.png" alt="">
                                <h2 class="counter_num">1068</h2>
                                <p>Happy clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item third__item">
                            <div class="counter__item__text">
                                <img src="<?=assets()?>/phograph/img/icons/ci-3.png" alt="">
                                <h2 class="counter_num">230</h2>
                                <p>Perspective clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item four__item">
                            <div class="counter__item__text">
                                <img src="<?=assets()?>/phograph/img/icons/ci-4.png" alt="">
                                <h2 class="counter_num">230</h2>
                                <p>Compled Projects</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Section End -->

    <!-- Team Section Begin -->
    <section class="team spad set-bg" data-setbg="<?=assets()?>/phograph/img/team-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title team__title">
                        <span>Nice to meet</span>
                        <h2>OUR Team</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item set-bg" data-setbg="<?=assets()?>/phograph/img/team/team-1.jpg">
                        <div class="team__item__text">
                            <h4>AMANDA STONE</h4>
                            <p>Videographer</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item team__item--second set-bg" data-setbg="<?=assets()?>/phograph/img/team/team-2.jpg">
                        <div class="team__item__text">
                            <h4>AMANDA STONE</h4>
                            <p>Videographer</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item team__item--third set-bg" data-setbg="<?=assets()?>/phograph/img/team/team-3.jpg">
                        <div class="team__item__text">
                            <h4>AMANDA STONE</h4>
                            <p>Videographer</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item team__item--four set-bg" data-setbg="<?=assets()?>/phograph/img/team/team-4.jpg">
                        <div class="team__item__text">
                            <h4>AMANDA STONE</h4>
                            <p>Videographer</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 p-0">
                    <div class="team__btn">
                        <a href="#" class="primary-btn">Meet Our Team</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Footer Section Begin -->
    <?=include_page('landing/foot')?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="<?=assets()?>/phograph/js/jquery-3.3.1.min.js"></script>
    <script src="<?=assets()?>/phograph/js/bootstrap.min.js"></script>
    <script src="<?=assets()?>/phograph/js/jquery.magnific-popup.min.js"></script>
    <script src="<?=assets()?>/phograph/js/mixitup.min.js"></script>
    <script src="<?=assets()?>/phograph/js/masonry.pkgd.min.js"></script>
    <script src="<?=assets()?>/phograph/js/jquery.slicknav.js"></script>
    <script src="<?=assets()?>/phograph/js/owl.carousel.min.js"></script>
    <script src="<?=assets()?>/phograph/js/main.js"></script>
</body>

</html>
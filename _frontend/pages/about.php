<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Videograph Template">
    <meta name="keywords" content="Videograph, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Videograph | Template</title>

    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="<?=assets()?>/phograph/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?=assets()?>/phograph/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?=assets()?>/phograph/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?=assets()?>/phograph/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?=assets()?>/phograph/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?=assets()?>/phograph/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?=assets()?>/phograph/css/style.css" type="text/css">

    <style>
        /* This can be added to your style.css or within the <style> tag */

        /* General text color adjustments for white backgrounds */
        body {
            color: #212529; /* dark text for general body */
        }

        /* Adjusting section titles to be dark on white backgrounds */
        .section-title span {
            color: #dc3545; /* Red color for spans */
        }

        .section-title h2 {
            color: #212529; /* Dark color for headings */
        }

        /* Specific styling for services item icons for better visibility */
        .services__item__icon {
            background-color: rgba(220, 53, 69, 0.1); /* A very light red tint */
            border-radius: 50%; /* Makes it circular */
            padding: 20px; /* Adjust padding as needed for icon size */
            display: inline-flex; /* To center the image inside */
            align-items: center;
            justify-content: center;
            margin-bottom: 20px; /* Space between icon and heading */
        }

        /* Ensure services item text is dark on light background */
        .services__item h4,
        .services__item p {
            color: #212529 !important; /* Force dark text for service items */
        }

        /* Styling for the Counter section icons and text */
        .counter__item__text img {
            filter: brightness(0) saturate(100%) invert(26%) sepia(87%) saturate(5488%) hue-rotate(345deg) brightness(85%) contrast(100%); /* This CSS filter attempts to turn the icon red */
            margin-bottom: 15px;
        }

        .counter__item__text h2.counter_num {
            color: #dc3545; /* Red for numbers */
        }

        .counter__item__text p {
            color: #212529; /* Dark for text */
        }

        /* Team section overlay for text visibility */
        .team__item__text {
            background-color: rgba(220, 53, 69, 0.7); /* Red overlay with transparency */
            color: #fff; /* White text on red overlay */
        }

        .team__item__text h4,
        .team__item__text p {
            color: #fff; /* White text for team names and roles */
        }

        .team__item__social a {
            color: #fff; /* White social icons */
            border: 1px solid #fff; /* White border for social icons */
        }

        .team__item__social a:hover {
            background-color: #fff;
            color: #dc3545; /* Red on hover for social icons */
        }

        /* Breadcrumb text color */
        .breadcrumb__text h2,
        .breadcrumb__text a,
        .breadcrumb__text span {
            color: #fff !important; /* Ensure white text on the breadcrumb background image */
        }
    </style>
</head>

<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <?=include_page('landing/nav')?>
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
    <section class="about spad bg-white"> <div class="container">
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
                            <span class="text-danger">About videograph</span> <h2 class="text-dark">WHo we are?</h2> </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="services__item">
                                    <div class="services__item__icon"> <img src="<?=assets()?>/phograph/img/icons/si-3.png" alt="">
                                    </div>
                                    <h4 class="text-dark">Video distribution</h4> <p class="text-dark">Whether you’re halfway through the editing process, or you.</p> </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="services__item">
                                    <div class="services__item__icon"> <img src="<?=assets()?>/phograph/img/icons/si-4.png" alt="">
                                    </div>
                                    <h4 class="text-dark">Video hosting</h4> <p class="text-dark">Whether you’re halfway through the editing process, or you.</p> </div>
                            </div>
                        </div>
                        <div class="about__text__desc">
                            <p class="text-dark">Formed in 2006 by Matt Hobbs and Cael Jones, Videoprah is an award-winning, full-service
                                production company specializing in commercial, broadcast, tourism & action sport video
                                production services has been featured.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="testimonial spad set-bg" data-setbg="<?=assets()?>/phograph/img/testimonial-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <span class="text-white">Loved By Clients</span> <h2 class="text-white">What clients say?</h2> </div>
                </div>
            </div>
            <div class="row">
                <div class="testimonial__slider owl-carousel">
                    <div class="col-lg-4">
                        <div class="testimonial__item bg-white text-dark p-4 rounded"> <div class="testimonial__text">
                                <p class="text-dark">Delivers such a great service that it can benefit all kinds of people from any number
                                    of industries.</p>
                            </div>
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="<?=assets()?>/phograph/img/testimonial/ta-1.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5 class="text-dark">Krista Attorn</h5>
                                    <span class="text-muted">Web Designer</span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial__item bg-white text-dark p-4 rounded">
                            <div class="testimonial__text">
                                <p class="text-dark">Videographer delivers such a great service that it can benefit all kinds of people
                                    from any number.</p>
                            </div>
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="<?=assets()?>/phograph/img/testimonial/ta-2.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5 class="text-dark">Krista Attorn</h5>
                                    <span class="text-muted">Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial__item bg-white text-dark p-4 rounded">
                            <div class="testimonial__text">
                                <p class="text-dark">Videographer delivers such a great service that it can benefit all kinds of people
                                    from any number.</p>
                            </div>
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="<?=assets()?>/phograph/img/testimonial/ta-3.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5 class="text-dark">Krista Attorn</h5>
                                    <span class="text-muted">Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial__item bg-white text-dark p-4 rounded">
                            <div class="testimonial__text">
                                <p class="text-dark">Delivers such a great service that it can benefit all kinds of people from any number
                                    of industries.</p>
                            </div>
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="<?=assets()?>/phograph/img/testimonial/ta-1.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5 class="text-dark">Krista Attorn</h5>
                                    <span class="text-muted">Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial__item bg-white text-dark p-4 rounded">
                            <div class="testimonial__text">
                                <p class="text-dark">Videographer delivers such a great service that it can benefit all kinds of people
                                    from any number.</p>
                            </div>
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="<?=assets()?>/phograph/img/testimonial/ta-2.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5 class="text-dark">Krista Attorn</h5>
                                    <span class="text-muted">Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="counter bg-white spad"> <div class="container">
            <div class="counter__content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item">
                            <div class="counter__item__text">
                                <img src="<?=assets()?>/phograph/img/icons/ci-1.png" alt=""> <h2 class="counter_num text-danger">230</h2> <p class="text-dark">Compled Projects</p> </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item second__item">
                            <div class="counter__item__text">
                                <img src="<?=assets()?>/phograph/img/icons/ci-2.png" alt=""> <h2 class="counter_num text-danger">1068</h2> <p class="text-dark">Happy clients</p> </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item third__item">
                            <div class="counter__item__text">
                                <img src="<?=assets()?>/phograph/img/icons/ci-3.png" alt=""> <h2 class="counter_num text-danger">230</h2> <p class="text-dark">Perspective clients</p> </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item four__item">
                            <div class="counter__item__text">
                                <img src="<?=assets()?>/phograph/img/icons/ci-4.png" alt=""> <h2 class="counter_num text-danger">230</h2> <p class="text-dark">Compled Projects</p> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="team spad set-bg" data-setbg="<?=assets()?>/phograph/img/team-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title team__title">
                        <span class="text-white">Nice to meet</span> <h2 class="text-white">OUR Team</h2> </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item set-bg" data-setbg="<?=assets()?>/phograph/img/team/team-1.jpg">
                        <div class="team__item__text"> <h4>AMANDA STONE</h4>
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
                        <div class="team__item__text"> <h4>AMANDA STONE</h4>
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
                        <div class="team__item__text"> <h4>AMANDA STONE</h4>
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
                        <div class="team__item__text"> <h4>AMANDA STONE</h4>
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
                        <a href="#" class="primary-btn btn btn-danger text-white">Meet Our Team</a> </div>
                </div>
            </div>
        </div>
    </section>
    <?=include_page('landing/foot')?>
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
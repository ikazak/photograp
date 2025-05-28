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
    <link rel="stylesheet" href="<?=assets()?>/phograph/.css" type="text/css">
    <link rel="stylesheet" href="<?=assets()?>/phograph/css/style.css" type="text/css">
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
                        <h2>Our Sevices</h2>
                        <div class="breadcrumb__links">
                            <a href="#">Home</a>
                            <span>Services</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="portfolio spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="portfolio__filter">
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".branding">Wedding</li>
                        <li data-filter=".digital-marketing">Birthday</li>
                        <li data-filter=".web">Graduation</li>
                        <li data-filter=".photography">Portrait</li>
                        <li data-filter=" .ecommerce">Event</li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio__gallery">
                <div class="col-lg-4 col-md-6 col-sm-6 mix branding">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="<?=assets()?>/img/homeimage.jpg">
                        </div>
                        <div class="portfolio__item__text">
                            <h4>Wedding</h4>
                            <ul>
                                <li>Let us be your love story's paparazzi! Capture every blissful, crazy, and heartwarming moment of your road to forever with our wedding coverage service.</li>
                            </ul>
                            <a href="<?=page('wedding.php')?>"><button class="brwose">Browse package</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mix digital-marketing">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="<?=assets()?>/img/birthday.jpg">
                        </div>
                        <div class="portfolio__item__text">
                            <h4>Birthday Event</h4>
                            <ul>
                                <li>covers key moments of birthday</li>

                            </ul>
                            <a href=""><button class="brwose">Browse package</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mix web">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="<?=assets()?>/img/graduation.jpg">
                        </div>
                        <div class="portfolio__item__text">
                            <h4>Graduation</h4>
                            <ul>
                                <li>eCommerce</li>

                            </ul>
                            <a href=""><button class="brwose">Browse package</button></a>
                        </div>
                    </div>
                </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="pagination__option">
                        <a href="#" class="arrow__pagination left__arrow"><span class="arrow_left"></span> Prev</a>
                        <a href="#" class="number__pagination">1</a>
                        <a href="#" class="number__pagination">2</a>
                        <a href="#" class="number__pagination">3</a>
                        <a href="#" class="arrow__pagination right__arrow">Next <span class="arrow_right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services__item">
                        <div class="services__item__icon">
                            <img src="<?=assets()?>/phograph/img/icons/si-2.png" alt="">
                        </div>
                        <h4>Scriptwriting and editing</h4>
                        <p>Whether you’re halfway through the editing process, or you haven’t even started, our post
                                production services can put the finishing touches.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services__item">
                        <div class="services__item__icon">
                            <img src="<?=assets()?>/phograph/img/icons/si-1.png" alt="">
                        </div>
                        <h4>Motion graphics</h4>
                        <p>Whether you’re halfway through the editing process, or you haven’t even started, our post
                                production services can put the finishing touches.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services__item">
                        <div class="services__item__icon">
                            <img src="<?=assets()?>/phograph/img/icons/si-2.png" alt="">
                        </div>
                        <h4>Scriptwriting and editing</h4>
                        <p>Whether you’re halfway through the editing process, or you haven’t even started, our post
                                production services can put the finishing touches.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services__item">
                        <div class="services__item__icon">
                            <img src="<?=assets()?>/phograph/img/icons/si-3.png" alt="">
                        </div>
                        <h4>Video distribution</h4>
                        <p>Whether you’re halfway through the editing process, or you haven’t even started, our post
                                production services can put the finishing touches.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services__item">
                        <div class="services__item__icon">
                            <img src="<?=assets()?>/phograph/img/icons/si-4.png" alt="">
                        </div>
                        <h4>Video hosting</h4>
                        <p>Whether you’re halfway through the editing process, or you haven’t even started, our post
                                production services can put the finishing touches.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services__item">
                        <div class="services__item__icon">
                            <img src="<?=assets()?>/phograph/img/icons/si-4.png" alt="">
                        </div>
                        <h4>Video hosting</h4>
                        <p>Whether you’re halfway through the editing process, or you haven’t even started, our post
                                production services can put the finishing touches.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="callto sp__callto">
        <div class="container">
            <div class="callto__services spad set-bg" data-setbg="<?=assets()?>/phograph/img/calltos-bg.jpg">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-10 text-center">
                        <div class="callto__text">
                            <h2>CREATE AWESOME VIDEOS WITH WIDEO’S POWERFUL FEATURES</h2>
                            <p>Wideo combines all the features you need to easily create professional videos and
                                presentations</p>
                            <a href="#">Start your stories</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="logo spad">
        <div class="container">
            <div class="logo__carousel owl-carousel">
                <a href="#" class="logo__item"><img src="<?=assets()?>/phograph/img/logo/logo-1.png" alt=""></a>
                <a href="#" class="logo__item"><img src="<?=assets()?>/phograph/img/logo/logo-2.png" alt=""></a>
                <a href="#" class="logo__item"><img src="<?=assets()?>/phograph/img/logo/logo-3.png" alt=""></a>
                <a href="#" class="logo__item"><img src="<?=assets()?>/phograph/img/logo/logo-4.png" alt=""></a>
                <a href="#" class="logo__item"><img src="<?=assets()?>/phograph/img/logo/logo-5.png" alt=""></a>
                <a href="#" class="logo__item"><img src="<?=assets()?>/phograph/img/logo/logo-6.png" alt=""></a>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="footer__top">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__top__logo">
                            <a href="#"><img src="<?=assets()?>/phograph/img/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__top__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__option">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="footer__option__item">
                            <h5>About us</h5>
                            <p>Formed in 2006 by Matt Hobbs and Cael Jones, Videoprah is an award-winning, full-service
                                production company specializing.</p>
                            <a href="#" class="read__more">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3">
                        <div class="footer__option__item">
                            <h5>Who we are</h5>
                            <ul>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Carrers</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Locations</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3">
                        <div class="footer__option__item">
                            <h5>Our work</h5>
                            <ul>
                                <li><a href="#">Feature</a></li>
                                <li><a href="#">Latest</a></li>
                                <li><a href="#">Browse Archive</a></li>
                                <li><a href="#">Video for web</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="footer__option__item">
                            <h5>Newsletter</h5>
                            <p>Videoprah is an award-winning, full-service production company specializing.</p>
                            <form action="#">
                                <input type="text" placeholder="Email">
                                <button type="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__copyright">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p class="footer__copyright__text">Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            All rights reserved | This template is made with <i class="fa fa-heart-o"
                                aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        </p>
                        </div>
                </div>
            </div>
        </div>
    </footer>
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

<style>
    
    :root {
    --primary-red: #DC3545; /* Bootstrap's danger red */
    --light-red: #FF6B6B;
    --dark-red: #A30000;
    --white: #FFFFFF;
    --light-gray: #F8F9FA; /* Bootstrap's light gray - used for background elements */
    --medium-gray: #CCCCCC; /* For borders or subtle lines */
    --dark-gray: #343A40; /* Bootstrap's dark gray - for footer background etc. */
    --text-color-dark: #212529; /* Bootstrap's dark text */
    --text-color-light: #6C757D; /* A slightly lighter dark for secondary text */
}

body {
    margin: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: var(--light-gray); /* Overall light background for the page */
    color: var(--text-color-dark); /* Default text color */
    line-height: 1.6;
    overflow-x: hidden;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}

/* Header adjustments for white/red theme */
.main-header {
    background-color: var(--primary-red); /* Red background for header */
    padding: 20px 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
}

.site-title {
    font-size: 3em;
    font-weight: bold;
    color: var(--white); /* White title text */
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.5); /* Subtle white glow */
    margin: 0;
    letter-spacing: 2px;
    text-transform: uppercase;
    flex-grow: 1;
    text-align: left;
}

.main-nav {
    display: flex;
    gap: 30px;
    flex-wrap: wrap;
    justify-content: center;
}

.main-nav .nav-link {
    color: var(--white); /* White nav links */
    text-decoration: none;
    font-size: 1.1em;
    font-weight: 500;
    transition: color 0.3s ease, text-shadow 0.3s ease;
}

.main-nav .nav-link:hover {
    color: var(--light-gray); /* Light gray on hover */
    text-shadow: 0 0 8px rgba(255, 255, 255, 0.7);
}

.user-actions {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
    justify-content: flex-end;
}

.user-actions .btn-user-action {
    background-color: var(--white); /* White background for action buttons */
    color: var(--primary-red); /* Red text for action buttons */
    padding: 8px 18px;
    border: 1px solid var(--primary-red); /* Red border */
    border-radius: 5px;
    text-decoration: none;
    font-size: 0.95em;
    transition: background-color 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease, color 0.3s ease;
}

.user-actions .btn-user-action:hover {
    background-color: var(--primary-red); /* Red background on hover */
    color: var(--white); /* White text on hover */
    border-color: var(--dark-red);
    box-shadow: 0 0 10px rgba(220, 53, 69, 0.5);
}

/* Breadcrumb styles */










/* Portfolio Section */
.portfolio.spad {
    padding-top: 50px; /* Consistent top padding */
    padding-bottom: 50px; /* Consistent bottom padding */
    background-color: var(--light-gray); /* Ensure consistency with body background */
}

/* Portfolio Filter */
.portfolio__filter {
    text-align: center;
    margin-bottom: 50px;
    padding-top: 20px; /* Add some padding if needed, but consider overall layout */
}

.portfolio__filter li {
    list-style: none;
    display: inline-block;
    font-size: 15px;
    color: var(--text-color-dark);
    font-weight: 700;
    padding: 10px 25px;
    border: 1px solid var(--medium-gray); /* Subtle border */
    border-radius: 50px;
    margin-right: 10px;
    cursor: pointer;
    transition: all 0.3s;
}

.portfolio__filter li:last-child {
    margin-right: 0;
}

.portfolio__filter li.active,
.portfolio__filter li:hover {
    background-color: var(--primary-red);
    color: var(--white);
    border-color: var(--primary-red);
    box-shadow: 0 0 15px rgba(220, 53, 69, 0.4);
}

/* Portfolio Item */
.portfolio__item {
    margin-bottom: 30px;
    background-color: var(--white);
    border: 1px solid var(--medium-gray); /* Light border for definition */
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.portfolio__item:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
}

.portfolio__item__video {
    height: 250px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    z-index: 1;
    background-size: cover; /* Ensure images cover the area */
    background-position: center; /* Center the images */
}

.portfolio__item__video::before {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.3); /* Slightly less dark overlay for image visibility */
    content: "";
    z-index: -1;
}

.portfolio__item__text {
    padding: 25px 25px 20px;
    text-align: center;
}

.portfolio__item__text h4 {
    color: var(--text-color-dark);
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 10px;
}

.portfolio__item__text ul {
    padding: 0;
    margin: 0 0 20px 0;
    list-style: none;
}

.portfolio__item__text ul li {
    font-size: 15px;
    color: var(--text-color-light); /* Slightly lighter dark for descriptions */
    line-height: 25px;
}

.brwose {
    padding: 8px 20px;
    border: none;
    background-color: var(--primary-red); /* Red button */
    color: var(--white); /* White text */
    border-radius: 8px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease, box-shadow 0.3s ease;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
}

.brwose:hover {
    background-color: var(--dark-red); /* Darker red on hover */
    transform: translateY(-2px);
    box-shadow: 0 6px 12px rgba(220, 53, 69, 0.4);
}

/* Pagination */
.pagination__option {
    padding-top: 20px;
    text-align: center;
}

.pagination__option a {
    display: inline-block;
    font-size: 15px;
    color: var(--text-color-dark);
    font-weight: 700;
    padding: 10px 18px;
    border: 1px solid var(--medium-gray);
    border-radius: 50px;
    margin: 0 5px;
    transition: all 0.3s;
    text-decoration: none; /* Remove underline from pagination links */
}

.pagination__option a.number__pagination.active,
.pagination__option a.number__pagination:hover {
    background-color: var(--primary-red);
    color: var(--white);
    border-color: var(--primary-red);
}

.pagination__option a.arrow__pagination {
    color: var(--primary-red);
}

.pagination__option a.arrow__pagination:hover {
    background-color: var(--primary-red);
    color: var(--white);
    border-color: var(--primary-red);
}

/* Services Section */
.services-page {
    padding-top: 50px;
    padding-bottom: 50px;
    background-color: var(--light-gray); /* Consistent background */
}

.services__item {
    background-color: var(--white);
    border: 1px solid var(--medium-gray);
    border-radius: 8px;
    padding: 40px;
    text-align: center;
    margin-bottom: 30px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.services__item:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
}

.services__item__icon {
    margin-bottom: 30px;
}

.services__item h4 {
    color: var(--text-color-dark);
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 15px;
}

.services__item p {
    color: var(--text-color-light); /* Consistent lighter dark for descriptions */
    font-size: 15px;
    line-height: 25px;
}

/* Call To Action Section */
.callto.sp__callto {
    padding-bottom: 50px;
}

.callto__services.set-bg {
    padding: 100px 0;
    position: relative;
    z-index: 1;
}

.callto__services.set-bg::before {
    background: rgba(0, 0, 0, 0.6); /* Dark overlay to make text pop */
    content: ''; /* Add content to make ::before pseudo-element work */
    position: absolute; /* Add positioning properties */
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
}

.callto__text h2 {
    color: var(--white);
    font-size: 48px;
    font-weight: 700;
    margin-bottom: 20px;
}

.callto__text p {
    color: var(--white);
    margin-bottom: 40px;
    font-size: 16px;
    line-height: 26px;
}

.callto__text a {
    display: inline-block;
    font-size: 15px;
    color: var(--white);
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    padding: 12px 30px;
    border: 2px solid var(--primary-red); /* Red border for CTA button */
    border-radius: 50px;
    transition: all 0.3s;
    text-decoration: none; /* Remove underline from CTA button */
}

.callto__text a:hover {
    background-color: var(--primary-red);
    box-shadow: 0 0 20px rgba(220, 53, 69, 0.6);
}

/* Logo Section */
.logo {
    padding-top: 50px;
    padding-bottom: 50px;
    background-color: var(--light-gray); /* Consistent background */
}

/* Footer */
.footer {
    background-color: var(--dark-gray); /* Dark gray background for footer */
    padding-top: 80px;
    padding-bottom: 30px;
    margin-top: auto; /* Pushes the footer to the bottom */
}

.footer__top {
    margin-bottom: 50px;
}

.footer__top__logo {
    text-align: left;
}

.footer__top__social {
    text-align: right;
}

.footer__top__social a {
    display: inline-block;
    font-size: 16px;
    color: var(--white);
    width: 40px;
    height: 40px;
    background-color: rgba(255, 255, 255, 0.1);
    line-height: 40px;
    text-align: center;
    border-radius: 50%;
    margin-right: 10px;
    transition: all 0.3s;
}

.footer__top__social a:hover {
    background-color: var(--primary-red); /* Red on hover */
}

.footer__option__item {
    margin-bottom: 30px;
}

.footer__option__item h5 {
    color: var(--white);
    font-weight: 700;
    margin-bottom: 20px;
}

.footer__option__item p {
    color: var(--medium-gray); /* Slightly lighter gray for footer paragraph text */
    font-size: 15px;
    line-height: 25px;
    margin-bottom: 20px;
}

.footer__option__item .read__more {
    font-size: 15px;
    color: var(--primary-red); /* Red for read more link */
    font-weight: 700;
    transition: all 0.3s;
    text-decoration: none; /* Remove default underline */
}

.footer__option__item .read__more:hover {
    text-decoration: underline;
}

.footer__option__item ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer__option__item ul li {
    margin-bottom: 10px;
}

.footer__option__item ul li:last-child {
    margin-bottom: 0;
}

.footer__option__item ul li a {
    font-size: 15px;
    color: var(--medium-gray);
    transition: all 0.3s;
    text-decoration: none; /* Remove default underline */
}

.footer__option__item ul li a:hover {
    color: var(--primary-red); /* Red on hover */
}

.footer__option__item form {
    position: relative;
}

.footer__option__item form input {
    width: 100%;
    height: 50px;
    background-color: rgba(255, 255, 255, 0.1);
    border: none;
    padding-left: 20px;
    font-size: 15px;
    color: var(--white);
    border-radius: 5px;
}

.footer__option__item form input::placeholder {
    color: var(--medium-gray);
}

.footer__option__item form button {
    position: absolute;
    right: 0;
    top: 0;
    height: 100%;
    background-color: var(--primary-red); /* Red button */
    border: none;
    color: var(--white);
    padding: 0 20px;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
    cursor: pointer;
    transition: all 0.3s;
}

.footer__option__item form button:hover {
    background-color: var(--dark-red);
}

.footer__copyright {
    padding-top: 40px;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
}

.footer__copyright__text {
    color: var(--medium-gray);
}

.footer__copyright__text i {
    color: var(--primary-red);
}

.footer__copyright__text a {
    color: var(--primary-red);
    text-decoration: none; /* Remove default underline */
}

.footer__copyright__text a:hover {
    text-decoration: underline;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .main-header {
        padding: 15px 20px; /* Adjust padding for smaller screens */
        flex-direction: column; /* Stack elements vertically */
        text-align: center;
    }

    .site-title {
        font-size: 2.5em; /* Smaller font size */
        text-align: center;
        margin-bottom: 15px;
    }

    .main-nav {
        flex-direction: column;
        gap: 15px;
        margin-bottom: 15px;
    }

    .user-actions {
        justify-content: center;
    }

    .breadcrumb__text h2 {
        font-size: 36px; /* Smaller for mobile */
    }

    .footer__top__logo,
    .footer__top__social {
        text-align: center;
        margin-bottom: 20px;
    }

    .portfolio__filter li {
        margin-bottom: 10px;
        margin-right: 5px; /* Adjust spacing */
    }

    .callto__text h2 {
        font-size: 32px; /* Adjust for smaller screens */
    }
}

@media (max-width: 480px) {
    .portfolio__filter li {
        padding: 8px 15px; /* Smaller padding for very small screens */
        font-size: 14px;
    }
}
</style>
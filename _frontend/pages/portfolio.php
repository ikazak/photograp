<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Videograph Template">
    <meta name="keywords" content="Videograph, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PPHOTOGRAPHY WEBSITE</title>

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
                        <h2>Photographers portfolio</h2>
                        <div class="breadcrumb__links">
                            <a href="#">Home</a>
                            <span>portfolio</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <main class="main-content">
        <div class="category-filter-wrapper">
            <div class="category-filter">
                <button class="category-btn active" data-category="all">All Photographers</button>
                <button class="category-btn" data-category="wedding">Wedding</button>
                <button class="category-btn" data-category="birthday">Birthday</button>
                <button class="category-btn" data-category="events">Events</button>
                <button class="category-btn" data-category="portraits">Portraits</button>
                <button class="category-btn" data-category="landscape">Landscape</button>
                <button class="category-btn" data-category="food">Food</button>
                <button class="category-btn" data-category="product">Product</button>
                <button class="category-btn" data-category="fashion">Fashion</button>
                <button class="category-btn" data-category="real-estate">Real Estate</button>
            </div>
        </div>

        <div class="photographer-grid">
            <div class="photographer-card" data-category="wedding">
                <div class="profile-image-wrapper">
                    <img src="https://via.placeholder.com/100/9E00FF/FFFFFF?text=P1" alt="Photographer 1" class="profile-image">
                </div>
                <h3 class="photographer-name">Jamie Portrait</h3>
                <p class="photographer-specialty">Wedding & Photograper</p>
                <p class="photographer-tagline">Capturing the magic of your special days with a creative and personal touch. Passionate about storytelling through images.</p>
                <p class="photographer-location"><i class="fas fa-map-marker-alt"></i>Skills:
Portraiture Event Coverage</p>
                <a href="#" class="btn-view-profile">View Profile</a>
            </div>

            <div class="photographer-card" data-category="birthday">
                <div class="profile-image-wrapper">
                    <img src="https://via.placeholder.com/100/00BFFF/FFFFFF?text=P2" alt="Photographer 2" class="profile-image">
                </div>
                <h3 class="photographer-name">Markus Lens</h3>
                <p class="photographer-specialty">Birthday & Lifestyle</p>
                <p class="photographer-tagline">Making your celebrations unforgettable through vibrant photos.</p>
                <p class="photographer-location"><i class="fas fa-map-marker-alt"></i> Bacolod City, PH</p>
                <a href="#" class="btn-view-profile">View Profile</a>
            </div>

            <div class="photographer-card" data-category="portraits">
                <div class="profile-image-wrapper">
                    <img src="https://via.placeholder.com/100/FF00FF/FFFFFF?text=P3" alt="Photographer 3" class="profile-image">
                </div>
                <h3 class="photographer-name">Sophia Portraits</h3>
                <p class="photographer-specialty">Artistic Portraits</p>
                <p class="photographer-tagline">Unveiling the unique beauty in every individual.</p>
                <p class="photographer-location"><i class="fas fa-map-marker-alt"></i> Dumaguete City, PH</p>
                <a href="#" class="btn-view-profile">View Profile</a>
            </div>

            <div class="photographer-card" data-category="landscape">
                <div class="profile-image-wrapper">
                    <img src="https://via.placeholder.com/100/00FF9E/FFFFFF?text=P4" alt="Photographer 4" class="profile-image">
                </div>
                <h3 class="photographer-name">Nature's Eye</h3>
                <p class="photographer-specialty">Wilderness & Scenic Landscapes</p>
                <p class="photographer-tagline">Documenting the majestic grandeur of our planet.</p>
                <p class="photographer-location"><i class="fas fa-map-marker-alt"></i> Sipalay City, PH</p>
                <a href="#" class="btn-view-profile">View Profile</a>
            </div>

            <div class="photographer-card" data-category="food">
                <div class="profile-image-wrapper">
                    <img src="https://via.placeholder.com/100/FF9E00/FFFFFF?text=P5" alt="Photographer 5" class="profile-image">
                </div>
                <h3 class="photographer-name">Culinary Click</h3>
                <p class="photographer-specialty">Food & Restaurant</p>
                <p class="photographer-tagline">Making your dishes look as delicious as they taste.</p>
                <p class="photographer-location"><i class="fas fa-map-marker-alt"></i> Iloilo City, PH</p>
                <a href="#" class="btn-view-profile">View Profile</a>
            </div>

            <div class="photographer-card" data-category="product">
                <div class="profile-image-wrapper">
                    <img src="https://via.placeholder.com/100/FF009E/FFFFFF?text=P6" alt="Photographer 6" class="profile-image">
                </div>
                <h3 class="photographer-name">Pixel Perfect Products</h3>
                <p class="photographer-specialty">E-commerce Product Photography</p>
                <p class="photographer-tagline">Showcasing your products with professional imagery.</p>
                <p class="photographer-location"><i class="fas fa-map-marker-alt"></i> Cebu City, PH</p>
                <a href="#" class="btn-view-profile">View Profile</a>
            </div>

            </div>

        <div class="pagination">
            <button class="pagination-btn">&laquo; Prev</button>
            <button class="pagination-btn active">1</button>
            <button class="pagination-btn">2</button>
            <button class="pagination-btn">3</button>
            <button class="pagination-btn">Next &raquo;</button>
        </div>
    </main>

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

<?=include_page('landing/foot')?>

</html>

<style>
    .site-title {
    font-size: 3em;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 0 15px rgba(158, 0, 255, 0.6), 0 0 30px rgba(0, 191, 255, 0.4); /* Purple/blue glow */
    margin: 0;
    letter-spacing: 2px;
    text-transform: uppercase;
    flex-grow: 1; /* Allow title to take space */
    text-align: left; /* Default alignment */
}

.main-nav {
    display: flex;
    gap: 30px; /* Space between nav links */
    flex-wrap: wrap;
    justify-content: center;
}

.main-nav .nav-link {
    color: #FFFFFF;
    text-decoration: none;
    font-size: 1.1em;
    font-weight: 500;
    transition: color 0.3s ease, text-shadow 0.3s ease;
}

.main-nav .nav-link:hover {
    color: #CCEEFF; /* Lighter blue on hover */
    text-shadow: 0 0 8px rgba(0, 191, 255, 0.7);
}

body {
    margin: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* A modern, clean font */
    background-color:rgb(7, 2, 35); /* Very deep dark background */
    color: #FFFFFF; /* Default text color */
    line-height: 1.6;
    overflow-x: hidden; /* Prevent horizontal scroll due to potential glow overflow */
    min-height: 100vh; /* Ensure body takes full viewport height */
    display: flex;
    flex-direction: column; /* For footer to stick to bottom */
}

.user-actions {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
    justify-content: flex-end; /* Align right */
}

.user-actions .btn-user-action {
    background-color: #1A1A1A;
    color: #FFFFFF;
    padding: 8px 18px;
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 5px;
    text-decoration: none;
    font-size: 0.95em;
    transition: background-color 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
}

.user-actions .btn-user-action:hover {
    background-color: rgba(0, 191, 255, 0.1);
    border-color: rgba(0, 191, 255, 0.7);
    box-shadow: 0 0 10px rgba(0, 191, 255, 0.5);
}

/* Main Content Area */
.main-content {
    max-width: 1200px;
    margin: 40px auto; /* Increased margin for better spacing */
    padding: 0 20px;
    flex-grow: 1; /* Allows main content to expand and push footer down */
}

/* Category Filter Tabs */
.category-filter-wrapper {
    width: 100%;
    overflow-x: auto; /* Enable horizontal scrolling on small screens */
    -webkit-overflow-scrolling: touch; /* Smooth scrolling on iOS */
    padding-bottom: 10px; /* Space for scrollbar if present */
    margin-bottom: 50px; /* Space below categories */
}

.category-filter-wrapper::-webkit-scrollbar { /* Hide scrollbar for Chrome, Safari, Edge */
    height: 8px; /* Height of the scrollbar */
}

.category-filter-wrapper::-webkit-scrollbar-track {
    background: #1A1A1A; /* Track color */
    border-radius: 10px;
}

.category-filter-wrapper::-webkit-scrollbar-thumb {
    background: linear-gradient(45deg, #9E00FF, #00BFFF); /* Thumb color with gradient */
    border-radius: 10px;
}

.category-filter {
    display: flex;
    justify-content: center; /* Center the tabs */
    gap: 15px; /* Space between buttons */
    padding-bottom: 5px; /* Visual space above the scrollbar if present */
    min-width: fit-content; /* Ensures content doesn't shrink, enabling scroll */
}


.category-btn {
    background-color: #2C2C3A; /* Dark background for inactive */
    color: #FFFFFF;
    padding: 12px 25px;
    border: none;
    border-radius: 25px; /* Rounded pill shape */
    font-size: 1.05em;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.3s ease, box-shadow 0.3s ease, color 0.3s ease, transform 0.3s ease;
    white-space: nowrap; /* Prevent text wrapping inside buttons */
    position: relative; /* For the glow */
}

.category-btn:hover:not(.active) {
    background-color: #3A3A4A; /* Slightly lighter on hover */
    box-shadow: 0 0 15px rgba(0, 191, 255, 0.3); /* Subtle glow on hover */
    transform: translateY(-2px); /* Slight lift on hover */
}

.category-btn.active {
    background: linear-gradient(45deg, #9E00FF, #00BFFF); /* Gradient background for active */
    box-shadow: 0 0 20px rgba(158, 0, 255, 0.8), 0 0 40px rgba(0, 191, 255, 0.6); /* Stronger glow for active */
    color: #FFFFFF;
    font-weight: bold;
    transform: scale(1.05); /* Slight scale up for active */
    z-index: 1; /* Ensure active button is on top */
}

/* Photographer Grid */
.photographer-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); /* Responsive grid */
    gap: 30px; /* Space between cards */
    padding: 20px 0;
}

/* Photographer Card */
.photographer-card {
    background-color: #2C2C3A; /* Card background, slightly lighter than body */
    border-radius: 12px; /* Rounded corners for cards */
    padding: 30px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between; /* Distribute content vertically */
    min-height: 380px; /* Ensure consistent card height */
    position: relative; /* For glow effect */
    border: 1px solid rgba(255, 255, 255, 0.05); /* Subtle border for definition */
    box-shadow: 0 0 0 rgba(0, 191, 255, 0); /* Initial shadow for smooth transition */
}

.photographer-card:hover {
    transform: translateY(-8px); /* Lift effect on hover */
    /* Combined glow for accent colors */
    box-shadow: 0 10px 30px rgba(0, 191, 255, 0.5), /* Blue glow */
                0 0 40px rgba(158, 0, 255, 0.3); /* Purple glow */
    border-color: rgba(0, 191, 255, 0.5); /* Accent border on hover */
}

.profile-image-wrapper {
    position: relative;
    width: 120px;
    height: 120px;
    border-radius: 50%; /* Circular image */
    overflow: hidden;
    margin-bottom: 20px;
    display: flex; /* Center image */
    justify-content: center;
    align-items: center;
    /* This padding + gradient background creates the glowing border effect */
    background: linear-gradient(45deg, #9E00FF, #00BFFF);
    padding: 5px;
    /* Inner shadow to give depth to the image wrapper */
    box-shadow: inset 0 0 10px rgba(0, 191, 255, 0.3), /* Inner blue glow */
                inset 0 0 20px rgba(158, 0, 255, 0.2), /* Inner purple glow */
                0 0 25px rgba(0, 191, 255, 0.6), /* Outer blue glow */
                0 0 35px rgba(158, 0, 255, 0.4); /* Outer purple glow */
}

.profile-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 50%; /* Ensure inner image is also circular */
    border: 3px solid #2C2C3A; /* Inner border to separate image from glowing background */
}

.photographer-name {
    font-size: 1.8em;
    font-weight: bold;
    color: #FFFFFF;
    margin-bottom: 8px;
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.2); /* Subtle text glow */
}

.photographer-specialty {
    font-size: 1.1em;
    color: #B0B0B0; /* Light gray for specialty */
    margin-bottom: 15px;
    font-weight: 500;
}

.photographer-tagline {
    font-size: 0.95em;
    color: #D0D0D0;
    margin-bottom: 15px;
    flex-grow: 1; /* Allows tagline to take available space */
}

.photographer-location {
    font-size: 0.9em;
    color: #B0B0B0;
    margin-bottom: 25px; /* Space before button */
}

.photographer-location .fas {
    margin-right: 5px;
    color: #00BFFF; /* Accent color for icon */
}

.btn-view-profile {
    display: inline-block;
    background-color: #1A1A1A; /* Dark background for button */
    color: #FFFFFF;
    padding: 12px 30px;
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 8px; /* Slightly rounded button */
    text-decoration: none;
    font-size: 1em;
    font-weight: 600;
    transition: background-color 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
}

.btn-view-profile:hover {
    background-color: rgba(0, 191, 255, 0.1); /* Subtle blue background on hover */
    border-color: rgba(0, 191, 255, 0.7); /* Accent border */
    box-shadow: 0 0 15px rgba(0, 191, 255, 0.6); /* Glow on hover */
}

/* Pagination Styling */
.pagination {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-top: 50px;
    padding-bottom: 50px;
}

.pagination-btn {
    background-color: #2C2C3A; /* Dark background */
    color: #FFFFFF;
    padding: 10px 18px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 1em;
    font-weight: 500;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
}

.pagination-btn:hover:not(.active) {
    background-color: #3A3A4A;
    box-shadow: 0 0 10px rgba(0, 191, 255, 0.3);
}

.pagination-btn.active {
    background: linear-gradient(45deg, #9E00FF, #00BFFF);
    box-shadow: 0 0 15px rgba(158, 0, 255, 0.6), 0 0 25px rgba(0, 191, 255, 0.4);
    font-weight: bold;
}

/* Footer Styling */
.main-footer {
    background-color: #151515;
    color: #B0B0B0;
    text-align: center;
    padding: 30px 20px;
    font-size: 0.9em;
    border-top: 1px solid rgba(255, 255, 255, 0.05);
    margin-top: auto; /* Pushes footer to the bottom */
}

/* Responsive Design */
@media (max-width: 992px) { /* Adjust breakpoint for 3 columns on tablet */
    .photographer-grid {
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 25px;
    }
}

@media (max-width: 768px) {
    .main-header {
        padding: 15px 20px;
    }

    .header-content {
        flex-direction: column;
        text-align: center;
    }

    .site-title {
        font-size: 2.5em;
        text-align: center;
        width: 100%; /* Make title take full width */
    }

    .main-nav {
        gap: 20px;
        margin-bottom: 10px;
    }

    .main-nav .nav-link {
        font-size: 1em;
    }

    .user-actions {
        justify-content: center;
        width: 100%;
        gap: 10px;
    }
    .user-actions .btn-user-action {
        flex: 1; /* Make buttons share space */
        max-width: 120px; /* Limit button width */
        font-size: 0.9em;
        padding: 8px 15px;
    }

    .main-content {
        padding: 0 15px;
    }

    .category-filter-wrapper {
        padding: 0 15px 10px; /* Adjust padding for mobile scroll */
    }

    .category-filter {
        justify-content: flex-start; /* Align left for horizontal scroll */
        gap: 10px;
    }

    .category-btn {
        padding: 10px 20px;
        font-size: 0.95em;
    }

    .photographer-grid {
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); /* Min size for cards */
        gap: 20px;
    }

    .photographer-card {
        padding: 25px;
        min-height: auto; /* Allow height to adjust naturally on mobile */
    }

    .profile-image-wrapper {
        width: 100px;
        height: 100px;
        margin-bottom: 15px;
    }

    .photographer-name {
        font-size: 1.6em;
    }

    .photographer-specialty,
    .photographer-tagline,
    .photographer-location {
        font-size: 0.85em;
    }

    .btn-view-profile {
        padding: 10px 25px;
        font-size: 0.95em;
    }
}

@media (max-width: 576px) { /* Smaller mobile screens */
    .site-title {
        font-size: 2em;
    }

    .main-nav {
        flex-direction: column; /* Stack nav links vertically */
        align-items: center;
        gap: 10px;
    }

    .category-filter {
        padding-bottom: 5px; /* Adjust padding for scrollbar */
    }

    .photographer-grid {
        grid-template-columns: 1fr; /* Single column on very small screens */
        padding: 0 10px; /* Adjust padding */
    }

    .photographer-card {
        padding: 20px;
    }
}
</style>
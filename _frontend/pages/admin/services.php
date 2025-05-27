<!DOCTYPE html>
<html lang="en">

<?=include_page('header')?>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <?=include_page('sidebar')?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?=include_page('navbar')?>
            <!-- Navbar End -->

            <!-- Sessions Page Content Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded p-4"> <!-- Main content card for the sessions page -->

                    <!-- Header: Title, Search, New Session Button -->
                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4">
                        <h1 class="mb-3 mb-md-0" style="font-size: 2.25rem; font-weight: 500;">Services</h1>
                        <div class="d-flex flex-column flex-sm-row align-items-stretch align-items-sm-center">
                            <div class="input-group me-sm-3 mb-2 mb-sm-0" style="max-width: 300px;">
                                <span class="input-group-text bg-white border-end-0 text-secondary" id="search-icon"><i class="bi bi-search"></i></span>
                                <input type="text" id="serviceSearchInput" class="form-control border-start-0" placeholder="Search services..." aria-label="Search services" aria-describedby="search-icon">
                            </div>
                            <!-- Updated New Service Button to trigger modal -->
                            <button type="button" class="btn text-white px-3 py-2" style="background-color: red; border-color: #17a2b8; min-width: 130px;" data-bs-toggle="modal" data-bs-target="#addPackageModal">
                                New Service
                            </button>
                        </div>
                    </div>

                    <!-- Tab Navigation -->
                    <ul class="nav nav-tabs sessions-tabs mb-4" id="sessionsTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="all-sessions-tab" data-bs-toggle="tab" data-bs-target="#all-sessions-content" type="button" role="tab" aria-controls="all-sessions-content" aria-selected="true">All Services</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="wedding-tab" data-bs-toggle="tab" data-bs-target="#wedding-content" type="button" role="tab" aria-controls="wedding-content" aria-selected="false">Wedding</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="portrait-tab" data-bs-toggle="tab" data-bs-target="#portrait-content" type="button" role="tab" aria-controls="portrait-content" aria-selected="false">Portrait</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="event-tab" data-bs-toggle="tab" data-bs-target="#event-content" type="button" role="tab" aria-controls="event-content" aria-selected="false">Event</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="school-milestone-tab" data-bs-toggle="tab" data-bs-target="#school-milestone-content" type="button" role="tab" aria-controls="school-milestone-content" aria-selected="false">School & Milestone</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="cultural-lifestyle-tab" data-bs-toggle="tab" data-bs-target="#cultural-lifestyle-content" type="button" role="tab" aria-controls="cultural-lifestyle-content" aria-selected="false">Cultural & Lifestyle</button>
                        </li>
                    </ul>

                    <style>
                        .sessions-tabs .nav-link {
                            color: #6c757d;
                            border: none;
                            border-bottom: 3px solid transparent;
                            padding-left: 0;
                            padding-right: 0;
                            margin-right: 24px;
                            background-color: transparent;
                        }
                        .sessions-tabs .nav-link.active {
                            color: #000000;
                            border-bottom: 3px solid #000000;
                            font-weight: 500;
                        }
                        .sessions-tabs .nav-link:hover {
                            color: #495057;
                            border-bottom-color: #dee2e6;
                        }
                        .client-initials { /* Kept for other tabs if they use it */
                            background-color: #e9ecef;
                            color: #495057;
                            width: 32px;
                            height: 32px;
                            border-radius: 50%;
                            display: inline-flex;
                            align-items: center;
                            justify-content: center;
                            font-weight: 500;
                            font-size: 0.85rem;
                        }
                        .session-status-confirmed { /* Kept for other tabs */
                            background-color: #d4edda;
                            color: #155724;
                            font-weight: 500;
                            padding: 0.3em 0.6em;
                            font-size: 0.75rem;
                        }
                        .session-type-dot { /* Kept for other tabs */
                            width: 8px;
                            height: 8px;
                            border-radius: 50%;
                            display: inline-block;
                            background-color: #dc3545;
                        }
                        .sessions-table th { /* Kept for other tabs */
                            font-size: 0.75rem;
                            font-weight: 600;
                            text-transform: uppercase;
                            color: #6c757d;
                            padding-top: 1rem;
                            padding-bottom: 1rem;
                            border-bottom: 1px solid #dee2e6;
                            border-top: none;
                        }
                        .sessions-table td { /* Kept for other tabs */
                            padding-top: 1rem;
                            padding-bottom: 1rem;
                            vertical-align: middle;
                            border-bottom: 1px solid #dee2e6;
                        }
                         .sessions-table tr:last-child td { /* Kept for other tabs */
                            border-bottom: none;
                        }
                        .sessions-table .text-muted { /* Kept for other tabs */
                            font-size: 0.85rem;
                        }
                         .empty-state-container {
                            padding-top: 80px;
                            padding-bottom: 80px;
                        }
                        .empty-state-container h3 {
                            font-size: 1.5rem;
                            font-weight: 500;
                            margin-bottom: 0.75rem;
                        }
                        .empty-state-container p {
                            color: #6c757d;
                            font-size: 1rem;
                        }
                        .table {
                            background-color: transparent;
                        }
                        .bg-light.rounded.p-4 {
                             background-color: #ffffff !important;
                        }
                        /* Card Styles */
                        .service-card {
                            transition: box-shadow .3s ease-in-out;
                            border: 1px solid #e9ecef; /* Light border for cards */
                        }
                        .service-card:hover {
                            box-shadow: 0 .5rem 1rem rgba(0,0,0,.10)!important; /* Softer shadow */
                        }
                        .service-card .card-img-top {
                            height: 200px;
                            object-fit: cover;
                        }
                        .service-card .card-title {
                            font-size: 1.1rem;
                            font-weight: 500;
                            color: #343a40;
                        }
                        .service-card .card-subtitle {
                            font-size: 1rem; /* Price subtitle */
                        }
                        .service-card .card-text small { /* For truncated description */
                            display: -webkit-box;
                            -webkit-line-clamp: 2;
                            -webkit-box-orient: vertical;
                            overflow: hidden;
                            text-overflow: ellipsis;
                            min-height: 2.4em;
                        }
                         .service-card .card-text ul li {
                            margin-bottom: 0.25rem; /* Spacing for list items in card */
                        }
                        .service-card .price-tag {
                            font-size: 0.9rem;
                            color: #495057;
                        }
                        .service-card .card-body {
                            display: flex;
                            flex-direction: column;
                        }
                        .service-card .card-actions { /* For dynamically added services */
                            margin-top: auto;
                        }
                        .service-card .card-footer { /* For dynamically added services */
                           background-color: #f8f9fa;
                           border-top: 1px solid #e9ecef;
                        }
                    </style>

                    <!-- Tab Content -->
                    <div class="tab-content" id="sessionsTabContent">

                        <div class="tab-pane fade show active" id="all-sessions-content" role="tabpanel" aria-labelledby="all-sessions-tab">
                           <!-- Container for cards -->
                           <div id="allServicesContainer" class="row g-4">
                               <!-- Service cards will be injected here by JavaScript -->
                           </div>
                           <div id="noServicesMessage" class="text-center empty-state-container" style="display: none;">
                                <h3>No services found</h3>
                                <p>Create a new service to get started or refine your search.</p>
                           </div>
                           <div class="d-flex justify-content-end text-muted small mt-3" id="allServicesCount">
                               <!-- Count will be updated by JavaScript -->
                           </div>
                        </div>

                        <div class="tab-pane fade" id="wedding-content" role="tabpanel" aria-labelledby="wedding-tab">
                            <div class="container-fluid py-3"> <!-- Added padding -->
                                <div class="mb-4">
                                    <h3 class="mb-3" style="font-weight: 500;">Wedding Photography Services</h3>
                                    <p>Our wedding photography services are designed to capture every precious moment of your special day, ensuring timeless memories you'll cherish forever. We focus on a blend of candid moments and beautifully posed shots to tell the complete story of your celebration.</p>

                                    <h4 class="mt-4 mb-2" style="font-size: 1.25rem; font-weight: 500;">Key Offerings Include:</h4>
                                    <ul class="list-unstyled">
                                        <li><i class="bi bi-camera-fill text-primary me-2"></i><strong>Wedding Day Coverage:</strong> Comprehensive photography from pre-ceremony preparations through the ceremony and reception festivities.</li>
                                        <li class="mt-1"><i class="bi bi-heart-fill text-danger me-2"></i><strong>Engagement Shoot:</strong> A relaxed, pre-wedding session at a location of your choice, perfect for "save the date" cards or to simply celebrate your engagement.</li>
                                    </ul>
                                </div>

                                <hr class="my-4">

                                <h3 class="mb-4" style="font-weight: 500;">Wedding Packages</h3>
                                <div class="row g-4">
                                    <!-- Package A Card -->
                                    <div class="col-md-6 col-lg-4 mb-3">
                                        <div class="card h-100 service-card shadow-sm">
                                            <div class="card-body d-flex flex-column">
                                                <h5 class="card-title">Package A: Basic Coverage</h5>
                                                <h6 class="card-subtitle mb-3 text-primary fw-bold">₱15,000</h6>
                                                <p class="card-text"><strong>Includes:</strong></p>
                                                <ul class="list-unstyled small mb-3 flex-grow-1">
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>Wedding ceremony photos</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>Reception photos</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>Group shots</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>Family portraits</li>
                                                </ul>
                                                <div class="mt-auto">
                                                    <p class="card-text price-tag mb-1"><strong>Down Payment:</strong> ₱5,000</p>
                                                    <p class="card-text price-tag"><strong>Remaining Balance:</strong> ₱10,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Package B Card -->
                                    <div class="col-md-6 col-lg-4 mb-3">
                                        <div class="card h-100 service-card shadow-sm">
                                            <div class="card-body d-flex flex-column">
                                                <h5 class="card-title">Package B: Premium Coverage</h5>
                                                <h6 class="card-subtitle mb-3 text-primary fw-bold">₱25,000</h6>
                                                <p class="card-text"><strong>Includes:</strong></p>
                                                <ul class="list-unstyled small mb-3 flex-grow-1">
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>Wedding ceremony & reception</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>Engagement shoot</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>Couple portraits</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>Online gallery</li>
                                                </ul>
                                                <div class="mt-auto">
                                                    <p class="card-text price-tag mb-1"><strong>Down Payment:</strong> ₱8,000</p>
                                                    <p class="card-text price-tag"><strong>Remaining Balance:</strong> ₱17,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Package C Card -->
                                    <div class="col-md-6 col-lg-4 mb-3">
                                        <div class="card h-100 service-card shadow-sm">
                                            <div class="card-body d-flex flex-column">
                                                <h5 class="card-title">Package C: Deluxe Coverage</h5>
                                                <h6 class="card-subtitle mb-3 text-primary fw-bold">₱35,000</h6>
                                                <p class="card-text"><strong>Includes:</strong></p>
                                                <ul class="list-unstyled small mb-3 flex-grow-1">
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>Full wedding day coverage (prep, ceremony, reception)</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>Engagement shoot</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>Couple portraits</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>Premium photo album</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>Online gallery with print options</li>
                                                </ul>
                                                <div class="mt-auto">
                                                    <p class="card-text price-tag mb-1"><strong>Down Payment:</strong> ₱12,000</p>
                                                    <p class="card-text price-tag"><strong>Remaining Balance:</strong> ₱23,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="portrait-content" role="tabpanel" aria-labelledby="portrait-tab">
                            <div class="container-fluid py-3">
                                <div class="mb-4">
                                    <h3 class="mb-3" style="font-weight: 500;">Portrait Photography Services</h3>
                                    <p>Our portrait photography aims to capture the unique personality and essence of individuals, couples, and families. Whether you're looking for professional headshots, artistic personal portraits, or memorable family photos, we tailor each session to your vision.</p>

                                    <h4 class="mt-4 mb-2" style="font-size: 1.25rem; font-weight: 500;">Key Offerings Include:</h4>
                                    <ul class="list-unstyled">
                                        <li><i class="bi bi-person-badge-fill text-primary me-2"></i><strong>Studio Portrait Photography:</strong> Professional photos taken in a controlled studio environment, ideal for formal, corporate, or artistic purposes.</li>
                                        <li class="mt-1"><i class="bi bi-tree-fill text-success me-2"></i><strong>Outdoor Portrait Photography:</strong> Natural-light portraits captured in scenic outdoor locations or casual urban settings, offering a more relaxed and dynamic feel.</li>
                                    </ul>
                                </div>

                                <hr class="my-4">

                                <h3 class="mb-4" style="font-weight: 500;">Portrait Packages</h3>
                                <div class="row g-4">
                                    <!-- Package A Card -->
                                    <div class="col-md-6 col-lg-4 mb-3">
                                        <div class="card h-100 service-card shadow-sm">
                                            <div class="card-body d-flex flex-column">
                                                <h5 class="card-title">Package A: Basic Portrait</h5>
                                                <h6 class="card-subtitle mb-3 text-primary fw-bold">₱4,500</h6>
                                                <p class="card-text"><strong>Includes:</strong></p>
                                                <ul class="list-unstyled small mb-3 flex-grow-1">
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>1-hour studio session</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>2 outfit changes</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>20 edited photos</li>
                                                </ul>
                                                <div class="mt-auto">
                                                    <p class="card-text price-tag mb-1"><strong>Down Payment:</strong> ₱1,500</p>
                                                    <p class="card-text price-tag"><strong>Remaining Balance:</strong> ₱3,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Package B Card -->
                                    <div class="col-md-6 col-lg-4 mb-3">
                                        <div class="card h-100 service-card shadow-sm">
                                            <div class="card-body d-flex flex-column">
                                                <h5 class="card-title">Package B: Outdoor Portrait</h5>
                                                <h6 class="card-subtitle mb-3 text-primary fw-bold">₱6,500</h6>
                                                <p class="card-text"><strong>Includes:</strong></p>
                                                <ul class="list-unstyled small mb-3 flex-grow-1">
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>2-hour outdoor session</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>2 locations</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>3 outfit changes</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>30 edited photos</li>
                                                </ul>
                                                <div class="mt-auto">
                                                    <p class="card-text price-tag mb-1"><strong>Down Payment:</strong> ₱2,000</p>
                                                    <p class="card-text price-tag"><strong>Remaining Balance:</strong> ₱4,500</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Package C Card -->
                                    <div class="col-md-6 col-lg-4 mb-3">
                                        <div class="card h-100 service-card shadow-sm">
                                            <div class="card-body d-flex flex-column">
                                                <h5 class="card-title">Package C: Premium Portrait</h5>
                                                <h6 class="card-subtitle mb-3 text-primary fw-bold">₱9,500</h6>
                                                <p class="card-text"><strong>Includes:</strong></p>
                                                <ul class="list-unstyled small mb-3 flex-grow-1">
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>3-hour session (indoor + outdoor)</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>4 outfit changes</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>50 edited photos</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>Photo album</li>
                                                </ul>
                                                <div class="mt-auto">
                                                    <p class="card-text price-tag mb-1"><strong>Down Payment:</strong> ₱3,000</p>
                                                    <p class="card-text price-tag"><strong>Remaining Balance:</strong> ₱6,500</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="event-content" role="tabpanel" aria-labelledby="event-tab">
                             <div class="container-fluid py-3">
                                <div class="mb-4">
                                    <h3 class="mb-3" style="font-weight: 500;">Event Photography Services</h3>
                                    <p>Our event photography services cater to a wide range of occasions, from personal celebrations like birthdays to professional gatherings such as corporate events and alumni reunions. We focus on capturing the atmosphere, key moments, and important interactions that make your event unique.</p>

                                    <h4 class="mt-4 mb-2" style="font-size: 1.25rem; font-weight: 500;">Key Offerings Include:</h4>
                                    <ul class="list-unstyled">
                                        <li><i class="bi bi-cake2-fill text-primary me-2"></i><strong>Birthday Event Photography:</strong> Capturing the joy and highlights of birthday celebrations, from candid moments to cake cutting and group photos.</li>
                                        <li class="mt-1"><i class="bi bi-building-fill text-info me-2"></i><strong>Corporate or Alumni Event Photography:</strong> Professional coverage for reunions, alumni homecomings, conferences, or networking events, documenting speeches, awards, and candid interactions.</li>
                                    </ul>
                                </div>

                                <hr class="my-4">

                                <h3 class="mb-4" style="font-weight: 500;">Event Packages</h3>
                                <div class="row g-4">
                                    <!-- Package A Card -->
                                    <div class="col-md-6 col-lg-4 mb-3">
                                        <div class="card h-100 service-card shadow-sm">
                                            <div class="card-body d-flex flex-column">
                                                <h5 class="card-title">Package A: Birthday Event</h5>
                                                <h6 class="card-subtitle mb-3 text-primary fw-bold">₱8,000</h6>
                                                <p class="card-text"><strong>Includes:</strong></p>
                                                <ul class="list-unstyled small mb-3 flex-grow-1">
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>4 hours of event coverage</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>Candid shots</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>Cake cutting</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>Group photos</li>
                                                </ul>
                                                <div class="mt-auto">
                                                    <p class="card-text price-tag mb-1"><strong>Down Payment:</strong> ₱3,000</p>
                                                    <p class="card-text price-tag"><strong>Remaining Balance:</strong> ₱5,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Package B Card -->
                                    <div class="col-md-6 col-lg-4 mb-3">
                                        <div class="card h-100 service-card shadow-sm">
                                            <div class="card-body d-flex flex-column">
                                                <h5 class="card-title">Package B: Corporate/Alumni Event</h5>
                                                <h6 class="card-subtitle mb-3 text-primary fw-bold">₱12,000</h6>
                                                <p class="card-text"><strong>Includes:</strong></p>
                                                <ul class="list-unstyled small mb-3 flex-grow-1">
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>6 hours of event coverage</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>Speeches</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>Group shots</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>Candid moments</li>
                                                </ul>
                                                <div class="mt-auto">
                                                    <p class="card-text price-tag mb-1"><strong>Down Payment:</strong> ₱4,000</p>
                                                    <p class="card-text price-tag"><strong>Remaining Balance:</strong> ₱8,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Package C Card -->
                                    <div class="col-md-6 col-lg-4 mb-3">
                                        <div class="card h-100 service-card shadow-sm">
                                            <div class="card-body d-flex flex-column">
                                                <h5 class="card-title">Package C: Premium Event</h5>
                                                <h6 class="card-subtitle mb-3 text-primary fw-bold">₱18,000</h6>
                                                <p class="card-text"><strong>Includes:</strong></p>
                                                <ul class="list-unstyled small mb-3 flex-grow-1">
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>Full-day event coverage (8 hours)</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>Detailed documentation of activities</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>Group photos</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>Online gallery</li>
                                                </ul>
                                                <div class="mt-auto">
                                                    <p class="card-text price-tag mb-1"><strong>Down Payment:</strong> ₱6,000</p>
                                                    <p class="card-text price-tag"><strong>Remaining Balance:</strong> ₱12,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="school-milestone-content" role="tabpanel" aria-labelledby="school-milestone-tab">
                            <div class="container-fluid py-3">
                                <div class="mb-4">
                                    <h3 class="mb-3" style="font-weight: 500;">School & Milestone Photography Services</h3>
                                    <p>We commemorate significant life achievements and personal journeys, from academic milestones like graduations to precious new beginnings like maternity and newborn sessions. Our goal is to create beautiful, lasting records of these important moments.</p>

                                    <h4 class="mt-4 mb-2" style="font-size: 1.25rem; font-weight: 500;">Key Offerings Include:</h4>
                                    <ul class="list-unstyled">
                                        <li><i class="bi bi-mortarboard-fill text-primary me-2"></i><strong>Graduation Photography:</strong> Capturing the pride and accomplishment of graduation with individual or group portraits, as well as event coverage.</li>
                                        <li class="mt-1"><i class="bi bi-person-hearts text-danger me-2"></i><strong>Maternity Photography:</strong> Elegant and artistic photoshoots celebrating expectant mothers and the beauty of pregnancy.</li>
                                        <li class="mt-1"><i class="bi bi-balloon-heart-fill text-info me-2"></i><strong>Newborn Photography:</strong> Delicate and themed photoshoots for infants, typically within the first few weeks after birth, creating timeless keepsakes.</li>
                                    </ul>
                                </div>

                                <hr class="my-4">

                                <h3 class="mb-4" style="font-weight: 500;">School & Milestone Packages</h3>
                                <div class="row g-4">
                                    <!-- Package A Card -->
                                    <div class="col-md-6 col-lg-4 mb-3">
                                        <div class="card h-100 service-card shadow-sm">
                                            <div class="card-body d-flex flex-column">
                                                <h5 class="card-title">Package A: Graduation Portrait</h5>
                                                <h6 class="card-subtitle mb-3 text-primary fw-bold">₱5,500</h6>
                                                <p class="card-text"><strong>Includes:</strong></p>
                                                <ul class="list-unstyled small mb-3 flex-grow-1">
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>1-hour photoshoot</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>Individual portraits</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>Group shots (if applicable)</li>
                                                </ul>
                                                <div class="mt-auto">
                                                    <p class="card-text price-tag mb-1"><strong>Down Payment:</strong> ₱2,000</p>
                                                    <p class="card-text price-tag"><strong>Remaining Balance:</strong> ₱3,500</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Package B Card -->
                                    <div class="col-md-6 col-lg-4 mb-3">
                                        <div class="card h-100 service-card shadow-sm">
                                            <div class="card-body d-flex flex-column">
                                                <h5 class="card-title">Package B: Maternity Photoshoot</h5>
                                                <h6 class="card-subtitle mb-3 text-primary fw-bold">₱7,500</h6>
                                                <p class="card-text"><strong>Includes:</strong></p>
                                                <ul class="list-unstyled small mb-3 flex-grow-1">
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>2-hour session</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>Styled maternity poses</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>Partner shots (if desired)</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>30 edited photos</li>
                                                </ul>
                                                <div class="mt-auto">
                                                    <p class="card-text price-tag mb-1"><strong>Down Payment:</strong> ₱2,500</p>
                                                    <p class="card-text price-tag"><strong>Remaining Balance:</strong> ₱5,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Package C Card -->
                                    <div class="col-md-6 col-lg-4 mb-3">
                                        <div class="card h-100 service-card shadow-sm">
                                            <div class="card-body d-flex flex-column">
                                                <h5 class="card-title">Package C: Newborn Session</h5>
                                                <h6 class="card-subtitle mb-3 text-primary fw-bold">₱9,000</h6>
                                                <p class="card-text"><strong>Includes:</strong></p>
                                                <ul class="list-unstyled small mb-3 flex-grow-1">
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>3-hour photoshoot (allowing for baby's needs)</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>Baby portraits with props</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>Family shots (parents/siblings)</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>40 edited photos</li>
                                                </ul>
                                                <div class="mt-auto">
                                                    <p class="card-text price-tag mb-1"><strong>Down Payment:</strong> ₱3,000</p>
                                                    <p class="card-text price-tag"><strong>Remaining Balance:</strong> ₱6,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="cultural-lifestyle-content" role="tabpanel" aria-labelledby="cultural-lifestyle-tab">
                            <div class="container-fluid py-3">
                                <div class="mb-4">
                                    <h3 class="mb-3" style="font-weight: 500;">Cultural & Lifestyle Photography Services</h3>
                                    <p>Our Cultural and Lifestyle photography services aim to capture the essence of vibrant events, traditions, and personal style. We document the energy of festivals, the spectacle of parades, and the creative vision of fashion editorials.</p>

                                    <h4 class="mt-4 mb-2" style="font-size: 1.25rem; font-weight: 500;">Key Offerings Include:</h4>
                                    <ul class="list-unstyled">
                                        <li><i class="bi bi-flag-fill text-primary me-2"></i><strong>Festival and Parade Photography:</strong> Capturing the dynamic moments, colorful displays, and community spirit at cultural festivals, parades, and public celebrations.</li>
                                        <li class="mt-1"><i class="bi bi-palette-fill text-info me-2"></i><strong>Fashion Editorial Shoot:</strong> Creating stylized and artistic images for fashion campaigns, designer lookbooks, or magazine features, both on-location and in-studio.</li>
                                    </ul>
                                </div>

                                <hr class="my-4">

                                <h3 class="mb-4" style="font-weight: 500;">Cultural & Lifestyle Packages</h3>
                                <div class="row g-4">
                                    <!-- Package A Card -->
                                    <div class="col-md-6 col-lg-4 mb-3">
                                        <div class="card h-100 service-card shadow-sm">
                                            <div class="card-body d-flex flex-column">
                                                <h5 class="card-title">Package A: Festival Highlights</h5>
                                                <h6 class="card-subtitle mb-3 text-primary fw-bold">₱6,000</h6>
                                                <p class="card-text"><strong>Includes:</strong></p>
                                                <ul class="list-unstyled small mb-3 flex-grow-1">
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>4-hour event coverage</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>Candid crowd shots</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>Performance highlights</li>
                                                </ul>
                                                <div class="mt-auto">
                                                    <p class="card-text price-tag mb-1"><strong>Down Payment:</strong> ₱2,000</p>
                                                    <p class="card-text price-tag"><strong>Remaining Balance:</strong> ₱4,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Package B Card -->
                                    <div class="col-md-6 col-lg-4 mb-3">
                                        <div class="card h-100 service-card shadow-sm">
                                            <div class="card-body d-flex flex-column">
                                                <h5 class="card-title">Package B: Parade Coverage</h5>
                                                <h6 class="card-subtitle mb-3 text-primary fw-bold">₱8,500</h6>
                                                <p class="card-text"><strong>Includes:</strong></p>
                                                <ul class="list-unstyled small mb-3 flex-grow-1">
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>Full-day parade & performance documentation</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>Group shots</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>Candid moments</li>
                                                </ul>
                                                <div class="mt-auto">
                                                    <p class="card-text price-tag mb-1"><strong>Down Payment:</strong> ₱3,000</p>
                                                    <p class="card-text price-tag"><strong>Remaining Balance:</strong> ₱5,500</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Package C Card -->
                                    <div class="col-md-6 col-lg-4 mb-3">
                                        <div class="card h-100 service-card shadow-sm">
                                            <div class="card-body d-flex flex-column">
                                                <h5 class="card-title">Package C: Fashion Editorial</h5>
                                                <h6 class="card-subtitle mb-3 text-primary fw-bold">₱15,000</h6>
                                                <p class="card-text"><strong>Includes:</strong></p>
                                                <ul class="list-unstyled small mb-3 flex-grow-1">
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>Full-day stylized shoot (indoors or on-location)</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>5 outfit changes</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>100 edited photos</li>
                                                    <li><i class="bi bi-check-circle-fill text-success me-1"></i>Editorial album</li>
                                                </ul>
                                                <div class="mt-auto">
                                                    <p class="card-text price-tag mb-1"><strong>Down Payment:</strong> ₱5,000</p>
                                                    <p class="card-text price-tag"><strong>Remaining Balance:</strong> ₱10,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- Sessions Page Content End -->

                      <!-- Add Package/Service Modal -->
                      <div class="modal fade" id="addPackageModal" tabindex="-1" aria-labelledby="addPackageModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content bg-white text-dark">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addPackageModalLabel">Add New Service Package</h5> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form id="addserviceform">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="addServiceImage" class="form-label">Image (Optional)</label>
                                    <input type="file" name="image_file" class="form-control bg-white text-dark" id="addServiceImage" accept="image/*">
                                </div>
                                <div class="mb-3">
                                    <label for="addServiceName" class="form-label">Service Name <span class="text-danger">*</span></label>
                                    <select name="services_name" class="form-select bg-white text-dark" id="addServiceName" required>
                                        <option value="" selected disabled>Select Service Type</option>
                                        <option value="Wedding">Wedding</option>
                                        <option value="Portrait">Portrait</option>
                                        <option value="Event">Event</option>
                                        <option value="School & Milestone">School & Milestone</option>
                                        <option value="Cultural & Lifestyle">Cultural & Lifestyle</option>
                                        <option value="Family">Family</option>
                                        <option value="Birthday">Birthday</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="addPackageName" class="form-label">Package Name <span class="text-danger">*</span></label>
                                    <input type="text" name="package_name" class="form-control bg-white text-dark " id="addPackageName" placeholder="e.g., Gold Package, Basic Shoot" required>
                                </div>

                                <!-- START: New Package Level Dropdown -->
                                <div class="mb-3">
                                    <label for="addPackageLevel" class="form-label">Package Level <span class="text-danger">*</span></label>
                                    <select name="package_level" class="form-select bg-white text-dark" id="addPackageLevel" required>
                                        <option value="" selected disabled>Select Package Level</option>
                                        <option value="Basic">Basic</option>
                                        <option value="Standard">Standard</option>
                                        <option value="Premium">Premium</option>
                                        <option value="Deluxe">Deluxe</option>
                                        <option value="Custom">Custom</option>
                                        <!-- Add more predefined levels or consider allowing users to type if 'Custom' is selected -->
                                    </select>
                                </div>
                                <!-- END: New Package Level Dropdown -->

                                <div class="mb-3">
                                    <label for="addDescription" class="form-label">Description</label>
                                    <textarea class="form-control bg-white text-dark " name="description" id="addDescription" rows="3" placeholder="Detailed description of the service package..."></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="addDownPayment" class="form-label">Down Payment <span class="text-danger">*</span></label>
                                        <input type="number" name="downpayment" class="form-control bg-white text-dark " id="addDownPayment" placeholder="0.00" step="0.01" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="addFullPayment" class="form-label">Full Payment (Total Price) <span class="text-danger">*</span></label>
                                        <input type="number" name="fullpayment" class="form-control bg-white text-dark " id="addFullPayment" placeholder="0.00" step="0.01" required>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save Package</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Edit Package/Service Modal -->
            <div class="modal fade" id="editPackageModal" tabindex="-1" aria-labelledby="editPackageModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content bg-white text-dark"> <!-- Changed to bg-white for consistency -->
                        <div class="modal-header">
                            <h5 class="modal-title" id="editPackageModalLabel">Edit Service Package</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form id="editform">
                            <div class="modal-body">
                                <input type="hidden" id="editPackageId" name="packageID">
                                <div class="mb-3 text-center">
                                    <img src="<!-- Placeholder will be set by JS -->" id="currentServiceImagePreview" alt="Current Service Image" class="rounded mb-2" style="width: 150px; height: 150px; object-fit: cover; display: none;">
                                    <label for="editServiceImage" class="form-label">New Image (Optional, backend might store it)</label>
                                    <input type="file" name="image_file" class="form-control bg-white text-dark" id="editServiceImage" accept="image/*">
                                </div>
                                <div class="mb-3">
                                     <label for="editServiceName" class="form-label">Service Name <span class="text-danger">*</span></label>
                                    <select name="services_name" class="form-select bg-white text-dark" id="editServiceName" required>
                                        <option value="" disabled>Select Service Type</option>
                                        <option value="Wedding">Wedding</option>
                                        <option value="Portrait">Portrait</option>
                                        <option value="Event">Event</option>
                                        <option value="School & Milestone">School & Milestone</option>
                                        <option value="Cultural & Lifestyle">Cultural & Lifestyle</option>
                                        <option value="Family">Family</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="editPackageName" class="form-label">Package Name <span class="text-danger">*</span></label>
                                    <input type="text" name="package_name" class="form-control bg-white text-dark" id="editPackageName" placeholder="e.g., Gold Package" required>
                                </div>
                                <div class="mb-3">
                                    <label for="editDescription" class="form-label">Description</label>
                                    <textarea class="form-control bg-white text-dark" name="description" id="editDescription" rows="3" placeholder="Detailed description of the service package..."></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="editDownPayment" class="form-label">Down Payment <span class="text-danger">*</span></label>
                                        <input type="number" name="downpayment" class="form-control bg-white text-dark" id="editDownPayment" placeholder="0.00" step="0.01" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="editFullPayment" class="form-label">Full Payment (Total Price) <span class="text-danger">*</span></label>
                                        <input type="number" name="fullpayment" class="form-control bg-white text-dark" id="editFullPayment" placeholder="0.00" step="0.01" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="editDateModified" class="form-label">Date Modified</label>
                                    <input type="text" class="form-control bg-light text-dark border-0" id="editDateModified" readonly>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Update Package</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Delete Package Modal -->
            <div class="modal fade" id="deletePackageModal" tabindex="-1" aria-labelledby="deletePackageModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content bg-white text-dark"> <!-- Changed to bg-white -->
                        <div class="modal-header">
                            <h5 class="modal-title" id="deletePackageModalLabel">Confirm Deletion</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to delete this service package? This action cannot be undone.</p>
                            <input type="hidden" id="deletePackageId">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- DataTables (kept for other potential tables/tabs, remove if not used anywhere) -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="<?=assets()?>/lib/chart/chart.min.js"></script>
    <script src="<?=assets()?>/lib/easing/easing.min.js"></script>
    <script src="<?=assets()?>/lib/waypoints/waypoints.min.js"></script>
    <script src="<?=assets()?>/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?=assets()?>/lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?=assets()?>/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?=assets()?>/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?=assets()?>/js/main.js"></script>

    <script>
    // Hardcoded base path to your assets directory.
    // This assumes your web server root points to the 'PHOTOGRAP' directory.
    const assetsBasePath = "http://localhost/PHOTOGRAP/_frontend/assets";

    // Mock for mypost function
    async function mypost(endpoint, data, isFormData = false) {
        const url = endpoint;
        if (endpoint === "api/service_handler.php") { // Mocking this endpoint
            if (typeof mypost.mockData === 'undefined') {
                mypost.mockData = [
                    { packageID: '1', services_name: 'Wedding', packagename: 'Golden Hour Package', description: 'Full day wedding coverage with album and prints. Captures every magical moment.', downpayment: '500.00', fullpayment: '2500.00', date_modified: '2023-10-26 10:00:00', image_path: null },
                    { packageID: '2', services_name: 'Portrait', packagename: 'Lifestyle Portrait Session', description: '1-hour portrait session in a natural setting, 20 beautifully edited images.', downpayment: '50.00', fullpayment: '200.00', date_modified: '2023-10-27 11:00:00', image_path: null },
                    { packageID: '3', services_name: 'Event', packagename: 'Corporate Conference', description: 'Professional coverage for corporate events, conferences, and galas. Per hour billing available.', downpayment: '100.00', fullpayment: '400.00', date_modified: '2023-10-28 12:00:00', image_path: null },
                    { packageID: '4', services_name: 'Family', packagename: 'Family Fun Package', description: 'A fun and relaxed family photoshoot, perfect for creating lasting memories. Includes digital images.', downpayment: '75.00', fullpayment: '300.00', date_modified: '2023-11-01 09:00:00', image_path: null },
                    { packageID: '5', services_name: 'School & Milestone', packagename: 'Graduation Day Special', description: 'Capture the pride and joy of graduation day with our special milestone package.', downpayment: '60.00', fullpayment: '250.00', date_modified: '2023-11-02 10:00:00', image_path: null },
                    { packageID: '6', services_name: 'Cultural & Lifestyle', packagename: 'Street Fest Vibes', description: 'Vibrant coverage of street festivals and cultural events, capturing the energy and atmosphere.', downpayment: '80.00', fullpayment: '350.00', date_modified: '2023-11-03 11:00:00', image_path: null },
                    { packageID: '7', services_name: 'Birthday', packagename: 'Birthday Bash Capture', description: 'Memorable photos of your special birthday celebration.', downpayment: '40.00', fullpayment: '150.00', date_modified: '2023-11-04 12:00:00', image_path: null },
                ];
            }
            let action; let payload;
            if (isFormData) {
                action = data.get('action'); payload = {};
                for(let pair of data.entries()) { payload[pair[0]] = pair[1]; }
            } else { action = data.action; payload = data; }

            switch (action) {
                case 'add':
                    const newId = 'mock_' + Date.now();
                    const newService = { packageID: newId, ...payload, date_modified: new Date().toISOString() };
                    delete newService.image_file;
                    mypost.mockData.push(newService);
                    return { backend: { code: 200, status: 'success', message: "Service added (mock).", first_row: newService } };
                case 'update':
                    const index = mypost.mockData.findIndex(s => s.packageID === payload.packageID);
                    if (index > -1) {
                        mypost.mockData[index] = { ...mypost.mockData[index], ...payload, date_modified: new Date().toISOString() };
                        delete mypost.mockData[index].image_file;
                        return { backend: { code: 200, status: 'success', message: "Service updated (mock).", first_row: mypost.mockData[index] } };
                    }
                    return { backend: { code: 404, status: 'error', message: "Service not found (mock)." } };
                case 'delete':
                    mypost.mockData = mypost.mockData.filter(s => s.packageID !== payload.id);
                    return { backend: { code: 200, status: 'success', message: "Service deleted (mock)." } };
                case 'get':
                    const service = mypost.mockData.find(s => s.packageID === payload.id);
                    return service ? { backend: { code: 200, status: 'success', first_row: service } } : { backend: { code: 404, status: 'error', message: "Service not found (mock)." } };
                case 'display':
                    let servicesToDisplay = payload.search ? mypost.mockData.filter(s => Object.values(s).some(val => String(val).toLowerCase().includes(payload.search.toLowerCase()))) : mypost.mockData;
                    return { backend: { code: 200, status: 'success', data: servicesToDisplay } };
                default: return { backend: { code: 400, status: 'error', message: "Invalid action (mock)." } };
            }
        }
        // Fallback for non-mocked endpoints (requires actual backend)
        console.warn("Attempting real fetch to an unmocked endpoint:", url);
        try {
            const options = { method: 'POST' };
            if (isFormData) { options.body = data; }
            else { options.headers = { 'Content-Type': 'application/json' }; options.body = JSON.stringify(data); }
            const response = await fetch(url, options);
            if (!response.ok) { throw new Error(`HTTP error! status: ${response.status}`); }
            const responseData = await response.json();
            return { backend: responseData };
        } catch (error) {
            console.error("mypost error:", error);
            return { backend: { code: 500, message: error.message || "Network or server error", data: [], first_row: {} } };
        }
    }

    function on_submit(selector, callback) { $(selector).on('submit', callback); }
    function on_load(callback) { $(document).ready(callback); }

    // Helper function to get a LOCAL STATIC placeholder image URL
    function getStaticServiceImageUrl(serviceName) {
        let imageName = "default_service.jpg"; // Ensure 'default_service.jpg' exists in your img folder
        switch (String(serviceName).toLowerCase()) { // Normalize serviceName
            case "wedding": imageName = "wed.jpg"; break;
            case "portrait": imageName = "port.jpg"; break;
            case "event": imageName = "ev.jpg"; break;
            case "school & milestone": imageName = "gra.jpg"; break;
            case "family": imageName = "homeimage.jpg"; break;
            case "cultural & lifestyle": imageName = "fes.jpg"; break;
            case "birthday": imageName = "birthday.jpg"; break;
        }
        return `${assetsBasePath}/img/${imageName}`; // Uses hardcoded assetsBasePath + /img/ + imageName
    }

    async function reload_data() {
        await displayAllServices($('#serviceSearchInput').val());
    }

    // --- CRUD Operations Handlers ---
    on_submit("#addserviceform", async function(event) {
        event.preventDefault();
        const formData = new FormData(this);
        formData.append('action', 'add');
        const $api = await mypost("api/service_handler.php", formData, true);
        const $response = $api.backend;
        if ($response.code == 200) {
            Swal.fire({ title: "Success", text: $response.message || "Service added", icon: "success", timer: 1500, showConfirmButton: false })
            .then(() => { $('#addPackageModal').modal('hide'); this.reset(); reload_data(); });
        } else { Swal.fire({ title: "Error", text: $response.message || "Error adding service", icon: "error" }); }
    });

    function openDeleteModal(id) {
        $('#deletePackageId').val(id);
        $('#deletePackageModal').modal('show');
    }

    $('#confirmDeleteBtn').on('click', async function() {
        const id = $('#deletePackageId').val();
        if (!id) return;
        const $api = await mypost("api/service_handler.php", { action: 'delete', id: id });
        const $response = $api.backend;
        if ($response.code == 200) {
            Swal.fire({ title: "Success", text: $response.message || "Service deleted", icon: "success", timer: 1500, showConfirmButton: false })
            .then(() => { $('#deletePackageModal').modal('hide'); reload_data(); });
        } else { Swal.fire({ title: "Error", text: $response.message || "Error deleting service", icon: "error" });}
    });

    async function openEditModal(id) {
        const $api = await mypost("api/service_handler.php", { action: 'get', id: id });
        const $backend = $api.backend;
        if ($backend.code == 200 && $backend.first_row) {
            const $column = $backend.first_row;
            $('#editPackageId').val(id);
            $('#editServiceName').val($column.services_name);
            $('#editPackageName').val($column.packagename);
            $('#editDescription').val($column.description);
            $('#editDownPayment').val(parseFloat($column.downpayment).toFixed(2));
            $('#editFullPayment').val(parseFloat($column.fullpayment).toFixed(2));
            $('#editDateModified').val($column.date_modified ? new Date($column.date_modified).toLocaleString() : 'N/A');
            let previewImageSrc = getStaticServiceImageUrl($column.services_name);
            $('#currentServiceImagePreview').attr('src', previewImageSrc).show();
            $('#editServiceImage').val('');
            $('#editPackageModal').modal("show");
        } else { Swal.fire("Error", "Could not fetch details: " + ($backend.message || "Unknown error"), "error"); }
    }

    on_submit("#editform", async function(event) {
        event.preventDefault();
        const formData = new FormData(this);
        formData.append('action', 'update');
        const $api = await mypost("api/service_handler.php", formData, true);
        const $response = $api.backend;
        if ($response.code == 200) {
            Swal.fire({ title: "Success", text: $response.message || "Service updated", icon: "success", timer: 1500, showConfirmButton: false })
            .then(() => { $('#editPackageModal').modal('hide'); reload_data(); });
        } else { Swal.fire({ title: "Error", text: $response.message || "Error updating service", icon: "error" }); }
    });

    async function displayAllServices(searchTerm = '') {
        const $container = $('#allServicesContainer');
        const $countDisplay = $('#allServicesCount');
        const $noServicesMessage = $('#noServicesMessage');
        $container.empty(); $noServicesMessage.hide();

        const $api = await mypost("api/service_handler.php", { action: 'display', search: searchTerm });
        const $backend = $api.backend;

        if ($backend.code == 200 && $backend.data) {
            let $data = $backend.data;
            if ($data.length > 0) {
                $data.forEach(column => {
                    let dateModified = column.date_modified ? new Date(column.date_modified).toLocaleDateString() : "N/A";
                    let description = column.description ? (column.description.length > 100 ? column.description.substring(0, 97) + '...' : column.description) : "No description.";
                    let imageSrc = getStaticServiceImageUrl(column.services_name);
                    
                    // console.log(`Service: ${column.services_name}, Image URL: ${imageSrc}`); // For Debugging

                    const cardHtml = `
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                            <div class="card h-100 service-card shadow-sm">
                                <img src="${imageSrc}" class="card-img-top" alt="${column.services_name || ''} - ${column.packagename || ''}" onerror="this.onerror=null; this.src='${assetsBasePath}/img/default_service.jpg'; console.error('Failed to load image: ${imageSrc}, falling back to default for ${column.services_name}.');">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">${column.services_name || 'N/A'} - ${column.packagename || 'N/A'}</h5>
                                    <p class="card-text flex-grow-1"><small class="text-muted">${description}</small></p>
                                    <div class="mt-auto">
                                        <p class="card-text price-tag mb-1"><strong>Down:</strong> $${parseFloat(column.downpayment || 0).toFixed(2)}</p>
                                        <p class="card-text price-tag"><strong>Total:</strong> $${parseFloat(column.fullpayment || 0).toFixed(2)}</p>
                                    </div>
                                </div>
                                <div class="card-footer d-flex justify-content-between align-items-center">
                                    <small class="text-muted">Updated: ${dateModified}</small>
                                    <div class="card-actions">
                                        <button class="btn btn-sm btn-outline-danger me-1" onclick="openDeleteModal('${column.packageID}')" title="Delete"><i class="bi bi-trash"></i></button>
                                        <button class="btn btn-sm btn-outline-primary" onclick="openEditModal('${column.packageID}')" title="Edit"><i class="bi bi-pencil-square"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>`;
                    $container.append(cardHtml);
                });
                $countDisplay.text(`Displaying ${$data.length} service(s).`);
            } else { $noServicesMessage.show(); $countDisplay.text('0 services found.'); }
        } else {
            Swal.fire("Error", "Could not display services: " + ($backend.message || "Unknown error"), "error");
            $noServicesMessage.find('p').text('Could not load services. Please try again.');
            $noServicesMessage.show(); $countDisplay.text('');
        }
    }

    $('#serviceSearchInput').on('keyup', function() { displayAllServices($(this).val()); });
    on_load(async function() { await displayAllServices(); });
    </script>
</body>
</html>
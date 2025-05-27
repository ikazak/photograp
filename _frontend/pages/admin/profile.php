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

            <!-- Button to Open Modal for Adding New Photographer -->
            <div class="p-4 text-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPhotographerModal">
                    <i class="fas fa-plus"></i> Add Photographer
                </button>
            </div>

            <h1 class="text-center text-uppercase fw-bold border-bottom pb-2 mb-4 text-secondary">
                List of Photographer
            </h1>


            <!-- Card Section Start (STATIC EXAMPLE - 8 Cards, 4 per row on LG) -->
            <div class="container-fluid pt-4 px-4">
                <div class="row" id="photographerCardRow">

                    <!-- STATIC PHOTOGRAPHER CARD EXAMPLE 1 -->
                    <?php
                        // Example static data
                        $static_photographer_id = "101";
                        $static_photographer_fname = "Jane";
                        $static_photographer_lname = "Doe";
                        $static_full_name = trim($static_photographer_fname . ' ' . $static_photographer_lname);
                        $static_type_of_photographer = "Portrait Specialist";
                        $static_photographer_age = "28";
                        $static_photographer_email = "jane.doe@example.com";
                        $static_skills = "Studio Lighting, Photoshop Retouching, Candid Shots";
                        $static_description = "Passionate portrait photographer with 5 years of experience. Loves capturing unique personalities.";
                        $static_image_url = assets() . '/img/weddjpg.jpg'; // Assuming assets() returns a valid path
                        $static_profile_link = "#profile-link-jane";
                    ?>
                    <div class="col-lg-3 col-md-6 mb-4 photographer-card"
                         data-id="<?= htmlspecialchars($static_photographer_id) ?>"
                         data-fname="<?= htmlspecialchars($static_photographer_fname) ?>"
                         data-lname="<?= htmlspecialchars($static_photographer_lname) ?>"
                         data-type="<?= htmlspecialchars($static_type_of_photographer) ?>"
                         data-age="<?= htmlspecialchars($static_photographer_age) ?>"
                         data-email="<?= htmlspecialchars($static_photographer_email) ?>"
                         data-skills="<?= htmlspecialchars($static_skills) ?>"
                         data-description="<?= htmlspecialchars($static_description) ?>"
                         data-image-url="<?= htmlspecialchars($static_image_url) ?>"
                         >
                        <div class="card h-100">
                            <div class="card-body text-center p-4 d-flex flex-column">
                                <img src="<?= htmlspecialchars($static_image_url) ?>"
                                     alt="Photographer <?= htmlspecialchars($static_full_name) ?>"
                                     class="rounded-circle mb-3 mx-auto photographer-image"
                                     style="width: 100px; height: 100px; object-fit: cover;">
                                <h5 class="card-title mb-2 photographer-name"><?= htmlspecialchars($static_full_name) ?></h5>
                                <p class="card-text text-muted photographer-type"><em><?= htmlspecialchars($static_type_of_photographer) ?></em></p>
                                <p class="card-text text-muted small photographer-skills">Skills: <?= htmlspecialchars($static_skills) ?></p>
                                <div class="mt-auto">
                                    <a href="<?= htmlspecialchars($static_profile_link) ?>" class="btn btn-sm btn-outline-primary photographer-profile-link">Profile</a>
                                    <button type="button" class="btn btn-sm btn-info btn-edit-photographer" data-bs-toggle="modal" data-bs-target="#editPhotographerModal">
                                        <i class="fas fa-edit"></i> Edit
                                    </button>
                                    <button type="button" class="btn btn-sm btn-danger btn-delete-photographer" data-bs-toggle="modal" data-bs-target="#deletePhotographerModal">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END OF STATIC PHOTOGRAPHER CARD EXAMPLE 1 -->

                    <!-- STATIC PHOTOGRAPHER CARD EXAMPLE 2 -->
                    <?php
                        $static_photographer_id_2 = "102";
                        $static_photographer_fname_2 = "Alex";
                        $static_photographer_lname_2 = "Smith";
                        $static_full_name_2 = trim($static_photographer_fname_2 . ' ' . $static_photographer_lname_2);
                        $static_type_of_photographer_2 = "Events & Wedding";
                        $static_photographer_age_2 = "35";
                        $static_photographer_email_2 = "alex.smith@example.com";
                        $static_skills_2 = "Photojournalism, Low-light, Drone Photography";
                        $static_description_2 = "Capturing the energy and emotion of your special events.";
                        // Re-using image for simplicity in static example
                        $static_image_url_2 = assets() . '/img/user.jpg';
                        $static_profile_link_2 = "#profile-link-alex";
                    ?>
                    <div class="col-lg-3 col-md-6 mb-4 photographer-card"
                         data-id="<?= htmlspecialchars($static_photographer_id_2) ?>"
                         data-fname="<?= htmlspecialchars($static_photographer_fname_2) ?>"
                         data-lname="<?= htmlspecialchars($static_photographer_lname_2) ?>"
                         data-type="<?= htmlspecialchars($static_type_of_photographer_2) ?>"
                         data-age="<?= htmlspecialchars($static_photographer_age_2) ?>"
                         data-email="<?= htmlspecialchars($static_photographer_email_2) ?>"
                         data-skills="<?= htmlspecialchars($static_skills_2) ?>"
                         data-description="<?= htmlspecialchars($static_description_2) ?>"
                         data-image-url="<?= htmlspecialchars($static_image_url_2) ?>"
                         >
                        <div class="card h-100">
                            <div class="card-body text-center p-4 d-flex flex-column">
                                <img src="<?= htmlspecialchars($static_image_url_2) ?>"
                                     alt="Photographer <?= htmlspecialchars($static_full_name_2) ?>"
                                     class="rounded-circle mb-3 mx-auto photographer-image"
                                     style="width: 100px; height: 100px; object-fit: cover;">
                                <h5 class="card-title mb-2 photographer-name"><?= htmlspecialchars($static_full_name_2) ?></h5>
                                <p class="card-text text-muted photographer-type"><em><?= htmlspecialchars($static_type_of_photographer_2) ?></em></p>
                                <p class="card-text text-muted small photographer-skills">Skills: <?= htmlspecialchars($static_skills_2) ?></p>
                                <div class="mt-auto">
                                    <a href="<?= htmlspecialchars($static_profile_link_2) ?>" class="btn btn-sm btn-outline-primary photographer-profile-link">Profile</a>
                                    <button type="button" class="btn btn-sm btn-info btn-edit-photographer" data-bs-toggle="modal" data-bs-target="#editPhotographerModal">
                                        <i class="fas fa-edit"></i> Edit
                                    </button>
                                    <button type="button" class="btn btn-sm btn-danger btn-delete-photographer" data-bs-toggle="modal" data-bs-target="#deletePhotographerModal">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END OF STATIC PHOTOGRAPHER CARD EXAMPLE 2 -->

                    <!-- STATIC PHOTOGRAPHER CARD EXAMPLE 3 -->
                    <?php
                        $static_photographer_id_3 = "103";
                        $static_photographer_fname_3 = "Michael";
                        $static_photographer_lname_3 = "Brown";
                        $static_full_name_3 = trim($static_photographer_fname_3 . ' ' . $static_photographer_lname_3);
                        $static_type_of_photographer_3 = "Landscape & Nature";
                        $static_photographer_age_3 = "42";
                        $static_photographer_email_3 = "michael.brown@example.com";
                        $static_skills_3 = "Wide Angle, Golden Hour, Post-Processing";
                        $static_description_3 = "Exploring the beauty of the natural world through my lens.";
                        $static_image_url_3 = assets() . '/img/user.jpg';
                        $static_profile_link_3 = "#profile-link-michael";
                    ?>
                    <div class="col-lg-3 col-md-6 mb-4 photographer-card"
                         data-id="<?= htmlspecialchars($static_photographer_id_3) ?>"
                         data-fname="<?= htmlspecialchars($static_photographer_fname_3) ?>"
                         data-lname="<?= htmlspecialchars($static_photographer_lname_3) ?>"
                         data-type="<?= htmlspecialchars($static_type_of_photographer_3) ?>"
                         data-age="<?= htmlspecialchars($static_photographer_age_3) ?>"
                         data-email="<?= htmlspecialchars($static_photographer_email_3) ?>"
                         data-skills="<?= htmlspecialchars($static_skills_3) ?>"
                         data-description="<?= htmlspecialchars($static_description_3) ?>"
                         data-image-url="<?= htmlspecialchars($static_image_url_3) ?>"
                         >
                        <div class="card h-100">
                            <div class="card-body text-center p-4 d-flex flex-column">
                                <img src="<?= htmlspecialchars($static_image_url_3) ?>"
                                     alt="Photographer <?= htmlspecialchars($static_full_name_3) ?>"
                                     class="rounded-circle mb-3 mx-auto photographer-image"
                                     style="width: 100px; height: 100px; object-fit: cover;">
                                <h5 class="card-title mb-2 photographer-name"><?= htmlspecialchars($static_full_name_3) ?></h5>
                                <p class="card-text text-muted photographer-type"><em><?= htmlspecialchars($static_type_of_photographer_3) ?></em></p>
                                <p class="card-text text-muted small photographer-skills">Skills: <?= htmlspecialchars($static_skills_3) ?></p>
                                <div class="mt-auto">
                                    <a href="<?= htmlspecialchars($static_profile_link_3) ?>" class="btn btn-sm btn-outline-primary photographer-profile-link">Profile</a>
                                    <button type="button" class="btn btn-sm btn-info btn-edit-photographer" data-bs-toggle="modal" data-bs-target="#editPhotographerModal">
                                        <i class="fas fa-edit"></i> Edit
                                    </button>
                                    <button type="button" class="btn btn-sm btn-danger btn-delete-photographer" data-bs-toggle="modal" data-bs-target="#deletePhotographerModal">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END OF STATIC PHOTOGRAPHER CARD EXAMPLE 3 -->

                    <!-- STATIC PHOTOGRAPHER CARD EXAMPLE 4 -->
                    <?php
                        $static_photographer_id_4 = "104";
                        $static_photographer_fname_4 = "Sarah";
                        $static_photographer_lname_4 = "Davis";
                        $static_full_name_4 = trim($static_photographer_fname_4 . ' ' . $static_photographer_lname_4);
                        $static_type_of_photographer_4 = "Fashion Photographer";
                        $static_photographer_age_4 = "31";
                        $static_photographer_email_4 = "sarah.davis@example.com";
                        $static_skills_4 = "Editorial, Runway, On-Location Shoots";
                        $static_description_4 = "Bringing creative visions to life in the fashion industry.";
                        $static_image_url_4 = assets() . '/img/user.jpg';
                        $static_profile_link_4 = "#profile-link-sarah";
                    ?>
                    <div class="col-lg-3 col-md-6 mb-4 photographer-card"
                         data-id="<?= htmlspecialchars($static_photographer_id_4) ?>"
                         data-fname="<?= htmlspecialchars($static_photographer_fname_4) ?>"
                         data-lname="<?= htmlspecialchars($static_photographer_lname_4) ?>"
                         data-type="<?= htmlspecialchars($static_type_of_photographer_4) ?>"
                         data-age="<?= htmlspecialchars($static_photographer_age_4) ?>"
                         data-email="<?= htmlspecialchars($static_photographer_email_4) ?>"
                         data-skills="<?= htmlspecialchars($static_skills_4) ?>"
                         data-description="<?= htmlspecialchars($static_description_4) ?>"
                         data-image-url="<?= htmlspecialchars($static_image_url_4) ?>"
                         >
                        <div class="card h-100">
                            <div class="card-body text-center p-4 d-flex flex-column">
                                <img src="<?= htmlspecialchars($static_image_url_4) ?>"
                                     alt="Photographer <?= htmlspecialchars($static_full_name_4) ?>"
                                     class="rounded-circle mb-3 mx-auto photographer-image"
                                     style="width: 100px; height: 100px; object-fit: cover;">
                                <h5 class="card-title mb-2 photographer-name"><?= htmlspecialchars($static_full_name_4) ?></h5>
                                <p class="card-text text-muted photographer-type"><em><?= htmlspecialchars($static_type_of_photographer_4) ?></em></p>
                                <p class="card-text text-muted small photographer-skills">Skills: <?= htmlspecialchars($static_skills_4) ?></p>
                                <div class="mt-auto">
                                    <a href="<?= htmlspecialchars($static_profile_link_4) ?>" class="btn btn-sm btn-outline-primary photographer-profile-link">Profile</a>
                                    <button type="button" class="btn btn-sm btn-info btn-edit-photographer" data-bs-toggle="modal" data-bs-target="#editPhotographerModal">
                                        <i class="fas fa-edit"></i> Edit
                                    </button>
                                    <button type="button" class="btn btn-sm btn-danger btn-delete-photographer" data-bs-toggle="modal" data-bs-target="#deletePhotographerModal">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END OF STATIC PHOTOGRAPHER CARD EXAMPLE 4 -->

                    <!-- STATIC PHOTOGRAPHER CARD EXAMPLE 5 -->
                    <?php
                        $static_photographer_id_5 = "105";
                        $static_photographer_fname_5 = "Chris";
                        $static_photographer_lname_5 = "Lee";
                        $static_full_name_5 = trim($static_photographer_fname_5 . ' ' . $static_photographer_lname_5);
                        $static_type_of_photographer_5 = "Sports Photographer";
                        $static_photographer_age_5 = "38";
                        $static_photographer_email_5 = "chris.lee@example.com";
                        $static_skills_5 = "Action Shots, Fast Shutter, Telephoto Lens";
                        $static_description_5 = "Freezing moments of peak athletic performance.";
                        $static_image_url_5 = assets() . '/img/user.jpg';
                        $static_profile_link_5 = "#profile-link-chris";
                    ?>
                    <div class="col-lg-3 col-md-6 mb-4 photographer-card"
                         data-id="<?= htmlspecialchars($static_photographer_id_5) ?>"
                         data-fname="<?= htmlspecialchars($static_photographer_fname_5) ?>"
                         data-lname="<?= htmlspecialchars($static_photographer_lname_5) ?>"
                         data-type="<?= htmlspecialchars($static_type_of_photographer_5) ?>"
                         data-age="<?= htmlspecialchars($static_photographer_age_5) ?>"
                         data-email="<?= htmlspecialchars($static_photographer_email_5) ?>"
                         data-skills="<?= htmlspecialchars($static_skills_5) ?>"
                         data-description="<?= htmlspecialchars($static_description_5) ?>"
                         data-image-url="<?= htmlspecialchars($static_image_url_5) ?>"
                         >
                        <div class="card h-100">
                            <div class="card-body text-center p-4 d-flex flex-column">
                                <img src="<?= htmlspecialchars($static_image_url_5) ?>"
                                     alt="Photographer <?= htmlspecialchars($static_full_name_5) ?>"
                                     class="rounded-circle mb-3 mx-auto photographer-image"
                                     style="width: 100px; height: 100px; object-fit: cover;">
                                <h5 class="card-title mb-2 photographer-name"><?= htmlspecialchars($static_full_name_5) ?></h5>
                                <p class="card-text text-muted photographer-type"><em><?= htmlspecialchars($static_type_of_photographer_5) ?></em></p>
                                <p class="card-text text-muted small photographer-skills">Skills: <?= htmlspecialchars($static_skills_5) ?></p>
                                <div class="mt-auto">
                                    <a href="<?= htmlspecialchars($static_profile_link_5) ?>" class="btn btn-sm btn-outline-primary photographer-profile-link">Profile</a>
                                    <button type="button" class="btn btn-sm btn-info btn-edit-photographer" data-bs-toggle="modal" data-bs-target="#editPhotographerModal">
                                        <i class="fas fa-edit"></i> Edit
                                    </button>
                                    <button type="button" class="btn btn-sm btn-danger btn-delete-photographer" data-bs-toggle="modal" data-bs-target="#deletePhotographerModal">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END OF STATIC PHOTOGRAPHER CARD EXAMPLE 5 -->

                    <!-- STATIC PHOTOGRAPHER CARD EXAMPLE 6 -->
                    <?php
                        $static_photographer_id_6 = "106";
                        $static_photographer_fname_6 = "Olivia";
                        $static_photographer_lname_6 = "Wilson";
                        $static_full_name_6 = trim($static_photographer_fname_6 . ' ' . $static_photographer_lname_6);
                        $static_type_of_photographer_6 = "Product Photographer";
                        $static_photographer_age_6 = "29";
                        $static_photographer_email_6 = "olivia.wilson@example.com";
                        $static_skills_6 = "Macro, Lighting Control, E-commerce";
                        $static_description_6 = "Making products shine with high-quality imagery.";
                        $static_image_url_6 = assets() . '/img/user.jpg';
                        $static_profile_link_6 = "#profile-link-olivia";
                    ?>
                    <div class="col-lg-3 col-md-6 mb-4 photographer-card"
                         data-id="<?= htmlspecialchars($static_photographer_id_6) ?>"
                         data-fname="<?= htmlspecialchars($static_photographer_fname_6) ?>"
                         data-lname="<?= htmlspecialchars($static_photographer_lname_6) ?>"
                         data-type="<?= htmlspecialchars($static_type_of_photographer_6) ?>"
                         data-age="<?= htmlspecialchars($static_photographer_age_6) ?>"
                         data-email="<?= htmlspecialchars($static_photographer_email_6) ?>"
                         data-skills="<?= htmlspecialchars($static_skills_6) ?>"
                         data-description="<?= htmlspecialchars($static_description_6) ?>"
                         data-image-url="<?= htmlspecialchars($static_image_url_6) ?>"
                         >
                        <div class="card h-100">
                            <div class="card-body text-center p-4 d-flex flex-column">
                                <img src="<?= htmlspecialchars($static_image_url_6) ?>"
                                     alt="Photographer <?= htmlspecialchars($static_full_name_6) ?>"
                                     class="rounded-circle mb-3 mx-auto photographer-image"
                                     style="width: 100px; height: 100px; object-fit: cover;">
                                <h5 class="card-title mb-2 photographer-name"><?= htmlspecialchars($static_full_name_6) ?></h5>
                                <p class="card-text text-muted photographer-type"><em><?= htmlspecialchars($static_type_of_photographer_6) ?></em></p>
                                <p class="card-text text-muted small photographer-skills">Skills: <?= htmlspecialchars($static_skills_6) ?></p>
                                <div class="mt-auto">
                                    <a href="<?= htmlspecialchars($static_profile_link_6) ?>" class="btn btn-sm btn-outline-primary photographer-profile-link">Profile</a>
                                    <button type="button" class="btn btn-sm btn-info btn-edit-photographer" data-bs-toggle="modal" data-bs-target="#editPhotographerModal">
                                        <i class="fas fa-edit"></i> Edit
                                    </button>
                                    <button type="button" class="btn btn-sm btn-danger btn-delete-photographer" data-bs-toggle="modal" data-bs-target="#deletePhotographerModal">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END OF STATIC PHOTOGRAPHER CARD EXAMPLE 6 -->

                    <!-- STATIC PHOTOGRAPHER CARD EXAMPLE 7 -->
                    <?php
                        $static_photographer_id_7 = "107";
                        $static_photographer_fname_7 = "David";
                        $static_photographer_lname_7 = "Miller";
                        $static_full_name_7 = trim($static_photographer_fname_7 . ' ' . $static_photographer_lname_7);
                        $static_type_of_photographer_7 = "Architectural";
                        $static_photographer_age_7 = "45";
                        $static_photographer_email_7 = "david.miller@example.com";
                        $static_skills_7 = "Tilt-Shift, HDR, Interior & Exterior";
                        $static_description_7 = "Capturing the art and design of built environments.";
                        $static_image_url_7 = assets() . '/img/user.jpg';
                        $static_profile_link_7 = "#profile-link-david";
                    ?>
                    <div class="col-lg-3 col-md-6 mb-4 photographer-card"
                         data-id="<?= htmlspecialchars($static_photographer_id_7) ?>"
                         data-fname="<?= htmlspecialchars($static_photographer_fname_7) ?>"
                         data-lname="<?= htmlspecialchars($static_photographer_lname_7) ?>"
                         data-type="<?= htmlspecialchars($static_type_of_photographer_7) ?>"
                         data-age="<?= htmlspecialchars($static_photographer_age_7) ?>"
                         data-email="<?= htmlspecialchars($static_photographer_email_7) ?>"
                         data-skills="<?= htmlspecialchars($static_skills_7) ?>"
                         data-description="<?= htmlspecialchars($static_description_7) ?>"
                         data-image-url="<?= htmlspecialchars($static_image_url_7) ?>"
                         >
                        <div class="card h-100">
                            <div class="card-body text-center p-4 d-flex flex-column">
                                <img src="<?= htmlspecialchars($static_image_url_7) ?>"
                                     alt="Photographer <?= htmlspecialchars($static_full_name_7) ?>"
                                     class="rounded-circle mb-3 mx-auto photographer-image"
                                     style="width: 100px; height: 100px; object-fit: cover;">
                                <h5 class="card-title mb-2 photographer-name"><?= htmlspecialchars($static_full_name_7) ?></h5>
                                <p class="card-text text-muted photographer-type"><em><?= htmlspecialchars($static_type_of_photographer_7) ?></em></p>
                                <p class="card-text text-muted small photographer-skills">Skills: <?= htmlspecialchars($static_skills_7) ?></p>
                                <div class="mt-auto">
                                    <a href="<?= htmlspecialchars($static_profile_link_7) ?>" class="btn btn-sm btn-outline-primary photographer-profile-link">Profile</a>
                                    <button type="button" class="btn btn-sm btn-info btn-edit-photographer" data-bs-toggle="modal" data-bs-target="#editPhotographerModal">
                                        <i class="fas fa-edit"></i> Edit
                                    </button>
                                    <button type="button" class="btn btn-sm btn-danger btn-delete-photographer" data-bs-toggle="modal" data-bs-target="#deletePhotographerModal">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END OF STATIC PHOTOGRAPHER CARD EXAMPLE 7 -->

                    <!-- STATIC PHOTOGRAPHER CARD EXAMPLE 8 -->
                    <?php
                        $static_photographer_id_8 = "108";
                        $static_photographer_fname_8 = "Emily";
                        $static_photographer_lname_8 = "Garcia";
                        $static_full_name_8 = trim($static_photographer_fname_8 . ' ' . $static_photographer_lname_8);
                        $static_type_of_photographer_8 = "Food Photographer";
                        $static_photographer_age_8 = "33";
                        $static_photographer_email_8 = "emily.garcia@example.com";
                        $static_skills_8 = "Food Styling, Natural Light, Close-ups";
                        $static_description_8 = "Making culinary creations look irresistible.";
                        $static_image_url_8 = assets() . '/img/user.jpg';
                        $static_profile_link_8 = "#profile-link-emily";
                    ?>
                    <div class="col-lg-3 col-md-6 mb-4 photographer-card"
                         data-id="<?= htmlspecialchars($static_photographer_id_8) ?>"
                         data-fname="<?= htmlspecialchars($static_photographer_fname_8) ?>"
                         data-lname="<?= htmlspecialchars($static_photographer_lname_8) ?>"
                         data-type="<?= htmlspecialchars($static_type_of_photographer_8) ?>"
                         data-age="<?= htmlspecialchars($static_photographer_age_8) ?>"
                         data-email="<?= htmlspecialchars($static_photographer_email_8) ?>"
                         data-skills="<?= htmlspecialchars($static_skills_8) ?>"
                         data-description="<?= htmlspecialchars($static_description_8) ?>"
                         data-image-url="<?= htmlspecialchars($static_image_url_8) ?>"
                         >
                        <div class="card h-100">
                            <div class="card-body text-center p-4 d-flex flex-column">
                                <img src="<?= htmlspecialchars($static_image_url_8) ?>"
                                     alt="Photographer <?= htmlspecialchars($static_full_name_8) ?>"
                                     class="rounded-circle mb-3 mx-auto photographer-image"
                                     style="width: 100px; height: 100px; object-fit: cover;">
                                <h5 class="card-title mb-2 photographer-name"><?= htmlspecialchars($static_full_name_8) ?></h5>
                                <p class="card-text text-muted photographer-type"><em><?= htmlspecialchars($static_type_of_photographer_8) ?></em></p>
                                <p class="card-text text-muted small photographer-skills">Skills: <?= htmlspecialchars($static_skills_8) ?></p>
                                <div class="mt-auto">
                                    <a href="<?= htmlspecialchars($static_profile_link_8) ?>" class="btn btn-sm btn-outline-primary photographer-profile-link">Profile</a>
                                    <button type="button" class="btn btn-sm btn-info btn-edit-photographer" data-bs-toggle="modal" data-bs-target="#editPhotographerModal">
                                        <i class="fas fa-edit"></i> Edit
                                    </button>
                                    <button type="button" class="btn btn-sm btn-danger btn-delete-photographer" data-bs-toggle="modal" data-bs-target="#deletePhotographerModal">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END OF STATIC PHOTOGRAPHER CARD EXAMPLE 8 -->
                </div>
            </div>
            <!-- Card Section End -->

            <!-- Add Photographer Modal -->
            <div class="modal fade" id="addPhotographerModal" tabindex="-1" aria-labelledby="addPhotographerModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addPhotographerModalLabel">Add New Photographer</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="addPhotographerForm">
                                <!-- Fields for adding a photographer -->
                                <div class="mb-3">
                                    <label for="addPhotographerFname" class="form-label">First Name</label>
                                    <input type="text" class="form-control " id="addPhotographerFname" name="photographer_fname" required>
                                </div>
                                <div class="mb-3">
                                    <label for="addPhotographerLname" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="addPhotographerLname" name="photographer_lname" required>
                                </div>
                                <div class="mb-3">
                                    <label for="addTypeOfPhotographer" class="form-label">Type of Photographer</label>
                                    <input type="text" class="form-control" id="addTypeOfPhotographer" name="type_of_photographer">
                                </div>
                                <div class="mb-3">
                                    <label for="addPhotographerSkills" class="form-label">Skills</label>
                                    <input type="text" class="form-control" id="addPhotographerSkills" name="skills">
                                </div>
                                <div class="mb-3">
                                    <label for="addPhotographerImageFile" class="form-label">Profile Image (File)</label>
                                    <input type="file" class="form-control" id="addPhotographerImageFile" name="photographer_image_file" accept="image/*">
                                </div>
                                <!-- Add other fields as needed -->
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" form="addPhotographerForm" class="btn btn-primary">Save Photographer</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Edit Photographer Modal (Added Structure) -->
            <div class="modal fade" id="editPhotographerModal" tabindex="-1" aria-labelledby="editPhotographerModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editPhotographerModalLabel">Edit Photographer</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="editPhotographerForm">
                                <input type="hidden" id="PhotographerID" name="photographerID"> <!-- For storing ID -->
                                <div class="mb-3 text-center">
                                    <img src="#" alt="Current Photographer Image" id="currentPhotographerImage" class="rounded-circle mb-3" style="width: 100px; height: 100px; object-fit: cover; display: none;">
                                    <p class="no-image-text" style="display: none;">No image provided.</p> <!-- For text fallback -->
                                </div>
                                <div class="mb-3">
                                    <label for="photographerfname" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="photographerfname" name="photographer_fname" required>
                                </div>
                                <div class="mb-3">
                                    <label for="photographerlname" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="photographerlname" name="photographer_lname" required>
                                </div>
                                <div class="mb-3">
                                    <label for="typeOfphotographer" class="form-label">Type of Photographer</label>
                                    <input type="text" class="form-control" id="typeOfphotographer" name="type_of_photographer">
                                </div>
                                <div class="mb-3">
                                    <label for="photographerage" class="form-label">Age</label>
                                    <input type="number" class="form-control" id="photographerage" name="photographer_age">
                                </div>
                                <div class="mb-3">
                                    <label for="photographeremail" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="photographeremail" name="photographer_email">
                                </div>
                                <div class="mb-3">
                                    <label for="skills" class="form-label">Skills</label>
                                    <input type="text" class="form-control" id="skills" name="skills">
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="editPhotographerImageFile" class="form-label">New Profile Image (Optional)</label>
                                    <input type="file" class="form-control" id="editPhotographerImageFile" name="photographer_image_file" accept="image/*">
                                </div>
                                <!-- Add other fields as needed -->
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" form="editPhotographerForm" class="btn btn-primary">Save Changes</button>
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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
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
    $(document).ready(function() {
        $('#photographerCardRow').on('click', '.btn-edit-photographer', function () {
            var card = $(this).closest('.photographer-card');

            var photographerID = card.data('id');
            var fname = card.data('fname');
            var lname = card.data('lname');
            var type = card.data('type');
            var age = card.data('age');
            var email = card.data('email');
            var skills_data = card.data('skills'); 
            var description_data = card.data('description'); 
            var imageUrl = card.data('image-url'); // This comes from data-image-url on the card

            $('#PhotographerID').val(photographerID);
            $('#photographerfname').val(fname);
            $('#photographerlname').val(lname);
            $('#typeOfphotographer').val(type);
            $('#photographerage').val(age ? parseFloat(age) : '');
            $('#photographeremail').val(email);
            $('#skills').val(skills_data);
            $('#description').val(description_data);
            
            var $currentImage = $('#currentPhotographerImage');
            var $noImageText = $currentImage.parent().find('.no-image-text');

            if (imageUrl && imageUrl !== 'https://via.placeholder.com/100/CCCCCC/FFFFFF?text=No+Image' && imageUrl !== '#') {
                $currentImage.attr('src', imageUrl).show(); // Use the imageUrl from data attribute
                $noImageText.hide();
            } else {
                $currentImage.hide().attr('src', '#');
                $noImageText.text('No image available.').show();
            }
        });

        $('#addPhotographerModal, #editPhotographerModal').on('hidden.bs.modal', function () {
            $(this).find('form')[0].reset();
            $(this).find('input[type="file"]').val('');
            $('#currentPhotographerImage').hide().attr('src', '#');
            $('#currentPhotographerImage').parent().find('.no-image-text').hide();
        });
    });
    </script>
</body>
</html>
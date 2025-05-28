<!DOCTYPE html>
<html lang="en">

<?=include_page('header')?> <!-- Assuming this is still needed -->

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
        <?= include_page('photoex/phsidebar') ?> <!-- Assuming this is still needed -->
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?= include_page('photoex/phnavbar') ?> <!-- Assuming this is still needed -->
            <!-- Navbar End -->

            <div class="container py-5">
                <div class="row justify-content-center">
                    <!-- Card 1: Displays Jamie Portrait's data -->
                    <div class="col-lg-10 mx-auto mb-4">
                        <div class="card bg-dark text-light border-secondary shadow-sm overflow-hidden">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="<?=assets()?>/img/wed.jpg" class="card-image-source img-fluid rounded-start w-100 h-100" alt="Jamie Portrait" style="object-fit: cover;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body d-flex flex-column h-100">

                                        <h3 class="card-title h3 text-light">Jamie Portrait</h3>

                                        <p class="text-info text-uppercase fw-medium mb-2">Wedding & Event Photographer</p>

                                        <p class="text-muted mb-2"><i class="fas fa-birthday-cake me-1"></i> 35 years old</p>
                                        <div class="mb-3">

                                            <strong class="fs-6">Skills:</strong>
                                            <div>
                                                <span class="badge bg-secondary me-1 mb-1">Portraiture</span>
                                                <span class="badge bg-secondary me-1 mb-1">Event Coverage</span>
                                                <span class="badge bg-secondary me-1 mb-1">Candid Moments</span>
                                                <span class="badge bg-secondary me-1 mb-1">Studio Lighting</span>
                                            </div>
                                        </div>

                                        <p class="card-text text-muted mb-3 fs-6">
                                            Capturing the magic of your special days with a creative and personal touch. Passionate about storytelling through images.
                                        </p>
                                        <div class="text-end mt-auto">
                                            <button type="button" class="btn btn-sm btn-outline-light me-2" data-bs-toggle="modal" data-bs-target="#viewPicturesModal">
                                                <i class="fas fa-images me-1"></i> View Works
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        </div>
        <!-- Content End -->
    </div>

    <!-- MODAL HTML START -->
    <div class="modal fade" id="viewPicturesModal" tabindex="-1" aria-labelledby="viewPicturesModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content bg-dark text-light">
                <div class="modal-header border-secondary">
                    <h5 class="modal-title" id="viewPicturesModalLabel">More Pictures of Jamie Portrait</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Existing pictures. Click "Add Works" below to upload new ones.</p>

                    <!-- Grid for displaying pictures, added an ID -->
                    <div class="row" id="modalPicturesGrid">
                        <div class="col-md-4 col-lg-3 mb-3">
                            <img src="<?=assets()?>/img/wed.jpg" class="img-fluid rounded" alt="More picture 1">
                        </div>
                        <div class="col-md-4 col-lg-3 mb-3">
                            <img src="<?=assets()?>/img/wed.jpg" class="img-fluid rounded" alt="More picture 2">
                        </div>
                        <div class="col-md-4 col-lg-3 mb-3">
                            <img src="<?=assets()?>/img/wed.jpg" class="img-fluid rounded" alt="More picture 3">
                        </div>
                        <div class="col-md-4 col-lg-3 mb-3">
                            <img src="<?=assets()?>/img/wed.jpg" class="img-fluid rounded" alt="More picture 4">
                        </div>
                        <div class="col-md-4 col-lg-3 mb-3">
                            <img src="<?=assets()?>/img/wed.jpg" class="img-fluid rounded" alt="More picture 5">
                        </div>
                        <div class="col-md-4 col-lg-3 mb-3">
                            <img src="<?=assets()?>/img/wed.jpg" class="img-fluid rounded" alt="More picture 6">
                        </div>
                        <!-- New pictures will be appended here by JavaScript -->
                    </div>
                </div>
                <div class="modal-footer border-secondary">
                    <!-- Hidden file input for picture selection -->
                    <input type="file" id="newPictureInput" accept="image/*" style="display: none;">
                    <!-- Button to trigger file input -->
                    <button type="button" class="btn btn-info me-auto" id="addPictureButton">
                        <i class="fas fa-plus me-1"></i> Add Works
                    </button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL HTML END -->


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

    <!-- CUSTOM JAVASCRIPT FOR MODAL PICTURE UPLOAD -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const addPictureButton = document.getElementById('addPictureButton');
            const newPictureInput = document.getElementById('newPictureInput');
            const modalPicturesGrid = document.getElementById('modalPicturesGrid');

            if (addPictureButton && newPictureInput && modalPicturesGrid) {
                addPictureButton.addEventListener('click', function () {
                    newPictureInput.click(); // Programmatically click the hidden file input
                });

                newPictureInput.addEventListener('change', function (event) {
                    const file = event.target.files[0]; // Get the selected file

                    if (file && file.type.startsWith('image/')) { // Check if a file is selected and it's an image
                        const reader = new FileReader();

                        reader.onload = function (e) {
                            // Create the column div for Bootstrap grid
                            const newCol = document.createElement('div');
                            newCol.className = 'col-md-4 col-lg-3 mb-3'; // Match existing column classes

                            // Create the image element
                            const newImg = document.createElement('img');
                            newImg.src = e.target.result; // Set src to the file data URL
                            newImg.className = 'img-fluid rounded';
                            newImg.alt = 'Newly added picture';

                            // Append the new image to the column, and the column to the grid
                            newCol.appendChild(newImg);
                            modalPicturesGrid.appendChild(newCol);
                        };

                        reader.readAsDataURL(file); // Read the file as a data URL

                        // Optional: Clear the file input for the next selection
                        // This allows selecting the same file again if the user cancels and then re-selects
                        newPictureInput.value = '';
                    } else if (file) {
                        // If a file is selected but it's not an image
                        alert('Please select a valid image file (e.g., JPG, PNG, GIF).');
                        newPictureInput.value = ''; // Clear invalid selection
                    }
                });
            } else {
                console.error('Modal picture upload elements not found.');
            }
        });
    </script>

    <!-- Make sure Font Awesome is loaded if you use its icons (usually in <head>) -->
    <!-- Example: <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->

</body>
</html> 
<?= include_page('header') ?>

<style>
    /* Style for DataTables search input */
    .dataTables_filter input {
        background-color: #495057 !important;
        /* A dark grey, or use your theme's input background color */
        color: #fff !important;
        /* White text */
        border: 1px solid #495057 !important;
        /* Match border to background */
        padding: 0.375rem 0.75rem;
        /* Bootstrap's default input padding */
        border-radius: 0.25rem;
        /* Bootstrap's default input border-radius */
    }

    /* Style for DataTables "Show X entries" dropdown */
    .dataTables_length select {
        background-color: #495057 !important;
        /* Dark background */
        color: #fff !important;
        /* White text */
        border: 1px solid #495057 !important;
        padding: 0.375rem 2.25rem 0.375rem 0.75rem;
        /* Adjust padding for dropdown arrow */
        border-radius: 0.25rem;
        /* For consistency with dark mode, ensure the dropdown arrow is visible */
        filter: invert(100%);
        /* Invert color of default dropdown arrow for dark background */
    }

    /* Style for DataTables info text (e.g., "Showing X to Y of Z entries") */
    .dataTables_info {
        color: #dee2e6 !important;
        /* Light grey for info text */
    }

    /* Style for DataTables pagination buttons */
    .dataTables_paginate .paginate_button {
        background-color: #343a40 !important;
        /* Dark background for buttons */
        color: #fff !important;
        /* White text */
        border: 1px solid #343a40 !important;
        margin: 0 5px;
        border-radius: 5px;
    }

    .dataTables_paginate .paginate_button:hover:not(.disabled),
    .dataTables_paginate .paginate_button.current {
        background-color: #0d6efd !important;
        /* Primary color for active/hover */
        color: #fff !important;
        border-color: #0d6efd !important;
    }

    .dataTables_paginate .paginate_button.disabled {
        color: #6c757d !important;
        /* Lighter grey for disabled buttons */
        background-color: #343a40 !important;
        border-color: #343a40 !important;
    }

    /* Override any default DataTables background on wrapper if needed */
    .dataTables_wrapper {
        background-color: transparent !important;
        /* Ensure wrapper doesn't have a light background */
    }

    /* Ensure all text within the table body cells is visible */
    #myDataTable tbody td {
        color: #fff !important;
        /* Explicitly set white for all table body text */
    }

    /* Adjust badge text color for visibility */
    .badge.bg-warning {
        color: #212529 !important;
        /* Keep text dark for warning badges, or change to #fff if preferred */
    }

    /* === Style for DataTables Export Buttons (Copy, CSV, Excel, PDF, Print) === */
    .dt-button {
        background-color: #343a40 !important;
        /* Dark background for the buttons */
        color: #fff !important;
        /* White text */
        border: 1px solid #343a40 !important;
        border-radius: 0.25rem !important;
        /* Match Bootstrap button radius */
        margin-right: 5px !important;
        /* Add some spacing between buttons */
        padding: 0.375rem 0.75rem !important;
        /* Match Bootstrap button padding */
        display: inline-block;
        /* Ensure proper display */
        text-decoration: none;
        /* Remove underline for links */
        cursor: pointer;
        /* Indicate it's clickable */
    }

    .dt-button:hover:not(.disabled) {
        background-color: #495057 !important;
        /* Slightly lighter dark for hover effect */
        color: #fff !important;
        /* Keep text white on hover */
        border-color: #495057 !important;
    }

    .dt-button.disabled {
        opacity: 0.6 !important;
        /* Dim disabled buttons */
        cursor: not-allowed !important;
    }
</style>

<?= include_page('sidebar') ?>
<div class="content">
    <?= include_page('navbar') ?>
    <div class="container-fluid pt-4 px-4">
        <div class="bg-dark text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0 text-white">Service Packages</h6>
                <div class="d-flex align-items-center">
                    <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#addPackageModal"> <i class="fas fa-plus"></i> Add New Package
                    </button>
                    <a href="" class="text-primary">Show All</a>
                </div>
            </div>
            <div class="table-responsive">
                <table id="myDataTable" class="table table-dark table-striped table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-white">
                            <th>Image</th>
                            <th>Service Name</th>
                            <th>Package Name</th>
                            <th>Description</th>
                            <th>Down Payment</th>
                            <th>Full Payment</th>
                            <th>Date Modified</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addPackageModal" tabindex="-1" aria-labelledby="addPackageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark text-white">
            <div class="modal-header">
                <h5 class="modal-title" id="addPackageModalLabel">Add New Package</h5> <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="addserviceform">
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="addServiceImage" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control bg-secondary text-white border-0" id="addServiceImage">
                    </div>
                    <div class="mb-3">
                        <label for="addServiceName" class="form-label">Service Name</label>
                        <input type="text" name="services_name" class="form-control bg-secondary text-white border-0" id="addServiceName" placeholder="e.g., Wedding Photography">
                    </div>
                    <div class="mb-3">
                        <label for="addPackageName" class="form-label">Package Name</label>
                        <input type="text" name="package_name" class="form-control bg-secondary text-white border-0" id="addPackageName" placeholder="e.g., Gold Package">
                    </div>
                    <div class="mb-3">
                        <label for="addDescription" class="form-label">Description</label>
                        <textarea class="form-control bg-secondary text-white border-0" name="description" id="addDescription" rows="3" placeholder="Detailed description of the service package..."></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="addDownPayment" class="form-label">Down Payment</label>
                        <input type="number" name="downpayment" class="form-control bg-secondary text-white border-0" id="addDownPayment" placeholder="$0.00">
                    </div>
                    <div class="mb-3">
                        <label for="addFullPayment" class="form-label">Full Payment</label>
                        <input type="number" name="fullpayment" class="form-control bg-secondary text-white border-0" id="addFullPayment" placeholder="$0.00">
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

<div class="modal fade" id="editPackageModal" tabindex="-1" aria-labelledby="editPackageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark text-white">
            <div class="modal-header">
                <h5 class="modal-title" id="editPackageModalLabel">Edit Package Details</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editform">
                <div class="modal-body">

                    <input type="hidden" id="editPackageId">
                    <div class="mb-3">
                        <label for="editServiceImage" class="form-label">Image</label>
                        <input type="file" class="form-control bg-secondary text-white border-0" id="editServiceImage">
                        <img src="https://via.placeholder.com/80" id="currentServiceImage" alt="Current Service Image" class="rounded mt-2" style="width: 80px; height: 80px; object-fit: cover; display: none;">
                    </div>
                    <div class="mb-3">
                        <label for="editServiceName" class="form-label">Service Name</label>
                        <input type="text" name="services_name" class="form-control bg-secondary text-white border-0" id="editServiceName" placeholder="e.g., Wedding Photography">
                    </div>
                    <div class="mb-3">
                        <label for="editPackageName" class="form-label">Package Name</label>
                        <input type="text" name="packagename" class="form-control bg-secondary text-white border-0" id="editPackageName" placeholder="e.g., Gold Package">
                    </div>
                    <div class="mb-3">
                        <label for="editDescription" class="form-label">Description</label>
                        <textarea class="form-control bg-secondary text-white border-0" name="description" id="editDescription" rows="3" placeholder="Detailed description of the service package..."></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="editDownPayment" class="form-label">Down Payment</label>
                        <input type="number" name="downpayment" class="form-control bg-secondary text-white border-0" id="editDownPayment" placeholder="$0.00">
                    </div>
                    <div class="mb-3">
                        <label for="editFullPayment" class="form-label">Full Payment</label>
                        <input type="number" name="fullpayment" class="form-control bg-secondary text-white border-0" id="editFullPayment" placeholder="$0.00">
                    </div>
                    <div class="mb-3">
                        <label for="editDateModified" class="form-label">Date Modified</label>
                        <input type="date" class="form-control bg-secondary text-white border-0" id="editDateModified">
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

<div class="modal fade" id="deletePackageModal" tabindex="-1" aria-labelledby="deletePackageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark text-white">
            <div class="modal-header">
                <h5 class="modal-title" id="deletePackageModalLabel">Confirm Deletion</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this package? This action cannot be undone.</p>
                <input type="hidden" id="deletePackageId">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </div>

        </div>
    </div>
</div>

<?= include_page('footer') ?>

<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" />

<!-- DataTables Buttons CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" />

<!-- jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

<!-- DataTables JS -->
<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<!-- DataTables Buttons JS -->
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>

<!-- JSZip for Excel export -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<!-- DataTables Buttons HTML5 JS -->
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>

<!-- DataTables Buttons Print JS -->
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>

<!-- Bootstrap 5 Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



<script>
    $(document).ready(function() {


        // --- JavaScript for Modals (Client-side example, actual implementation needs backend) ---

        // Event listener for Edit buttons (delegated for dynamically added rows)
        $('#myDataTable tbody').on('click', '.btn-info', function() {
            // In a real application, you would fetch the data for the specific row
            // from a database using an ID, and then populate the modal fields.
            // For this static HTML example, we'll just show the modal.

            // Example: You would get data from the row clicked
            var row = $(this).closest('tr');
            var serviceName = row.find('td').eq(2).text(); // Assuming Service Name is the 3rd td (index 2)
            var packageName = row.find('td').eq(3).text();
            var description = row.find('td').eq(4).text();
            var downPayment = row.find('td').eq(5).text().replace('$', '');
            var fullPayment = row.find('td').eq(6).text().replace('$', '');
            var dateModified = row.find('td').eq(7).text();
            // You would also need the current image path if you want to display it
            var currentImageSrc = row.find('td').eq(1).find('img').attr('src');


            // Populate the Edit Modal fields
            $('#editServiceName').val(serviceName);
            $('#editPackageName').val(packageName);
            $('#editDescription').val(description);
            $('#editDownPayment').val(parseFloat(downPayment)); // Convert to number
            $('#editFullPayment').val(parseFloat(fullPayment)); // Convert to number
            $('#editDateModified').val(dateModified);

            if (currentImageSrc) {
                $('#currentServiceImage').attr('src', currentImageSrc).show();
            } else {
                $('#currentServiceImage').hide();
            }

            // Set a dummy ID for demonstration (in real app, this would be the actual record ID)
            $('#editPackageId').val('dummy-package-id-123');

            // The modal will be shown by Bootstrap's data-bs-toggle attribute
        });

        // Event listener for Delete buttons (delegated)
        $('#myDataTable tbody').on('click', '.btn-danger', function() {
            // In a real application, you would get the ID of the item to be deleted
            // and store it in the delete confirmation modal's hidden input.
            // For this example, we'll use a dummy ID.
            $('#deletePackageId').val('dummy-package-id-to-delete');

            // The modal will be shown by Bootstrap's data-bs-toggle attribute
        });




    });
</script>


<script>
    //add
    on_submit("#addserviceform", async function() {
        event.preventDefault();
        $data = get_form_data("#addserviceform");
        $data['img'] = await jsinput_to_base64("#addServiceImage");
        $api = await mypost("service/add", $data);
        $reponse = $api.backend;
        if ($reponse.code == 200) {
            Swal.fire({
                title: "Success",
                text: "Service added successfuly",
                icon: "success"
            }).then(() => {
                reload();
            });
        } else {
            Swal.fire({
                title: "Error",
                text: $reponse.message,
                icon: "error"
            }).then(() => {

            });
        }
    });
</script>

<script>
    //delete

    async function del(id) {
        $data = {
            id: id
        };
        $api = await mypost("service/delete", $data);
        $reponse = $api.backend;
        if ($reponse.code == 200) {
            Swal.fire({
                title: "Success",
                text: "Service added successfuly",
                icon: "success"
            }).then(() => {
                reload();
            });
        } else {
            Swal.fire({
                title: "Error",
                text: $reponse.message,
                icon: "error"
            }).then(() => {

            });
        }
    }
</script>

<script>
    //update

    async function update(id) {
        $("#editPackageModal").modal("show");
        $data = {
            id: id
        };
        $api = await mypost("service/get", $data);
        $backend = $api.backend;
        if ($backend.code == 200) {
            $column = $backend.first_row;
            document.querySelector("#editServiceName").value = $column.services_name;
            document.querySelector("#editPackageName").value = $column.packagename;
            document.querySelector("#editDescription").value = $column.description;
            document.querySelector("#editDownPayment").value = $column.downpayment;
            document.querySelector("#editFullPayment").value = $column.fullpayment;

            on_submit("#editform", async () => {
                event.preventDefault();
                $data = get_form_data("#editform");
                $data['id'] = id;
                $api = await mypost("service/update", $data);
                $reponse = $api.backend;
                if ($reponse.code == 200) {
                    Swal.fire({
                        title: "Success",
                        text: "Service updated",
                        icon: "success"
                    }).then(() => {
                        reload();
                    });
                } else {
                    Swal.fire({
                        title: "Error",
                        text: $reponse.message,
                        icon: "error"
                    }).then(() => {

                    });
                }


            });
        }
    }
</script>

<script>
    //display
    $mytable = $('#myDataTable').DataTable();
    async function display() {
        $api = await mypost("service/display");
        $backend = $api.backend;
        if ($backend.code == 200) {
            $data = $backend.data;

            $data.forEach(column => {
                $mytable.row.add([
                    `<img src="${column.image}" alt="Service Image" class="rounded" style="width: 50px; height: 50px; object-fit: cover;">`,
                    column.services_name ?? "null",
                    column.packagename ?? "null",
                    column.description ?? "null",
                    column.downpayment ?? "null",
                    column.fullpayment ?? "null",
                    column.date_modified ?? "null",
                    `<button class="btn btn-danger" onclick="del('${column.packageID}')">Delete</button>
                    <button class="btn btn-success" onclick="update('${column.packageID}')">UPDATE</button>`
                ]).draw();
            });

        } else {
            alert($backend.message);
        }
    }
</script>


<script>
    //load
    on_load(async function() {
        await display();
    });
</script>
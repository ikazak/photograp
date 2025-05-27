<?=include_page('header')?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3WdfZ/hV0B3O7F4b3e3+6XF8lK1x/fQ/e1P0fJ/f3f+j7D6P1g0o7L6n7f0/J7fQ8g7L6n7f0/J7fQ8g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    /* Custom styles for your project management table */
    .content {
        padding: 20px; /* Add some padding around the main content */
    }

    .project-management-section {
        background-color: #ffffff; /* White background for the section */
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        padding: 25px;
        margin-top: 20px; /* Space from the top elements */
    }

    .project-management-section h3 {
        color: #343a40; /* Darker text for the heading */
        margin-bottom: 25px;
        font-size: 1.8rem;
        font-weight: 600;
    }

    /* Container for the heading and button to allow float */
    .table-header-controls {
        display: flex;
        justify-content: space-between; /* Puts items at opposite ends */
        align-items: center; /* Vertically aligns items */
        margin-bottom: 20px; /* Space below this section */
    }

    /* Styles for the "Add Project" button */
    .add-project-btn {
        display: inline-flex; /* Use flexbox to align icon and text */
        align-items: center; /* Vertically align items in the button */
        background-color: #dc3545; /* Red color for add button */
        color: #ffffff;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none; /* Remove underline */
        font-weight: bold;
        border: none; /* No default button border */
        cursor: pointer; /* Indicate it's clickable */
        transition: background-color 0.3s ease; /* Smooth hover effect */
    }

    .add-project-btn:hover {
        background-color: #c82333; /* Darker red on hover */
    }

    .add-project-btn i {
        margin-right: 8px; /* Space between the icon and text */
        font-size: 1rem; /* Adjust icon size if needed */
    }

    .project-management-table {
        width: 100%; /* Make table take full width of its container */
        border-collapse: collapse; /* Collapse borders for a clean look */
        margin-top: 20px;
    }

    .project-management-table th {
        color: #ffffff; /* White text for headers */
        font-weight: bold;
        text-align: center;
        vertical-align: middle;
        padding: 12px 8px;
        border: 1px solid #dee2e6; /* Add borders for consistency */
    }

    /* Color Coding for Table Headers */
    .project-management-table th.pending-header {
        background-color: #ffc107; /* Yellow */
        color: #343a40; /* Darker text for readability on yellow */
    }

    .project-management-table th.bookings-header {
        background-color: #007bff; /* Blue */
    }

    .project-management-table th.postponed-header {
        background-color: #dc3545; /* Red */
    }

    .project-management-table th.completed-header {
        background-color: #28a745; /* Green */
    }

    .project-management-table td {
        text-align: left;
        vertical-align: top;
        padding: 10px 8px;
        border: 1px solid #dee2e6; /* Add borders for consistency */
        color: #495057; /* Slightly darker text for table data */
    }

    /* Style for the event title specifically */
    .event-title {
        font-weight: bold; /* Make the title bold */
        display: inline-block; /* Essential for transform to work correctly */
        transition: transform 0.1s ease-out; /* Add transition for the interactive effect */
        cursor: pointer; /* Indicate it's clickable */
    }

    .project-management-table tbody tr:nth-child(even) {
        background-color: #f8f9fa; /* Light grey for even rows for better readability */
    }

    .project-management-table tbody tr:hover {
        background-color: #e2f4ff; /* Lighter blue on hover for rows */
    }

    /* Class for the click effect on event titles */
    .event-title.clicked-effect {
        transform: translateY(2px); /* Moves content down slightly */
        box-shadow: inset 0 1px 3px rgba(0,0,0,0.2); /* Adds a pressed-in look */
    }

    /* Basic responsive behavior for the table */
    @media screen and (max-width: 768px) {
        .project-management-table,
        .project-management-table tbody,
        .project-management-table tr,
        .project-management-table td {
            display: block; /* Make elements behave like blocks */
            width: 100%;
        }

        .project-management-table thead {
            display: none; /* Hide table headers on small screens */
        }

        .project-management-table tr {
            margin-bottom: 15px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        .project-management-table td {
            text-align: right;
            padding-left: 50%; /* Make space for the pseudo-element label */
            position: relative;
        }

        .project-management-table td::before {
            content: attr(data-label); /* Use data-label for the pseudo-element content */
            position: absolute;
            left: 10px;
            width: calc(50% - 20px);
            padding-right: 10px;
            white-space: nowrap;
            text-align: left;
            font-weight: bold;
            color: #343a40;
        }
    }
</style>
<?=include_page('sidebar')?>
<div class="content">
    <?=include_page('navbar')?>          
    <div class="container-fluid pt-4 px-4">
        <div class="project-management-section">
            <div class="table-header-controls">
                <h3 class="mb-0">Photography Project Management</h3>
                <a href="#" class="add-project-btn">
                    <i class="fas fa-plus"></i> Add Project
                </a>
            </div>

            <div class="table-responsive">
                <table class="project-management-table" id="projectTable">
                    <thead>
                        <tr>
                            <th class="pending-header">Pending</th>
                            <th class="bookings-header">Bookings</th>
                            <th class="postponed-header">Postponed</th>
                            <th class="completed-header">Completed</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Pending">
                                <span class="event-title">Maternity Shoot</span><br>
                                Client: Bea M.<br>
                                Date: July 15, 2024<br>
                                Status: Wardrobe consultation pending
                            </td>
                            <td data-label="Bookings">
                                <span class="event-title">Wedding Photography</span><br>
                                Client: Angel & John<br>
                                Date: June 21, 2024<br>
                                Status: Contract Signed, 50% Deposit Paid
                            </td>
                            <td data-label="Postponed">
                                <span class="event-title">Family Portrait Session</span><br>
                                Client: Charlie D.<br>
                                Original Date: Aug 1, 2024<br>
                                New Date: TBD (Client travel conflict)
                            </td>
                            <td data-label="Completed">
                                <span class="event-title">Corporate Headshots</span><br>
                                Client: David Corp.<br>
                                Date: May 10, 2024<br>
                                Status: Photos Delivered, Final Payment Received
                            </td>
                        </tr>
                        <tr>
                            <td data-label="Pending">
                                <span class="event-title">Product Photography</span><br>
                                Client: Fuji Gadgets<br>
                                Date: Nov 1, 2024<br>
                                Status: Product samples awaiting arrival
                            </td>
                            <td data-label="Bookings">
                                <span class="event-title">Engagement Session</span><br>
                                Client: Elena & Mark<br>
                                Date: Sep 5, 2024<br>
                                Status: Location scouting, Quote Sent
                            </td>
                            <td data-label="Postponed">
                                <span class="event-title">Event Coverage (Conference)</span><br>
                                Client: Grace Events<br>
                                Original Date: Dec 25, 2024<br>
                                New Date: Feb 14, 2025 (Venue change)
                            </td>
                            <td data-label="Completed">
                                <span class="event-title">Real Estate Photography</span><br>
                                Client: Honda Realty<br>
                                Date: April 20, 2024<br>
                                Status: Images Edited & Uploaded, Client Approved
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?=include_page('footer')?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTFyMGUHvMMqEYp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-I7E8VVD/ismYTFyMGUHvMMqEYp" crossorigin="anonymous"></script>

<script>
    // JavaScript for the click effect on event titles
    document.addEventListener('DOMContentLoaded', function() {
        // Target only elements with the 'event-title' class
        const eventTitles = document.querySelectorAll('.event-title');

        eventTitles.forEach(title => {
            title.addEventListener('click', function(event) {
                // Prevent the click from bubbling up to the parent td if it also has an event
                event.stopPropagation(); 

                // Add the class to trigger the animation
                this.classList.add('clicked-effect');

                // Remove the class after a short delay to reset the animation
                setTimeout(() => {
                    this.classList.remove('clicked-effect');
                }, 200); // 200ms matches the transition duration in CSS
            });
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTFyMGUHvMMqEYp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-I7E8VVD/ismYTFyMGUHvMMqEYp" crossorigin="anonymous"></script>

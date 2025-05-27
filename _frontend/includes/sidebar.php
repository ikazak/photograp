<style>

    /* Brand section */
    .navbar-brand {
        margin-top: 1.5rem; /* Slightly more top margin for visual separation */
        margin-bottom: 1.5rem !important; /* Consistent bottom margin */
        display: flex;
        align-items: center; /* Vertically center items */
        justify-content: flex-start; /* Align to the start (left) */
        padding: 0 1rem; /* Horizontal padding for the entire brand area */
        height: auto; /* Allow height to adjust naturally */
    }
    .navbar-brand img { /* Style the logo image */
        height: 48px; /* Fixed height for the logo for consistent sizing */
        width: auto; /* Maintain aspect ratio */
        flex-shrink: 0; /* Prevent image from shrinking */
        margin-right: 8px; /* Space between logo and text */
        display: block; /* Ensures no extra space below image */
    }
    .navbar-brand h3 {
        color: #212529 !important; /* Black for the brand name */
        font-weight: 800;
        letter-spacing: 0.5px;
        font-size: 1.2rem; /* Adjusted text size */
        line-height: 1; /* Ensures text sits well */
        transition: color 0.3s ease;
        margin-bottom: 0; /* Remove default bottom margin */
        white-space: nowrap; /* Prevent text from wrapping */
    }




</style>

<div class="sidebar pe-4 pb-3">
    <nav class="navbar">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <img src="_frontend/assets/img/logop.jpg" alt="PPhotography Logo">
            <h3>PPhotography</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="user-profile-icon-container">
                <i class="fa fa-user-circle"></i>
                <div class="bg-success rounded-circle border border-2 border-white position-absolute p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0 text-dark" id="sidename">Patricck V.</h6>
                <span class="text-muted">Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a id="homepage" href="<?=page('admin/homepage')?>" class="nav-item nav-link text-dark active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a id="profile" href="<?=page('admin/profile.php')?>" class="nav-item nav-link text-dark"><i class="fa fa-user me-2"></i>Photographers</a>
            <a id="proj" href="<?=page('admin/projmanagement.php')?>" class="nav-item nav-link text-dark"><i class="fa fa-tasks me-2"></i>Projects</a>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown"><i class="fa fa-calendar me-2"></i>Bookings</a>
                <div class="dropdown-menu border-0">
                    <a href="<?=page('admin/session.php')?>" class="dropdown-item text-dark"><i class="fa fa-camera me-2"></i> Sessions</a>
                    <a href="<?=page('admin/calendar.php')?>" class="dropdown-item text-dark"><i class="fa fa-calendar-alt me-2"></i> Calendar</a>
                </div>
            </div>

            <div class="nav-item dropdown">
                <a href="<?=page('admin/services.php')?>" class="nav-link  text-dark" >
                    <i class="fa fa-toolbox me-2"></i>Services
                </a>
            </div>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown">
                    <i class="fa fa-money-bill me-2"></i>Payments
                </a>
                <div class="dropdown-menu border-0">
                    <a href="<?=page('admin/invoices.php')?>" class="dropdown-item text-dark">
                        <i class="fa fa-file-invoice me-2"></i>Invoices
                    </a>
                    <a href="<?=page('admin/transachistory.php')?>" class="dropdown-item text-dark">    
                        <i class="fa fa-receipt me-2"></i>Transaction
                    </a>
                </div>
            </div>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown">
                    <i class="fa fa-box me-2"></i>Inventory
                </a>
                <div class="dropdown-menu border-0">
                    <a href="<?=page('admin/inventory.php')?>" class="dropdown-item text-dark">
                        <i class="fa fa-cogs me-2"></i> Equipment
                    </a>
                    <a href="#" class="dropdown-item text-dark">
                        <i class="fa fa-wrench me-2"></i> Tools
                    </a>
                </div>
            </div>


            <a id="about" href="<?=page('admin/aboutus.php')?>" class="nav-item nav-link text-dark"><i class="fa fa-users me-2"></i>About Us</a>
            <a id="appoint" href="<?=page('admin/appointstatus.php')?>" class="nav-item nav-link text-dark"><i class="fa fa-cog me-2"></i>Settings</a>
        </div>
    </nav>
</div>

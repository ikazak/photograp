<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PPhotography - Sign Up</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?=assets()?>/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?=assets()?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?=assets()?>/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?=assets()?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?=assets()?>/css/style.css" rel="stylesheet">

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php
    // Assuming fe.php is included before this page by your router/controller
    ?>

    <style>
        :root {
            --logo-red: #D81921;
            --logo-black: #1E1E1E;
        }

        body {
            font-family: 'Open Sans', sans-serif;
        }

        #left-panel-signup {
            background: linear-gradient(135deg, #a71019 0%, var(--logo-black) 100%);
        }

        #left-panel-signup h1,
        #left-panel-signup .display-4 {
            color: #FFFFFF;
            font-weight: bold;
        }
        #left-panel-signup p {
            color: #FFFFFF;
        }
        #left-panel-signup .lead {
            opacity: 0.85;
        }
        #left-panel-signup .bottom-text {
            opacity: 0.6 !important;
        }

        .rounded-logo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid rgba(255, 255, 255, 0.8);
            box-shadow: 0 4px 10px rgba(0,0,0,0.25);
        }

        #signup-button, .wizard-nav-btn.next-step {
            background-color: var(--logo-red);
            border-color: var(--logo-red);
            color: white;
            font-weight: 600;
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
        }
        #signup-button:hover, .wizard-nav-btn.next-step:hover {
            background-color: #b8161d;
            border-color: #b8161d;
        }
        .wizard-nav-btn.prev-step {
            background-color: #6c757d;
            border-color: #6c757d;
            color: white;
            font-weight: 600;
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
        }
        .wizard-nav-btn.prev-step:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }

        #login-link {
            color: var(--logo-red);
            text-decoration: none;
        }
        #login-link:hover {
            color: #b8161d;
            text-decoration: underline;
        }

        #signup-form-container .form-control,
        #signup-form-container .form-select {
            border-radius: 0.25rem;
        }
        #signup-form-container .form-control:focus,
        #signup-form-container .form-select:focus {
            border-color: var(--logo-red);
            box-shadow: 0 0 0 0.25rem rgba(216, 25, 33, 0.25);
        }
        #signup-form-container .form-check-input {
             border-color: #ced4da;
        }
        #signup-form-container .form-check-input:checked {
            background-color: var(--logo-red);
            border-color: var(--logo-red);
        }

        #signup-form-container .form-check-label,
        #signup-form-container .form-floating > label {
            color: #6c757d;
        }
        #signup-form-container > div > .text-center.mb-4 h3 {
             color: #212529;
             font-weight: 700;
        }
        #signup-form-container > div > .text-center.mb-4 .text-muted {
            color: #6c757d !important;
        }
         #signup-form-container p {
            color: #495057;
         }

        .wizard-steps {
            display: flex;
            justify-content: space-around;
            margin-bottom: 2rem;
            list-style: none;
            padding-left: 0;
        }
        .wizard-steps .step {
            display: flex;
            flex-direction: column;
            align-items: center;
            flex-grow: 1;
            position: relative;
        }
        .wizard-steps .step:not(:last-child)::after {
            content: "";
            position: absolute;
            top: 17px;
            left: 50%;
            width: 100%;
            height: 2px;
            background-color: #e9ecef;
            z-index: 1;
        }

        .wizard-steps .step-indicator {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background-color: #e9ecef;
            color: #495057;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            border: 2px solid #e9ecef;
            margin-bottom: 0.5rem;
            z-index: 2;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }
        .wizard-steps .step.active .step-indicator,
        .wizard-steps .step.completed .step-indicator {
            background-color: var(--logo-red);
            border-color: var(--logo-red);
            color: white;
        }
         .wizard-steps .step.completed:not(:last-child)::after {
            background-color: var(--logo-red);
        }

        .wizard-steps .step-label {
            font-size: 0.85rem;
            color: #6c757d;
        }
        .wizard-steps .step.active .step-label {
            color: var(--logo-red);
            font-weight: bold;
        }

        .wizard-step-content {
            display: none;
        }
        .wizard-step-content.active {
            display: block;
        }

        #togglePasswordVisibility i, #toggleConfirmPasswordVisibility i {
            color: #6c757d;
        }
        #togglePasswordVisibility i:hover, #toggleConfirmPasswordVisibility i:hover {
            color: var(--logo-red);
        }
        #capsLockWarning, #passwordMatchWarning {
            font-size: 0.875em;
        }
        .form-control.is-invalid, .form-select.is-invalid {
            border-color: #dc3545;
        }
         .form-check-input.is-invalid ~ .form-check-label {
            color: #dc3545;
        }
        .form-check-input.is-invalid {
            border-color: #dc3545;
        }
        .form-check-input.is-invalid + .form-check-label + .invalid-feedback {
            display: block; 
        }

    </style>
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Sign Up Start -->
        <div class="container-fluid p-0">
            <div class="row g-0" style="min-height: 100vh;">

                <div class="col-lg-7 d-none d-lg-flex flex-column justify-content-between p-5" id="left-panel-signup">
                    <div>
                        <div class="text-center mb-4">
                            <img src="<?=assets()?>/img/logop.jpg" alt="PPhotography Logo" class="rounded-logo">
                        </div>
                        <h1 class="display-4 mb-3 text-center">Join PPhotography</h1>
                        <p class="lead text-center">
                            Create your account in a few easy steps and start exploring!
                        </p>
                    </div>
                     <div>
                        <p class="bottom-text text-center">Capture your moments with us.</p>
                    </div>
                </div>

                <div class="col-lg-5 d-flex flex-column justify-content-center align-items-center p-4 p-sm-5" style="background-color: #FFFFFF;" id="signup-form-container">
                    <div class="w-100" style="max-width: 450px;">

                        <div class="text-center mb-4">
                            <h3 class="mb-1">Create Account</h3>
                        </div>

                        <!-- Wizard Steps Indicator -->
                        <ul class="wizard-steps">
                            <li class="step active" data-step-target="1">
                                <div class="step-indicator">1</div>
                                <div class="step-label">Personal</div>
                            </li>
                            <li class="step" data-step-target="2">
                                <div class="step-indicator">2</div>
                                <div class="step-label">Account</div>
                            </li>
                            <li class="step" data-step-target="3">
                                <div class="step-indicator">3</div>
                                <div class="step-label">Confirm</div>
                            </li>
                        </ul>

                        <form  method="post" action="<?=_routes('register/register.php')?>" id="signupForm" novalidate>
                            <!-- Step 1: Personal Information -->
                            <div class="wizard-step-content active" data-step="1">
                                <h5 class="mb-3 text-center">Personal Information</h5>
                                <div class="form-floating mb-3">
                                    <input name="photographer_fname" type="text" class="form-control" id="photographer_fname" placeholder="John" required>
                                    <label for="photographer_fname">First Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input name="photographer_lname" type="text" class="form-control" id="photographer_lname" placeholder="Doe" required>
                                    <label for="photographer_lname">Last Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input name="photographer_age" type="number" class="form-control" id="photographer_age" placeholder="25" min="16" max="120" required>
                                    <label for="photographer_age">Age</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select name="type_of_photographer" class="form-select" id="type_of_photographer" required>
                                        <option value="" selected disabled>Select type...</option>
                                        <option value="Wedding">Wedding Photographer</option>
                                        <option value="Portrait">Portrait Photographer</option>
                                        <option value="Event">Event Photographer</option>
                                        <option value="Fashion">Fashion Photographer</option>
                                        <option value="Landscape">Landscape Photographer</option>
                                        <option value="Wildlife">Wildlife Photographer</option>
                                        <option value="Product">Product Photographer</option>
                                        <option value="Commercial">Commercial Photographer</option>
                                        <option value="Street">Street Photographer</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <label for="type_of_photographer">Type of Photographer</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input name="phone" type="tel" class="form-control" id="phone" placeholder="09123456789">
                                    <label for="phone">Phone Number (Optional)</label>
                                </div>
                                 <div class="form-floating mb-3">
                                    <textarea name="address" class="form-control" placeholder="Your Address" id="address" style="height: 100px"></textarea>
                                    <label for="address">Address (Optional)</label>
                                </div>
                            </div>

                            <!-- Step 2: Account Details -->
                            <div class="wizard-step-content" data-step="2">
                                <h5 class="mb-3 text-center">Account Details</h5>
                                <div class="form-floating mb-3">
                                    <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com" required>
                                    <label for="email">Email address</label>
                                </div>
                                <div class="form-floating mb-3 position-relative">
                                    <input name="password" type="password" class="form-control" id="password" placeholder="Password" required minlength="6">
                                    <label for="password">Password (min 6 chars)</label>
                                    <span class="position-absolute top-50 end-0 translate-middle-y pe-3" id="togglePasswordVisibility" style="cursor: pointer; z-index: 5;">
                                        <i class="fas fa-eye" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <div id="capsLockWarning" class="form-text text-danger mb-2" style="display: none;">Caps Lock is ON</div>

                                <div class="form-floating mb-3 position-relative">
                                    <input name="confirm_password" type="password" class="form-control" id="confirm_password" placeholder="Confirm Password" required>
                                    <label for="confirm_password">Confirm Password</label>
                                    <span class="position-absolute top-50 end-0 translate-middle-y pe-3" id="toggleConfirmPasswordVisibility" style="cursor: pointer; z-index: 5;">
                                        <i class="fas fa-eye" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <div id="passwordMatchWarning" class="form-text mb-2"></div>
                            </div>

                            <!-- Step 3: Terms & Confirmation -->
                            <div class="wizard-step-content" data-step="3">
                                <h5 class="mb-3 text-center">Confirmation</h5>
                                <div class="form-check mb-4">
                                    <input class="form-check-input" type="checkbox" value="" id="termsCheck" required>
                                    <label class="form-check-label" for="termsCheck">
                                        I agree to the <a href="#" class="text-decoration-none" style="color: var(--logo-red);">Terms and Conditions</a>.
                                    </label>
                                    <div class="invalid-feedback">You must agree to the terms and conditions.</div>
                                </div>
                                <p class="text-muted small">
                                    By clicking "Sign Up", you confirm that you have read and understood our terms of service and privacy policy.
                                </p>
                            </div>

                            <!-- Wizard Navigation -->
                            <div class="d-flex justify-content-between mt-4">
                                <button type="button" class="btn wizard-nav-btn prev-step" id="prevStep" style="display: none;">Previous</button>
                                <button type="button" class="btn wizard-nav-btn next-step" id="nextStep">Next</button>
                                <button type="submit" class="btn w-100" id="signup-button" style="display: none;">Sign Up</button>
                            </div>
                        </form>

                        <p class="text-center mt-4 mb-0">Already have an Account? <a href="<?=page('loginpage')?>" id="login-link">Log In</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
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
    document.addEventListener('DOMContentLoaded', function () {
        const steps = document.querySelectorAll('.wizard-steps .step');
        const stepContents = document.querySelectorAll('.wizard-step-content');
        const nextButton = document.getElementById('nextStep');
        const prevButton = document.getElementById('prevStep');
        const signupButton = document.getElementById('signup-button');
        const signupForm = document.getElementById('signupForm');

        let currentStep = 1;
        const totalSteps = steps.length;

        function updateWizardView() {
            steps.forEach((stepLi, index) => {
                const stepNumber = index + 1;
                stepLi.classList.remove('active', 'completed');
                if (stepNumber < currentStep) {
                    stepLi.classList.add('completed');
                } else if (stepNumber === currentStep) {
                    stepLi.classList.add('active');
                }
            });

            stepContents.forEach(content => {
                content.classList.remove('active');
                if (parseInt(content.dataset.step) === currentStep) {
                    content.classList.add('active');
                }
            });

            prevButton.style.display = currentStep > 1 ? 'inline-block' : 'none';
            if (currentStep === totalSteps) {
                nextButton.style.display = 'none';
                signupButton.style.display = 'inline-block';
                signupButton.classList.add('next-step');
            } else {
                nextButton.style.display = 'inline-block';
                signupButton.style.display = 'none';
            }
        }

        function validateStep(stepNumber) {
            const currentStepContent = document.querySelector(`.wizard-step-content[data-step="${stepNumber}"]`);
            const inputs = currentStepContent.querySelectorAll('input[required], textarea[required], select[required]');
            let isValid = true;
            let firstInvalidField = null;

            inputs.forEach(input => {
                input.classList.remove('is-invalid');
                if(input.type === 'checkbox'){
                    const feedbackElement = input.parentElement.querySelector('.invalid-feedback');
                    if(feedbackElement) feedbackElement.style.display = 'none';
                }

                if (!input.checkValidity()) {
                    input.classList.add('is-invalid');
                     if(input.type === 'checkbox'){
                        const feedbackElement = input.parentElement.querySelector('.invalid-feedback');
                        if(feedbackElement) feedbackElement.style.display = 'block';
                    }
                    isValid = false;
                    if (!firstInvalidField) {
                        firstInvalidField = input;
                    }
                }
            });

            if (stepNumber === 2) {
                const passwordField = document.getElementById('password');
                passwordField.classList.remove('is-invalid');
                if (passwordField.value.length > 0 && passwordField.value.length < 6) {
                    passwordField.classList.add('is-invalid');
                    isValid = false;
                    if (!firstInvalidField) firstInvalidField = passwordField;
                }
                 if (!validatePasswordMatch(false)) {
                    isValid = false;
                     if (!firstInvalidField && document.getElementById('confirm_password').classList.contains('is-invalid')) {
                        firstInvalidField = document.getElementById('confirm_password');
                    }
                }
            }

            if (stepNumber === 3) {
                const termsCheck = document.getElementById('termsCheck');
                termsCheck.classList.remove('is-invalid');
                const feedbackElement = termsCheck.parentElement.querySelector('.invalid-feedback');
                if(feedbackElement) feedbackElement.style.display = 'none';

                if (!termsCheck.checked) {
                    termsCheck.classList.add('is-invalid');
                    if(feedbackElement) feedbackElement.style.display = 'block';
                    isValid = false;
                    if (!firstInvalidField) firstInvalidField = termsCheck;
                }
            }

            if (!isValid && firstInvalidField) {
                firstInvalidField.focus();
            }
            return isValid;
        }


        nextButton.addEventListener('click', function() {
            if (validateStep(currentStep)) {
                if (currentStep < totalSteps) {
                    currentStep++;
                    updateWizardView();
                }
            }
        });

        prevButton.addEventListener('click', function() {
            if (currentStep > 1) {
                currentStep--;
                updateWizardView();
            }
        });

        // Password Toggle, Caps Lock, and Password Match (existing code - keep as is)
        const passwordInput = document.getElementById('password');
        const togglePasswordBtn = document.getElementById('togglePasswordVisibility');
        const capsLockWarning = document.getElementById('capsLockWarning');

        const confirmPasswordInput = document.getElementById('confirm_password');
        const toggleConfirmPasswordBtn = document.getElementById('toggleConfirmPasswordVisibility');
        const passwordMatchWarning = document.getElementById('passwordMatchWarning');

        function setupPasswordToggle(inputField, toggleButton) {
            if (inputField && toggleButton) {
                const eyeIcon = toggleButton.querySelector('i');
                toggleButton.addEventListener('click', function () {
                    const type = inputField.getAttribute('type') === 'password' ? 'text' : 'password';
                    inputField.setAttribute('type', type);
                    eyeIcon.classList.toggle('fa-eye');
                    eyeIcon.classList.toggle('fa-eye-slash');
                });
            }
        }
        setupPasswordToggle(passwordInput, togglePasswordBtn);
        setupPasswordToggle(confirmPasswordInput, toggleConfirmPasswordBtn);

        if (passwordInput && capsLockWarning) {
            function checkCapsLock(event) {
                if (typeof event.getModifierState === 'function') {
                    capsLockWarning.style.display = event.getModifierState("CapsLock") ? "block" : "none";
                } else if (event.originalEvent && typeof event.originalEvent.getModifierState === 'function') {
                     capsLockWarning.style.display = event.originalEvent.getModifierState("CapsLock") ? "block" : "none";
                }
            }
            passwordInput.addEventListener('keyup', checkCapsLock);
            passwordInput.addEventListener('keydown', checkCapsLock);
            passwordInput.addEventListener('focus', function(event){
                 setTimeout(() => {
                    if (typeof event.getModifierState === 'function' && event.getModifierState("CapsLock")) {
                         capsLockWarning.style.display = "block";
                    } else {
                         capsLockWarning.style.display = "none";
                    }
                }, 50);
            });
            passwordInput.addEventListener('blur', () => capsLockWarning.style.display = "none");
        }

        function validatePasswordMatch(showSuccessMessage = true) {
            passwordInput.classList.remove('is-invalid');
            confirmPasswordInput.classList.remove('is-invalid', 'is-valid');
            passwordMatchWarning.textContent = "";

            if (passwordInput.value === "" && confirmPasswordInput.value === "") {
                return true;
            }

            if (confirmPasswordInput.value.length > 0 && passwordInput.value !== confirmPasswordInput.value) {
                passwordMatchWarning.textContent = "Passwords do not match.";
                passwordMatchWarning.className = 'form-text text-danger mb-2';
                confirmPasswordInput.classList.add('is-invalid');
                return false;
            } else if (confirmPasswordInput.value.length > 0 && passwordInput.value === confirmPasswordInput.value) {
                if (showSuccessMessage) {
                    passwordMatchWarning.textContent = "Passwords match!";
                    passwordMatchWarning.className = 'form-text text-success mb-2';
                }
                confirmPasswordInput.classList.add('is-valid');
                return true;
            }
            return true;
        }


        if (passwordInput && confirmPasswordInput) {
            confirmPasswordInput.addEventListener('input', () => validatePasswordMatch());
            passwordInput.addEventListener('input', () => {
                 if(confirmPasswordInput.value.length > 0) validatePasswordMatch();
                 if (passwordInput.value.length > 0 && passwordInput.value.length < 6) {
                     passwordInput.classList.add('is-invalid');
                 } else {
                     passwordInput.classList.remove('is-invalid');
                 }
            });
        }

        // Initial view setup
        updateWizardView();
    });
    </script>
</body>
</html>
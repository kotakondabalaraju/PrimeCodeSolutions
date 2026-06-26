<!DOCTYPE html>
<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Code Solutions</title>
    <link rel="icon" type="images/png" href="../assets/Images/Prime_code_logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/about.css">
    <link rel="stylesheet" href="./assets/css/success-stories.css">
    <link rel="stylesheet" href="./assets/css/blogs.css">
    <link rel="stylesheet" href="./assets/css/contact.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <header class="pcs-header sticky-top">
        <nav class="navbar navbar-expand-lg">
            <div class="container">

                <!-- Logo -->
                <a class="navbar-brand d-flex align-items-center" href="index.php">
                    <img src="/Prime_code/assets/Images/Prime_code_logo.png" alt="Prime Code Solutions" class="logo-img">
                    <div class="ms-2">
                        <span class="logo-text">Prime Code</span>
                        <small class="logo-subtitle d-block">Solutions</small>
                    </div>
                </a>

                <!-- Mobile Toggle -->
                <button class="navbar-toggler" type="button"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#mobileMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navigation -->
                <div class="collapse navbar-collapse" id="mainNavbar">
                    <ul class="navbar-nav mx-auto">

                        <li class="nav-item">
                            <a class="nav-link <?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>" href="index.php">
                                Home
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>" href="about.php">About Us</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link services-link" href="#">
                                Career Courses
                                <i class="bi bi-chevron-down service-arrow"></i>
                            </a>

                            <ul class="dropdown-menu shadow border-0">
                                <li><a class="dropdown-item" href="#">Medical Coding</a></li>
                                <li><a class="dropdown-item" href="#">Medical Billing</a></li>
                                <li><a class="dropdown-item" href="#">Clinical sas</a></li>
                                <li><a class="dropdown-item" href="#">Pharmacology vigilence</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php echo ($currentPage == 'success-stories.php') ? 'active' : ''; ?>" href="success-stories.php">Success Stories</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php echo ($currentPage == 'blogs.php') ? 'active' : ''; ?>" href="blogs.php">Blogs</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>" href="contact.php">Contact</a>
                        </li>

                    </ul>

                    <a href="contact.php" class="quote-btn">
                        Free Consultation
                    </a>

                </div>
                <div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="mobileMenu">

                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title">Prime Code Solutions</h5>

                        <button type="button"
                            class="btn-close"
                            data-bs-dismiss="offcanvas">
                        </button>
                    </div>

                    <div class="offcanvas-body">

                        <ul class="navbar-nav">

                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="about.php">About Us</a>
                            </li>

                            <li class="nav-item">

                                <a class="nav-link d-flex justify-content-between align-items-center"
                                    data-bs-toggle="collapse"
                                    href="#careerCourses">

                                    Career Courses
                                    <i class="bi bi-chevron-down"></i>
                                </a>

                                <div class="collapse" id="careerCourses">

                                    <ul class="list-unstyled ms-3 mt-2">

                                        <li>
                                            <a href="#" class="mobile-submenu">
                                                Medical Coding
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class="mobile-submenu">
                                                Medical Billing
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class="mobile-submenu">
                                                Clinical SAS
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class="mobile-submenu">
                                                Pharmacovigilance
                                            </a>
                                        </li>

                                    </ul>

                                </div>

                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Success Stories</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Blogs</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>

                        </ul>

                        <a href="contact.php" class="quote-btn d-block text-center mt-3">
                            Free Consultation
                        </a>

                    </div>
                </div>
            </div>
        </nav>
    </header>
</body>

</html>
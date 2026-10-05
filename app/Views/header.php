<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>5links.com</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/logo2.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>



<body>
    <div class="container-fluid bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-danger" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <?php 
        $uri = service('uri');
        $segment = $uri->getSegment(1);
        ?>


        <!-- Navbar & Hero Start -->
        <div class="container-fluid p-0">
            <div class="container-fluid position-relative p-0">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3 py-lg-0">
                    <a href=<?= base_url() ?> class="navbar-brand p-0 <?= ($segment == 'home' ? 'active' : '') ?>">
                        <!-- <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>5Licks</h1> -->
                        <img src="img/logo2.png" alt="Logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto py-0 pe-4">
                            <a href="<?= base_url() ?>" class="nav-item nav-link <?= ($segment == '' ? 'active' : '') ?>">Home</a>
                            <a href="<?= base_url('about') ?>" class="nav-item nav-link <?= ($segment == 'about' ? 'active' : '') ?>">About</a>
                            <a href="<?= base_url('menu') ?>" class="nav-item nav-link <?= ($segment == 'menu' ? 'active' : '') ?>">Menu</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu m-0">
                                    <a href="<?= base_url('booking') ?>" class="dropdown-item">Reservation</a>
                                    <a href="<?= base_url('team') ?>" class="dropdown-item">Our Team</a>
                                </div>
                            </div>
                            <a href="<?= base_url('contact') ?>" class="nav-item nav-link <?= ($segment == 'contact' ? 'active' : '') ?>">Contact</a>
                        </div>
                        <a href="<?= base_url('/#app-download') ?>" class="btn btn-danger py-2 px-4">Get The App</a>
                    </div>
                </nav>
            </div>
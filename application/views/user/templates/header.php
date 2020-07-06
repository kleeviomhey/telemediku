<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>telemediku</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('assets/Bootslander/img/logo/'); ?>500x500 full.png" rel="icon">
    <link href="<?= base_url('assets/Bootslander/img/logo/'); ?>500x500 full.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/Bootslander/'); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/Bootslander/'); ?>vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/Bootslander/'); ?>vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/Bootslander/'); ?>vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?= base_url('assets/Bootslander/'); ?>vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url('assets/Bootslander/'); ?>vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/Bootslander/'); ?>vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets/Bootslander/'); ?>css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Bootslander - v2.1.0
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex bg-danger align-items-center">
        <div class="container d-flex align-items-center">

            <div class="logo mr-auto">
                <!-- <h1 class="text-light"><a href="">
                <i class="icofont-first-aid mr-1"></i><span>Telemediku</span></a></h1> -->
                <!-- Uncomment below if you prefer to use an image logo -->
                <a href="<?= base_url(); ?>"><img src="<?= base_url('assets/Bootslander/img/logo/'); ?>500x500 full.png" alt="" class="img-fluid" width="60" height="80">
                    <h1 class="text-light float-right mt-1 ml-2"><span>telemediku</span></h1>
                </a>
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <?php foreach ($menu as $m) : ?>
                        <li><a href="<?= base_url($m['url']); ?>"><?= $m['title']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->
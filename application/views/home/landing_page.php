<?php
defined('BASEPATH') or exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/bootstrap.css" />
    <!-- progress barstle -->
    <link rel="stylesheet" href="css/css-circular-prog-bar.css">
    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- font wesome stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Custom styles for this template -->
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="<?= base_url(); ?>assets/css/responsive.css" rel="stylesheet" />
</head>

<body>
      <!-- header section -->
    <div class="top_container " id="container">
        <header class="header_section">
            <div class="container-fluid ">
                <nav class="navbar navbar-expand-lg custom_nav-container  ">
                    <div class="dropdown">
                        <button class="btn btn-transparant dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Menu
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="<?= base_url(); ?>">Katalog</a>
                            <a class="dropdown-item" href="<?= base_url(); ?>">Peminjaman</a>
                            <a class="dropdown-item" href="<?= base_url(); ?>">Pengembalian</a>
                        </div>
                    </div>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ">
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url(); ?>">Katalog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url(); ?>">Peminjaman</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url(); ?>">Pengembalian</a>
                            </li>
                        </ul>
                    </div>
                    <a href="<?= base_url(); ?>" class="btn profile-wrapper ">
                        <h5>Profil</h5><i class="fas fa-user"></i>
                    </a>
                </nav>
            </div>
        </header>
        <section class="hero_section ">
            <div class="hero-container container">
                <div class="hero_detail-box">
                    <h3>
                        Selamat Datang di
                    </h3>
                    <h1>
                        Electronic Library System
                    </h1>
                    <p>
                        Selamat datang di Electronic library systems Anda! Kami adalah perpustakaan digital yang
                        komprehensif,
                        menawarkan akses mudah ke berbagai macam koleksi buku, jurnal, dan sumber belajar lainnya.
                        Dengan antarmuka yang user-friendly, Anda dapat dengan mudah mencari, meminjam,
                        dan membaca materi yang Anda butuhkan.
                        Nikmati pengalaman membaca yang nyaman dan fleksibel, kapan saja dan di mana saja.
                    </p>
                </div>
                <div class="hero_img-container">
                    <div>
                        <img src="<?= base_url(); ?>assets/images/hero.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end header section -->

    <!-- catalog section -->
    <section class="catalog_section layout_padding">
        <div class="container">
            <h1>Katalog Buku</h1>
            <div class="catalog_container ">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card-deck">
                                <div class="card custom-card">
                                    <div class="card-img-wrapper">
                                        <img class="card-img-top" src="<?= base_url(); ?>assets/images/book-1.jpg"
                                            alt="Card image cap">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">LAUT BERCERITA - LAILA S. CHUDORI</h5>
                                        <a href="#" class="btn btn-detail">Detail</a>
                                    </div>
                                </div>
                                <div class="card custom-card">
                                    <div class="card-img-wrapper">
                                        <img class="card-img-top" src="<?= base_url(); ?>assets/images/book-2.jpg"
                                            alt="Card image cap">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">CANTIK ITU LUKA - EKA KURNIAWAN</h5>
                                        <a href="#" class="btn btn-detail">Detail</a>
                                    </div>
                                </div>
                                <div class="card custom-card">
                                    <div class="card-img-wrapper">
                                        <img class="card-img-top" src="<?= base_url(); ?>assets/images/book-3.jpg"
                                            alt="Card image cap">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">BUANA - JURNAL GEOGRAFI , EKOLOGI DAN KEBENCANAAN</h5>
                                        <a href="#" class="btn btn-detail">Detail</a>
                                    </div>
                                </div>
                                <div class="card custom-card">
                                    <div class="card-img-wrapper">
                                        <img class="card-img-top" src="<?= base_url(); ?>assets/images/book-4.jpg"
                                            alt="Card image cap">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">BUKU PAKET BAHASA INDONESIA SMP KELAS VIII</h5>
                                        <a href="#" class="btn btn-detail">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card-deck">
                                <div class="card custom-card">
                                    <div class="card-img-wrapper">
                                        <img class="card-img-top" src="<?= base_url(); ?>assets/images/book-1.jpg"
                                            alt="Card image cap">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">LAUT BERCERITA - LAILA S. CHUDORI</h5>
                                        <a href="#" class="btn btn-detail">Detail</a>
                                    </div>
                                </div>
                                <div class="card custom-card">
                                    <div class="card-img-wrapper">
                                        <img class="card-img-top" src="<?= base_url(); ?>assets/images/book-1.jpg"
                                            alt="Card image cap">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">CANTIK ITU LUKA - EKA KURNIAWAN</h5>
                                        <a href="#" class="btn btn-detail">Detail</a>
                                    </div>
                                </div>
                                <div class="card custom-card">
                                    <div class="card-img-wrapper">
                                        <img class="card-img-top" src="<?= base_url(); ?>assets/images/book-1.jpg"
                                            alt="Card image cap">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">BUANA - JURNAL GEOGRAFI , EKOLOGI DAN KEBENCANAAN</h5>
                                        <a href="#" class="btn btn-detail">Detail</a>
                                    </div>
                                </div>
                                <div class="card custom-card">
                                    <div class="card-img-wrapper">
                                        <img class="card-img-top" src="<?= base_url(); ?>assets/images/book-1.jpg"
                                            alt="Card image cap">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">BUKU PAKET BAHASA INDONESIA SMP KELAS VIII</h5>
                                        <a href="#" class="btn btn-detail">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                        </div>
                        <button class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-slide="prev">
                            <i class="fa-solid fa-arrow-left" aria-hidden="true"></i>
                        </button>
                        <button class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-slide="next">
                            <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                        </button>
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap.js"></script>
</body>

</html>
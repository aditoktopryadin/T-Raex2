<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>T-raex</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="<?= base_url('assets/css/') ?>user_style.css">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">
    <!-- Navbar -->
    
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <!-- <img src="<?= base_url('assets/images/') ?>logo-dark.svg" alt=""> -->
                T-Raex
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">T-Raex</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav align-items-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" href="#hero">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#reviews">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#team">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#blog">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <section id="hero" class="min-vh-100 d-flex align-items-center text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 data-aos="fade-left" class="textuppercase text-white fw-semibold display-1 main-hero">Welcome to
                        T-Raex
                    </h1>
                    <h5 class="text-white mt-3 mb-4" data-aos="fade-right">Solusi mudah kamu untuk akses KRL</h5>
                    <div class="card mx-auto d-block" style="max-width: 950px;" data-aos="fade-up" data-aos-delay="50">
                        <div class="card-body p-4">
                        <form method="post" action="<?= base_url('user/cari'); ?>">
                            <div class="row">
                                <div class="col-lg-5">
                                <select class="form-select" aria-label="Default select example" name="lok_awal">
                                    <option selected>Tujuan Awal</option>
                                    <?php foreach ($stasiun as $row): ?>
                                        <option value="<?= $row->id ?>">
                                            <?= $row->n_stasiun; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                </div>
                                <div class="col-lg-1 pt-2 pb-2"><span>Ke</span></div>
                                <div class="col-lg-5">
                                <select class="form-select" aria-label="Default select example" name="lok_akhir">
                                    <option selected>Tujuan Akhir</option>
                                    <?php foreach ($stasiun as $row): ?>
                                        <option value="<?= $row->id ?>">
                                        <?= $row->n_stasiun; ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                                </div>
                                <div class="col-lg-1 search">
                                    <button class="btn btn-brand rounded pb-2 pt-2"><i class="bi bi-search" style="font-weight: bold;"></i></button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">About us</h1>
                        <div class="line"></div>
                        <p>We love to craft digital experiances for brands rather than crap and more lorem ipsums and do
                            crazy skills</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6" data-aos="fade-down" data-aos-delay="50">
                    <img src="<?= base_url('assets/images/') ?>about.jpg" alt="">
                </div>
                <div data-aos="fade-down" data-aos-delay="150" class="col-lg-5">
                    <h1>About Elixir</h1>
                    <p class="mt-3 mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit quo reiciendis
                        ad.</p>
                    <div class="d-flex pt-4 mb-3">
                        <div class="iconbox me-4">
                            <i class="ri-mail-send-fill"></i>
                        </div>
                        <div>
                            <h5>We are Awesome</h5>
                            <p>Consectetur adipisicing elit. Corporis nesciunt aut temporibus!</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="iconbox me-4">
                            <i class="ri-user-5-fill"></i>
                        </div>
                        <div>
                            <h5>We are Awesome</h5>
                            <p>Consectetur adipisicing elit. Corporis nesciunt aut temporibus!</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="iconbox me-4">
                            <i class="ri-rocket-2-fill"></i>
                        </div>
                        <div>
                            <h5>We are Awesome</h5>
                            <p>Consectetur adipisicing elit. Corporis nesciunt aut temporibus!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section id="services" class="section-padding border-top">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Awesome Services</h1>
                        <div class="line"></div>
                        <p>We love to craft digital experiances for brands rather than crap and more lorem ipsums and do
                            crazy skills</p>
                    </div>
                </div>
            </div>
            <div class="row g-4 text-center">
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-pen-nib-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">UX Design</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet fugiat sunt distinctio?</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="250">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-stack-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">UI Design</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet fugiat sunt distinctio?</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="350">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-ruler-2-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Logo Design</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet fugiat sunt distinctio?</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="450">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-pie-chart-2-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Digital Marketing</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet fugiat sunt distinctio?</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="550">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-code-box-line"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Machine Learning</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet fugiat sunt distinctio?</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="650">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-user-2-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">UX Design</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet fugiat sunt distinctio?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- COUNTER -->
    <section id="counter" class="section-padding">
        <div class="container text-center">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                    <h1 class="text-white display-4">90,00+</h1>
                    <h6 class="text-uppercase mb-0 text-white mt-3">Total Downloads</h6>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="250">
                    <h1 class="text-white display-4">58K+</h1>
                    <h6 class="text-uppercase mb-0 text-white mt-3">Trusted Clients</h6>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="350">
                    <h1 class="text-white display-4">5M+</h1>
                    <h6 class="text-uppercase mb-0 text-white mt-3">THemes Designed</h6>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="450">
                    <h1 class="text-white display-4">100+</h1>
                    <h6 class="text-uppercase mb-0 text-white mt-3">Team Members</h6>
                </div>
            </div>
        </div>
    </section>

    <!-- PORTFOLIO -->
    <section id="portfolio" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Our Portfolio</h1>
                        <div class="line"></div>
                        <p>We love to craft digital experiances for brands rather than crap and more lorem ipsums and do
                            crazy skills</p>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="150">
                    <div class="portfolio-item image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="<?= base_url('assets/images/') ?>project-1.jpg" alt="">
                        </div>
                        <a href="<?= base_url('assets/images/') ?>project-1.jpg" data-fancybox="gallery" class="iconbox"><i class="ri-search-2-line"></i></a>
                    </div>
                    <div class="portfolio-item image-zoom mt-4">
                        <div class="image-zoom-wrapper">
                            <img src="<?= base_url('assets/images/') ?>project-2.jpg" alt="">
                        </div>
                        <a href="<?= base_url('assets/images/') ?>project-2.jpg" data-fancybox="gallery" class="iconbox"><i class="ri-search-2-line"></i></a>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="250">
                    <div class="portfolio-item image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="<?= base_url('assets/images/') ?>project-3.jpg" alt="">
                        </div>
                        <a href="<?= base_url('assets/images/') ?>project-3.jpg" data-fancybox="gallery" class="iconbox"><i class="ri-search-2-line"></i></a>
                    </div>
                    <div class="portfolio-item image-zoom mt-4">
                        <div class="image-zoom-wrapper">
                            <img src="<?= base_url('assets/images/') ?>project-4.jpg" alt="">
                        </div>
                        <a href="<?= base_url('assets/images/') ?>project-4.jpg" data-fancybox="gallery" class="iconbox"><i class="ri-search-2-line"></i></a>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="350">
                    <div class="portfolio-item image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="<?= base_url('assets/images/') ?>project-5.jpg" alt="">
                        </div>
                        <a href="<?= base_url('assets/images/') ?>project-5.jpg" data-fancybox="gallery" class="iconbox"><i class="ri-search-2-line"></i></a>
                    </div>
                    <div class="portfolio-item image-zoom mt-4">
                        <div class="image-zoom-wrapper">
                            <img src="<?= base_url('assets/images/') ?>project-6.jpg" alt="">
                        </div>
                        <a href="<?= base_url('assets/images/') ?>project-6.jpg" data-fancybox="gallery" class="iconbox"><i class="ri-search-2-line"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- REVIEW -->
    <section id="reviews" class="section-padding bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Testimonials</h1>
                        <div class="line"></div>
                        <p>We love to craft digital experiances for brands rather than crap and more lorem ipsums and do
                            crazy skills</p>
                    </div>
                </div>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                    <div class="review">
                        <div class="review-head p-4 bg-white theme-shadow">
                            <div class="text-warning">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <p>Amazing theme ipsum dolor sit amet consectetur adipisicing elit. Assumenda eum animi
                                rerum ipsam impedit dicta voluptatem.</p>
                        </div>
                        <div class="review-person mt-4 d-flex align-items-center">
                            <img class="rounded-circle" src="<?= base_url('assets/images/') ?>avatar-1.jpg" alt="">
                            <div class="ms-3">
                                <h5>Dianne Russell</h5>
                                <small>UX Architect</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="250">
                    <div class="review">
                        <div class="review-head p-4 bg-white theme-shadow">
                            <div class="text-warning">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <p>Amazing theme ipsum dolor sit amet consectetur adipisicing elit. Assumenda eum animi
                                rerum ipsam impedit dicta voluptatem.</p>
                        </div>
                        <div class="review-person mt-4 d-flex align-items-center">
                            <img class="rounded-circle" src="<?= base_url('assets/images/') ?>avatar-2.jpg" alt="">
                            <div class="ms-3">
                                <h5>Dianne Russell</h5>
                                <small>UX Architect</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="350">
                    <div class="review">
                        <div class="review-head p-4 bg-white theme-shadow">
                            <div class="text-warning">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <p>Amazing theme ipsum dolor sit amet consectetur adipisicing elit. Assumenda eum animi
                                rerum ipsam impedit dicta voluptatem.</p>
                        </div>
                        <div class="review-person mt-4 d-flex align-items-center">
                            <img class="rounded-circle" src="<?= base_url('assets/images/') ?>avatar-3.jpg" alt="">
                            <div class="ms-3">
                                <h5>Dianne Russell</h5>
                                <small>UX Architect</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="450">
                    <div class="review">
                        <div class="review-head p-4 bg-white theme-shadow">
                            <div class="text-warning">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <p>Amazing theme ipsum dolor sit amet consectetur adipisicing elit. Assumenda eum animi
                                rerum ipsam impedit dicta voluptatem.</p>
                        </div>
                        <div class="review-person mt-4 d-flex align-items-center">
                            <img class="rounded-circle" src="<?= base_url('assets/images/') ?>avatar-4.jpg" alt="">
                            <div class="ms-3">
                                <h5>Dianne Russell</h5>
                                <small>UX Architect</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="550">
                    <div class="review">
                        <div class="review-head p-4 bg-white theme-shadow">
                            <div class="text-warning">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <p>Amazing theme ipsum dolor sit amet consectetur adipisicing elit. Assumenda eum animi
                                rerum ipsam impedit dicta voluptatem.</p>
                        </div>
                        <div class="review-person mt-4 d-flex align-items-center">
                            <img class="rounded-circle" src="<?= base_url('assets/images/') ?>avatar-5.jpg" alt="">
                            <div class="ms-3">
                                <h5>Dianne Russell</h5>
                                <small>UX Architect</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="650">
                    <div class="review">
                        <div class="review-head p-4 bg-white theme-shadow">
                            <div class="text-warning">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <p>Amazing theme ipsum dolor sit amet consectetur adipisicing elit. Assumenda eum animi
                                rerum ipsam impedit dicta voluptatem.</p>
                        </div>
                        <div class="review-person mt-4 d-flex align-items-center">
                            <img class="rounded-circle" src="<?= base_url('assets/images/') ?>avatar-6.jpg" alt="">
                            <div class="ms-3">
                                <h5>Dianne Russell</h5>
                                <small>UX Architect</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TEAM -->
    <section id="team" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Team Members</h1>
                        <div class="line"></div>
                        <p>We love to craft digital experiances for brands rather than crap and more lorem ipsums and do
                            crazy skills</p>
                    </div>
                </div>
            </div>
            <div class="row g-4 text-center ">
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="150">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="<?= base_url('assets/images/') ?>person-1.jpg" alt="">
                        </div>
                        <div class="team-member-content">
                            <h4 class="text-white">Jon Doe</h4>
                            <p class="mb-0 text-white">Webflow Artist</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="250">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="<?= base_url('assets/images/') ?>person-2.jpg" alt="">
                        </div>
                        <div class="team-member-content">
                            <h4 class="text-white">Jon Doe</h4>
                            <p class="mb-0 text-white">Webflow Artist</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="350">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="<?= base_url('assets/images/') ?>person-3.jpg" alt="">
                        </div>
                        <div class="team-member-content">
                            <h4 class="text-white">Jon Doe</h4>
                            <p class="mb-0 text-white">Webflow Artist</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="section-padding bg-light" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 text-white fw-semibold">Gete in touch</h1>
                        <div class="line bg-white"></div>
                        <p class="text-white">We love to craft digital experiances for brands rather than crap and more
                            lorem ipsums and do crazy skills</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" data-aos="fade-down" data-aos-delay="250">
                <div class="col-lg-8">
                    <form action="#" class="row g-3 p-lg-5 p-4 bg-white theme-shadow">
                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" placeholder="Enter first name">
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" placeholder="Enter last name">
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="email" class="form-control" placeholder="Enter Email address">
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="text" class="form-control" placeholder="Enter subject">
                        </div>
                        <div class="form-group col-lg-12">
                            <textarea name="message" rows="5" class="form-control" placeholder="Enter Message"></textarea>
                        </div>
                        <div class="form-group col-lg-12 d-grid">
                            <button class="btn btn-brand">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- BLOG -->
    <section id="blog" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Recent News & Articles</h1>
                        <div class="line"></div>
                        <p>We love to craft digital experiances for brands rather than crap and more lorem ipsums and do
                            crazy skills</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="150">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="<?= base_url('assets/images/') ?>blog-post-1.jpg" alt="">
                        </div>
                        <h5 class="mt-4">Web Design 2022</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit sequi quos magni!</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="250">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="<?= base_url('assets/images/') ?>blog-post-2.jpg" alt="">
                        </div>
                        <h5 class="mt-4">Web Design 2022</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit sequi quos magni!</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="350">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="<?= base_url('assets/images/') ?>blog-post-3.jpg" alt="">
                        </div>
                        <h5 class="mt-4">Web Design 2022</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit sequi quos magni!</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-dark">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-3 col-sm-6">
                        <a href="#"><img src="<?= base_url('assets/images/') ?>logo-white.svg" alt=""></a>
                        <div class="line"></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, hic!</p>
                        <div class="social-icons">
                            <a href="#"><i class="ri-twitter-fill"></i></a>
                            <a href="#"><i class="ri-instagram-fill"></i></a>
                            <a href="#"><i class="ri-github-fill"></i></a>
                            <a href="#"><i class="ri-dribbble-fill"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h5 class="mb-0 text-white">SERVICES</h5>
                        <div class="line"></div>
                        <ul>
                            <li><a href="#">UI Design</a></li>
                            <li><a href="#">UX Design</a></li>
                            <li><a href="#">Branding</a></li>
                            <li><a href="#">Logo Designing</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h5 class="mb-0 text-white">ABOUT</h5>
                        <div class="line"></div>
                        <ul>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Career</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h5 class="mb-0 text-white">CONTACT</h5>
                        <div class="line"></div>
                        <ul>
                            <li>New York, NY 3300</li>
                            <li>(414) 586 - 3017</li>
                            <li>www.example.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row g-4 justify-content-between">
                    <div class="col-auto">
                        <p class="mb-0">© Copyright Elixir. All Rights Reserved</p>
                    </div>
                    <div class="col-auto">
                        <p class="mb-0">Designed with 💜 By <a href="https://www.youtube.com/channel/UCYMEEnLzGGGIpQQ3Nu_sBsQ">SALMAN</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="<?= base_url('assets/js/') ?>main.js"></script>
</body>

</html>
<!doctype html>
<html lang="en" class="h-100">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Website Company Profile">
    <meta name="author" content="Fauzans">

    <!-- Title -->
    <title>Digital Creative</title>

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">

    <!-- Custom Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body id="home" class="d-flex flex-column h-100">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light py-4 bg-nav">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="/">
                <img src="assets/img/logo.svg" alt="Digital Creative" width="42" height="42" class="d-inline-block mt--2 me-2">
                <span class="text-body fs-4 fw-bolder">Digital Creative</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse py-3 py-lg-1" id="navbarSupportedContent">
                <!-- Menu -->
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link mx-3" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3" href="#contact">Contact</a>
                    </li>
                </ul>
                <!-- Button -->
                @if (Route::has('login'))
                @auth
                <div class="d-flex mt-3 ms-3 mt-md-0 ms-md-0">
                    @if (Auth::user()->usertype == 'admin')
                    <a href="/admin/dashboard" class="nav-link mx-3">
                        {{ __('Dashboard') }}
                    </a>
                    @endif
                    @if (Auth::user()->usertype == 'user')
                    <a href="/dashboard" class="nav-link mx-3">
                        {{ __('Dashboard') }}
                    </a>
                    @endif
                    {{-- <a href="{{ url('/dashboard') }}" class="nav-link mx-3">Dashboard
                    </a> --}}
                    @else
                    <a href="{{ route('login') }}"
                    class="nav-link mx-3">Log in
                    </a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                    class="nav-link mx-3">Register
                    </a>
                    @endif
                    @endauth
                </div>
                @endif
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-shrink-0">
        <!-- Heroes -->
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5">
                <div class="col-lg-5">
                    <img src="assets/img/heroes.svg" class="d-block mx-lg-auto img-fluid" alt="Digital Creative" loading="lazy">
                </div>
                <div class="col-lg-7">
                    <h1 class="fw-bold lh-2 mb-4">Creative Digital Agency For Your Business Solutions</h1>
                    <p class="lead mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <a href="https://api.whatsapp.com/send?phone=6289631867319&text=Assalamualaikum.." class="btn btn-primary rounded-pill px-4 py-2"><i class="bi bi-whatsapp me-2"></i> Let's talk with us</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services -->
        <div id="services" class="container text-center py-5">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h3 class="fw-bold lh-2 mb-3">OUR SERVICES</h3>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                </div>
            </div>

            <div class="row py-4">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="card border-0 rounded-4 shadow-sm">
                        <div class="card-body p-3 p-sm-5">
                            <div class="feature-icon-1 bg-primary bg-gradient mb-4">
                                <i class="bi-filetype-html"></i>
                            </div>
                            <h3>Web Design</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="card border-0 rounded-4 shadow-sm">
                        <div class="card-body p-3 p-sm-5">
                            <div class="feature-icon-1 bg-primary bg-gradient mb-4">
                                <i class="bi-code-slash"></i>
                            </div>
                            <h3>Web Development</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="card border-0 rounded-4 shadow-sm">
                        <div class="card-body p-3 p-sm-5">
                            <div class="feature-icon-1 bg-primary bg-gradient mb-4">
                                <i class="bi-display"></i>
                            </div>
                            <h3>Digital Marketing</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- About -->
        <div id="about" class="container text-center py-5">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h3 class="fw-bold lh-2 mb-3">ABOUT US</h3>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                </div>
            </div>

            <div class="row align-items-center text-start g-5 py-4">
                <div class="col-lg-5">
                    <img src="assets/img/about.svg" class="d-block mx-lg-auto img-fluid" alt="Digital Creative" loading="lazy">
                </div>
                <div class="col-lg-7">
                    <h4 class="fw-bold lh-2 mb-3">Creative Digital Agency For Your Business Solutions</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    <ul>
                        <li>First list item</li>
                        <li>Second list item with a longer description</li>
                        <li>Third list item to close it out</li>
                    </ul>
                    <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                </div>
            </div>
        </div>

        <!-- Portfolio -->
        <div id="portfolio" class="container text-center py-5">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h3 class="fw-bold lh-2 mb-3">OUR PORTFOLIO</h3>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                </div>
            </div>

            <div class="row text-start py-4">
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 border-0 rounded-4 shadow-sm">
                        <div class="card-body p-4 pb-0">
                            <div class="mb-3">
                                <a href="https://pustakakoding.com/project-php-detail-aplikasi-kasir-jasa-cuci-mobil-dan-motor" target="_blank">
                                    <img src="assets/img/portfolio/pustakakoding-aplikasi-kasir-jasa-cuci-mobil-dan-motor.jpg" alt="Portfolio" class="card-img-top img-fluid rounded-4">
                                </a>
                            </div>
                            <p class="fw-semibold">Aplikasi Kasir Jasa Cuci Mobil dan Motor</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 border-0 rounded-4 shadow-sm">
                        <div class="card-body p-4 pb-0">
                            <div class="mb-3">
                                <a href="https://pustakakoding.com/project-php-detail-aplikasi-manajemen-keuangan-pribadi-single-user" target="_blank">
                                    <img src="assets/img/portfolio/pustakakoding-aplikasi-manajemen-keuangan-pribadi-single-user.jpg" alt="Portfolio" class="card-img-top img-fluid rounded-4">
                                </a>
                            </div>
                            <p class="fw-semibold">DompetKu - Aplikasi Manajemen Keuangan Pribadi (Single User)</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 border-0 rounded-4 shadow-sm">
                        <div class="card-body p-4 pb-0">
                            <div class="mb-3">
                                <a href="https://pustakakoding.com/project-php-detail-aplikasi-manajemen-kas-berbasis-web" target="_blank">
                                    <img src="assets/img/portfolio/pustakakoding-aplikasi-manajemen-kas-berbasis-web.jpg" alt="Portfolio" class="card-img-top img-fluid rounded-4">
                                </a>
                            </div>
                            <p class="fw-semibold">Aplikasi Manajemen Kas Berbasis Web</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 border-0 rounded-4 shadow-sm">
                        <div class="card-body p-4 pb-0">
                            <div class="mb-3">
                                <a href="https://pustakakoding.com/project-php-detail-aplikasi-kasir-penjualan-pulsa" target="_blank">
                                    <img src="assets/img/portfolio/pustakakoding-aplikasi-kasir-penjualan-pulsa.jpg" alt="Portfolio" class="card-img-top img-fluid rounded-4">
                                </a>
                            </div>
                            <p class="fw-semibold">Aplikasi Kasir Penjualan Pulsa</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 border-0 rounded-4 shadow-sm">
                        <div class="card-body p-4 pb-0">
                            <div class="mb-3">
                                <a href="https://pustakakoding.com/project-php-detail-aplikasi-pengelolaan-arsip-surat" target="_blank">
                                    <img src="assets/img/portfolio/pustakakoding-aplikasi-pengelolaan-arsip-surat.jpg" alt="Portfolio" class="card-img-top img-fluid rounded-4">
                                </a>
                            </div>
                            <p class="fw-semibold">Aplikasi Pengelolaan Arsip Surat</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 border-0 rounded-4 shadow-sm">
                        <div class="card-body p-4 pb-0">
                            <div class="mb-3">
                                <a href="https://pustakakoding.com/project-php-detail-sistem-informasi-persediaan-barang-gudang-material" target="_blank">
                                    <img src="assets/img/portfolio/pustakakoding-sistem-informasi-persediaan-barang-gudang-material.jpg" alt="Portfolio" class="card-img-top img-fluid rounded-4">
                                </a>
                            </div>
                            <p class="fw-semibold">Sistem Informasi Persediaan Barang Gudang Material</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact -->
        <div id="contact" class="container text-center pt-4 pb-5">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h3 class="fw-bold lh-2 mb-3">CONTACT US</h3>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                </div>
            </div>

            <div class="row align-items-start text-start g-5 pt-4 pb-5">
                <div class="col-lg-7">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126438.2836607938!2d112.63178300000003!3d-7.978645350000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62822063dc2fb%3A0x78879446481a4da2!2sMalang%2C%20Kota%20Malang%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1718426411607!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-5">
                    <div class="card h-100 border-0 rounded-4 shadow-sm">
                        <div class="card-body p-4 pb-0">
                            <div class="d-flex py-2">
                                <div class="flex-shrink-0">
                                    <i class="bi bi-geo-alt text-primary fs-3"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mb-1">Address</h5>
                                    <p>Malang City</p>
                                </div>
                            </div>
                            <hr class="hr-dotted mt-0">
                            <div class="d-flex py-2">
                                <div class="flex-shrink-0">
                                    <i class="bi bi-whatsapp text-primary fs-4"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mb-1">WhatsApp</h5>
                                    <p>+62 895-3186-7319</p>
                                </div>
                            </div>
                            <hr class="hr-dotted mt-0">
                            <div class="d-flex py-2">
                                <div class="flex-shrink-0">
                                    <i class="bi bi-envelope text-primary fs-4"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mb-1">Email</h5>
                                    <p>mufauzan18@gmail.com</p>
                                </div>
                            </div>
                            <hr class="hr-dotted mt-0">
                            <div class="d-flex py-2">
                                <div class="flex-shrink-0">
                                    <i class="bi bi-clock text-primary fs-4"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mb-1">Working Hours</h5>
                                    <p>Monday - Saturday, 09.00 AM - 16.00 PM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer mt-auto py-4 bg-white">
        <div class="container">
            <div class="d-flex flex-column flex-md-row align-items-center align-items-md-left text-body">
                <div class="copyright text-center mb-2 mb-md-0">
                    &copy; 2024 - <a href="https://pustakakoding.com/" target="_blank" class="fw-bolder">Pustaka Koding</a>. All rights reserved.
                </div>
                <div class="link ms-md-auto">
                    <a href="https://pustakakoding.com/" target="_blank">Terms & Conditions</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
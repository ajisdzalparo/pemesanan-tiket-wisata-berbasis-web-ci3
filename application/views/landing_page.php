<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/style/style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <title>Urban Escapes - Welo Asri</title>
</head>

<body>
    <section id="landing">
        <!-- Navbar  -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top box-shadow bg-hitam">
            <div class="container-fluid d-lg-flex flex-lg-column justify-content-lg-center">
                <a class="navbar-brand text-white d-lg-none" href="#">
                    <img class="logo" src="<?= base_url('assets/img/vector.png') ?>" alt="Welo Asri Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto gap-lg-5">
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="<?= site_url('landing/index'); ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#gallery">Gallery</a>
                        </li>
                        <li class="nav-item d-none d-lg-block">
                            <a class="nav-link" href="<?= site_url('landing/index'); ?>">
                                <img src="<?= base_url('assets/img/vector.png') ?>">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#video">Video</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?= site_url('landing/booking'); ?>">Booking</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Hero -->
        <div class="hero">
            <img src="<?= base_url('assets/img/bg3.png') ?>" class="last-img">
            <img src="<?= base_url('assets/img/bg2.png') ?>" class="mid-img">
            <img src="<?= base_url('assets/img/bg1.png') ?>" class="first-img">
            <img src="<?= base_url('assets/img/burung.png') ?>" class="birds-img">
        </div>

        <div id="cta">
            <a href="<?php echo site_url('Landing/booking'); ?>">Booking Now!</a>
        </div>

        <h5 class="title">WELO ASRI</h5>

        <div id="quote">
            <h1>URBAN ESCAPES</h1>
            <p>"Temukan ketenangan di tengah hiruk-pikuk kota - rasakan kedamaian dalam pelukan alam"</p>
        </div>
    </section>

    <section id="gallery" class="py-5 full-height">
        <div class="container">
            <h2 class="text-center mb-5 text-white">KEINDAHAN WELO ASRI</h2>
            <div class="row align-items-stretch mb-5">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="card border-0 shadow-lg h-100 bg-dark text-white">
                        <div class="card-body p-4 d-flex flex-column justify-content-between">
                            <div>
                                <h3 class="card-title mb-4">Pesona Alam yang Memukau</h3>
                                <p class="card-text">Sungai Welo di Kecamatan Petungkriyono, Pekalongan, telah menjadi destinasi wisata populer karena keindahan alamnya yang masih alami, dengan air jernih berwarna biru kehijauan di beberapa spot.</p>
                            </div>
                            <ul class="list-unstyled mt-4 mb-0">
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Perlengkapan renang</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Body rafting</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Susur sungai</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Penginapan dan camping ground</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card border-0 shadow-lg h-100 bg-dark">
                        <div class="card-body p-0">
                            <div class="slideshow-container rounded-top overflow-hidden">
                                <div class="mySlides">
                                    <img src="<?= base_url('assets/img/slide1.jpg') ?>" class="img-fluid w-100">
                                    <div class="numbertext">1 / 4</div>
                                </div>
                                <div class="mySlides">
                                    <img src="<?= base_url('assets/img/slide2.jpg') ?>" class="img-fluid w-100">
                                    <div class="numbertext">2 / 4</div>
                                </div>
                                <div class="mySlides">
                                    <img src="<?= base_url('assets/img/slide3.jpg') ?>" class="img-fluid w-100">
                                    <div class="numbertext">3 / 4</div>
                                </div>
                                <div class="mySlides">
                                    <img src="<?= base_url('assets/img/slide4.jpg') ?>" class="img-fluid w-100">
                                    <div class="numbertext">4 / 4</div>
                                </div>
                                <a class="prev" onclick="plusSlides(-1)">❮</a>
                                <a class="next" onclick="plusSlides(1)">❯</a>
                            </div>
                            <div class="text-center py-3">
                                <span class="dot" onclick="currentSlide(1)"></span>
                                <span class="dot" onclick="currentSlide(2)"></span>
                                <span class="dot" onclick="currentSlide(3)"></span>
                                <span class="dot" onclick="currentSlide(4)"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm h-100 bg-dark text-white">
                        <div class="card-body text-center d-flex flex-column justify-content-center">
                            <i class="fas fa-water fa-3x text-primary mb-3"></i>
                            <h4 class="card-title">Kedalaman Bervariasi</h4>
                            <p class="card-text">Sungai ini memiliki beberapa titik dengan kedalaman berbeda, cocok untuk berbagai aktivitas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm h-100 bg-dark text-white">
                        <div class="card-body text-center d-flex flex-column justify-content-center">
                            <i class="fas fa-swimmer fa-3x text-primary mb-3"></i>
                            <h4 class="card-title">Aktivitas Seru</h4>
                            <p class="card-text">Mulai dari berenang di area dangkal hingga body rafting di lorong sungai yang menantang.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm h-100 bg-dark text-white">
                        <div class="card-body text-center d-flex flex-column justify-content-center">
                            <i class="fas fa-mountain fa-3x text-primary mb-3"></i>
                            <h4 class="card-title">Pemandangan Indah</h4>
                            <p class="card-text">Semuanya dikelilingi pemandangan indah dan fasilitas yang disediakan untuk kenyamanan pengunjung.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="video" class="full-height py-5">
        <div class="container text-white">
            <h2 class="text-center mb-4 display-4 fw-bold">TEMUKAN WELO ASRI</h2>
            <p class="text-center mb-5 lead">Petualangan Anda dimulai dengan perjalanan ke sini. Lihat peta dan panduan video kami!</p>
            <div class="row g-4">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="card bg-dark border-0 shadow h-100">
                        <div class="card-body">
                            <h3 class="card-title mb-3"><i class="fas fa-map-marker-alt me-2"></i>Lokasi Kami</h3>
                            <div class="ratio ratio-16x9 mb-3">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.0812715887705!2d109.7399164!3d-7.116580399999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e701b60de2d5187%3A0x8cd18a42257e3417!2sWelo%20Asri!5e0!3m2!1sid!2sid!4v1723655983106!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <p class="card-text">Welo Asri, Petungkriyono, Pekalongan, Jawa Tengah</p>
                            <a href="https://maps.app.goo.gl/gbK3qRxwYkBGzozZ9" class="btn btn-outline-light mt-2" target="_blank">Buka di Google Maps</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card bg-dark border-0 shadow h-100">
                        <div class="card-body">
                            <h3 class="card-title mb-3"><i class="fas fa-video me-2"></i>Panduan Perjalanan</h3>
                            <div class="ratio ratio-16x9 mb-3">
                                <iframe src="https://www.youtube.com/embed/t44TQUKzrDQ" allowfullscreen></iframe>
                            </div>
                            <p class="card-text">Ikuti panduan video kami untuk perjalanan yang lancar ke Welo Asri.</p>
                            <a href="#" class="btn btn-outline-light mt-2" data-bs-toggle="modal" data-bs-target="#directionsModal">Petunjuk Arah Tertulis</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Directions Modal -->
    <div class="modal fade" id="directionsModal" tabindex="-1" aria-labelledby="directionsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-dark text-white">
                <div class="modal-header border-bottom-0">
                    <h5 class="modal-title" id="directionsModalLabel">Petunjuk Arah ke Welo Asri</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ol>
                        <li>Mulai perjalanan Anda dari pusat kota Pekalongan.</li>
                        <li>Ikuti Jalan Raya Pekalongan-Kajen menuju arah selatan.</li>
                        <li>Setelah memasuki wilayah Petungkriyono, ikuti petunjuk arah menuju Welo Asri.</li>
                        <li>Perjalanan memakan waktu sekitar 1,5 jam dari pusat kota Pekalongan.</li>
                    </ol>
                    <p class="mt-3">Catatan: Pastikan kendaraan Anda dalam kondisi baik karena sebagian jalan menuju lokasi cukup menantang.</p>
                </div>
                <div class="modal-footer border-top-0">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white py-3">
        <div class="container text-center">
            <span>Developed by Welo Asri | &copy; Welo Asri 2024</span>
        </div>
    </footer>

    <script src="<?= base_url('assets/script/script.js') ?>"></script>
    <script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>
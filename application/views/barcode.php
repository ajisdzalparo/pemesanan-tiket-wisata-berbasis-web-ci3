<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="<?= base_url('assets/style/style.css'); ?>">
 <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
 <title>Booking Confirmation</title>
</head>

<body>
 <section id="pesan">
  <!-- Navbar  -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top box-shadow">
   <div class="container-fluid d-lg-flex flex-lg-column justify-content-lg-center">
    <a class="navbar-brand text-white fw-bold d-lg-none" href="#">
     <img class="logo" src="<?= base_url('assets/img/vector.png') ?>">
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
       <a class="nav-link text-white" href="<?= site_url('landing/index#gallery') ?>">Gallery</a>
      </li>
      <li class="nav-item d-none d-lg-block">
       <a class="nav-link" href="<?= site_url('landing/index'); ?>">
        <img src="<?= base_url('assets/img/vector.png') ?>">
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link text-white" href="<?= site_url('landing/index#video') ?>">Video</a>
      </li>
      <li class="nav-item">
       <a class="nav-link text-white" href="<?= site_url('landing/booking') ?>">Booking</a>
      </li>
     </ul>
    </div>
   </div>
  </nav>
</section>
<section class="barcode-generate">
    <div class="d-flex flex-column gap-2 align-items-center">
        <h2 class="text-white text-center">BOOKING BERHASIL!</h2>
        <img src="<?= $qrcode ?>" alt="QR Code" class="img-fluid w-75 w-md-50">
        <span class="text-white text-center">Scan QR Code saat memasuki tempat wisata!</span>
        <a href="https://wasap.at/CACObO" class="btn btn-success">Whatsapp Pengelola</a>
    </div>
</section>

  <script src="<?= base_url('assets/script/script.js') ?>"></script>
  <script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>
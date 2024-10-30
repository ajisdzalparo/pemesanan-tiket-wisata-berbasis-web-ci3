<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="<?= base_url('assets/style/style.css'); ?>">
 <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
 <title>Urban Escapes</title>
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
       <a class="nav-link text-white" aria-current="page" href="<?= site_url('landing/index') ?>">Home</a>
      </li>
      <li class="nav-item">
       <a class="nav-link text-white" href="<?= site_url('landing/index#gallery') ?>">Gallery</a>
      </li>
      <li class="nav-item d-none d-lg-block">
       <a class="nav-link" href="<?= site_url('landing/index') ?>">
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
<section class="booking">
  <form action="<?= base_url('landing/submit_booking') ?>" method="post" class="p-4 bg-light rounded shadow">
    <h2 class="text-center mb-4">Book Your Escape</h2>
    <div class="booking-item">
      <div class="row g-3 align-items-end">
        <div class="col-md">
          <label for="input_location" class="form-label">Location</label>
          <input type="text" name="location" class="form-control" id="input_location" placeholder="Enter location" required>
        </div>
        <div class="col-md">
          <label for="date" class="form-label">Date</label>
          <input type="date" name="date" class="form-control" id="date" required>
        </div>
        <div class="col-md">
          <label for="time" class="form-label">Time</label>
          <input type="time" name="time" class="form-control" id="time" required>
        </div>
        <div class="col-md">
          <label for="guests" class="form-label">Guests</label>
          <input type="number" name="guests" class="form-control" id="guests" placeholder="1" min="1" required>
        </div>
        <div class="col-md">
          <button type="submit" class="btn btn-success w-100">Book Now</button>
        </div>
      </div>
    </div>
  </form>
</section>

  <script src="<?= base_url('assets/script/script.js') ?>"></script>
  <script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>
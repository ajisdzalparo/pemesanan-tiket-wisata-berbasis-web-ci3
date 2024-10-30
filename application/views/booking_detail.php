<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Details</title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Booking Details</h1>
        <div class="card">
            <div class="card-body">
                <p><strong>Ticket ID:</strong> <?= $booking->id_tiket ?></p>
                <p><strong>Location:</strong> <?= $booking->location ?></p>
                <p><strong>Date:</strong> <?= $booking->date ?></p>
                <p><strong>Guests:</strong> <?= $booking->guests ?></p>
                <!-- Add any additional booking information here -->
            </div>
        </div>
    </div>
    <script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>

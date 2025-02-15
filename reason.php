<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reason Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Footer should always stick to the bottom */
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #111111;
        }

        /* Ensure body takes up full height to avoid the footer floating mid-page */
        html, body {
            height: 100%;
            margin: 0;
        }

        /* Main content to push footer to the bottom */
        .content-wrapper {
            min-height: calc(100vh - 150px); /* Adjust the 150px based on your header/footer height */
        }
    </style>
</head>
<body>

<div class="container-fluid bg-light p-5 bg-hero mb-5">
    <div class="row py-1">
        <div class="col-12 text-center">
            <h1 class="display-3 text-uppercase text-dark mb-md-4">ACELINK BADMINTON </h1>
            <p class="text-white" style="font-size:17px;"></p>
        </div>
    </div>
</div>

<div class="container content-wrapper">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
           <p class="text-danger" style="font-size:30px;">
              <b> Please choose some other court, This court is booked at that time you have selected.</b>
            </p>
            <form  action="showcourts.php" method="post">
                <!-- Simulate a button to confirm that payment is done -->
                <button type="submit" style="height:50px; width:100px;" class="btn btn-primary">OK</button>
            </form>
        </div>
    </div>
</div>
<br><br>
<!-- Footer Start -->
<div class="container-fluid py-4 py-lg-0 footer">
    <div class="row gx-5">
        <div class="col-lg-8">
            <div class="py-lg-4 text-center">
                <p class="text-secondary mb-0">&copy; <a class="text-light fw-bold" href="#">Acelink Badminton</a></p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="py-lg-4 text-center credit">
                <p class="text-light mb-0">Designed by <a class="text-light fw-bold" style="font-family: 'Arial', sans-serif; font-size: 20px;"> M R Gagan</p>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
session_start();
include 'connects.php';

$conn = connectdb();

if (isset($_GET['bno']) && isset($_GET['type'])) {
    $bookingId = $_GET['bno'];
    $userEmail = $_SESSION['EMAIL'];
    $bookingType = $_GET['type']; // Get the type of booking (court or equipment)


    if ($bookingType == 'court') {
        // Query for court booking
        $sql = "SELECT b.*, c.cprice 
                FROM booking b 
                JOIN add_court c ON b.cno = c.cno 
                WHERE b.bno='$bookingId' AND b.uid='$userEmail'";
    } elseif ($bookingType == 'equipment') {
        // Query for equipment booking
        $sql = "SELECT e.*, eq.eprice 
                FROM bookinge e 
                JOIN add_equip eq ON e.eno = eq.eno 
                WHERE e.bno='$bookingId' AND e.uid='$userEmail'";
    } else {
        echo "<script>
                alert('Invalid booking type.');
                window.location.href = 'view_userbooking_details.php';
              </script>";
        exit;
    }

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $amount = ($bookingType == 'court') ? $row['cprice'] : $row['eprice']; // Fetch the correct price
        
    } else {
        echo "<script>
                alert('Invalid booking ID or you do not have access to this booking.');
                window.location.href = 'view_userbooking_details.php';
              </script>";
        exit;
    }
} else {
    echo "<script>
            alert('Invalid request. No booking ID or type provided.');
            window.location.href = 'view_userbooking_details.php';
          </script>";
    exit;
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid bg-primary p-5 bg-hero mb-5">
    <div class="row py-1">
        <div class="col-12 text-center">
            <h1 class="display-3 text-uppercase text-white mb-md-4">Payment for Booking ID: <?php echo $bookingId; ?></h1>
            <p class="text-white" style="font-size:17px;">Please scan the QR code to pay the amount: $<?php echo $amount; ?></p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <h3 class="mb-4">Scan the QR Code to Pay</h3>
            
            <!-- Display the QR code for payment -->
            <img src="img/payment.jpg" alt="QR Code" class="img-fluid mb-4" style="height:250px">
			<!-- Reminder Message -->
           <p class="text-danger" style="font-size:30px;">
                After scanning the QR code and completing your payment, please click the <b>"I Have Paid"</b> button below.
            </p>
            <form action="payment_process.php" method="post">
                <input type="hidden" name="bno" value="<?php echo $bookingId; ?>">
                <input type="hidden" name="amount" value="<?php echo $amount; ?>">
                
                <!-- Simulate a button to confirm that payment is done -->
                <button type="submit" class="btn btn-primary">I Have Paid</button>
            </form>
        </div>
    </div>
</div>
<br><br>
 <!-- Footer Start -->
   
    <div class="container-fluid py-4 py-lg-0 px-5" style="background: #111111;">
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

<?php
$conn->close();
?>

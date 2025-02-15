<?php
session_start();
include 'connects.php';

$conn = connectdb();

if (isset($_POST['bno'])) {
    $bookingId = $_POST['bno'];
    $amount = $_POST['amount'];
    $userEmail = $_SESSION['EMAIL'];
	$bookingType = $_GET['type']; 
    // Set payment status to 'Pending'
    $sql = "INSERT INTO payments (bid, uid, cprice, status) VALUES (?, ?, ?, 'Pending') 
            ON DUPLICATE KEY UPDATE status='Pending'";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('isd', $bookingId, $userEmail, $amount);
    
    if ($stmt->execute()) {
        echo "<script>
                alert('Payment marked as pending. Please wait for admin confirmation.');
                window.location.href = 'user_dashboard.php';
              </script>";
    } else {
        echo "<script>
                alert('Error processing payment. Please try again.');
                window.location.href = 'payment_page.php?bno=' . $bookingId;
              </script>";
    }
}
$conn->close();
?>

<?php

if (isset($_POST['bno'])) {
    $bookingId = $_POST['bno'];
    $amount = $_POST['amount'];
    $userEmail = $_SESSION['EMAIL'];
	$bookingType = $_GET['type']; 
    // Set payment status to 'Pending'
    $sql = "INSERT INTO paymente (bid, uid, eprice, status) VALUES (?, ?, ?, 'Pending') 
            ON DUPLICATE KEY UPDATE status='Pending'";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('isd', $bookingId, $userEmail, $amount);
    
    if ($stmt->execute()) {
        echo "<script>
                alert('Payment marked as pending. Please wait for admin confirmation.');
                window.location.href = 'user_dashboard.php';
              </script>";
    } else {
        echo "<script>
                alert('Error processing payment. Please try again.');
                window.location.href = 'payment_page.php?bno=' . $bookingId;
              </script>";
    }
}
$conn->close();
?>


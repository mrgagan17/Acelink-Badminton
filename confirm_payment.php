<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'connects.php';

$conn = connectdb();

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

if (isset($_GET['bno'])) {
    $bookingId = $_GET['bno'];

    // Prepare the SQL query to update the payment status to 'Completed'
    $sql = "UPDATE payments SET status = 'Completed' WHERE bid = ?";
    $stmt = $conn->prepare($sql);

    // Check if the SQL statement was prepared successfully
    if (!$stmt) {
        die("Error preparing SQL statement: " . $conn->error);
    }

    // Bind the parameter and execute the statement
    $stmt->bind_param('i', $bookingId);

    if ($stmt->execute()) {
        echo "<script>
                alert('Payment confirmed.');
                window.location.href = 'view_booking.php'; // Redirect to admin dashboard after confirmation
              </script>";
    } else {
        die("Error executing SQL statement: " . $stmt->error);
    }

    // Close the statement
    $stmt->close();
} else {
    die("Error: Booking number (bno) not provided.");
}

// Close the database connection
$conn->close();
?>
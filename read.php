<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
    <style>
        /* Set the background image and ensure it covers the entire page */
        body {
            background-image: url('img/ima6.jpg'); /* Check this path */
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            color: white;
        }

        /* Center content vertically and horizontally */
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.6); /* Dark overlay for readability */
            padding: 20px;
        }

        h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.5em;
            margin-bottom: 15px;
        }

        .notice {
            font-size: 1.2em;
            color: #ffcc00; /* Important notice in a bright color */
            margin-bottom: 30px; /* Add space above the button */
        }

        /* Style for the OK button */
        .ok-button {
            background-color: #ffcc00; /* Bright yellow background */
            color: #1a1a1a; /* Dark text */
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 1.2em;
            cursor: pointer;
            text-decoration: none; /* Remove underline */
            transition: background-color 0.3s; /* Smooth transition */
        }

        .ok-button:hover {
            background-color: #ffd700; /* Lighter yellow on hover */
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Thanks for Booking!</h1>
        <p>Your booking has been confirmed.</p>
        <p class="notice"><b style="color:red;">Important Notice:</b> Please make sure to be at the venue on time for your scheduled booking.</p>
        <a href="user_dashboard.php" class="ok-button"><b>OK</b></a> <!-- OK button linking to user_dashboard.php -->
    </div>

</body>
</html>

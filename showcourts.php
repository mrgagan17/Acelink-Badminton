<?php
session_start();
if($_SESSION['EMAIL']==FALSE)
{
	echo '<script type="text/javascript">alert("Please Login with Acelink!"); window.location="login.html"; </script>';
	//header('location:login.html');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PRO PLAYER</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Header Start -->
    <div class="container-fluid bg-dark px-0">
        <div class="row gx-0">
            <div class="col-lg-3 bg-dark d-none d-lg-block">
                <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 class="m-0 display-4 text-primary text-uppercase">Acelink</h1>
                </a>
            </div>
            <div class="col-lg-9">
                <div class="row gx-0 bg-secondary d-none d-lg-flex">
                    <div class="col-lg-7 px-5 text-start">
                        <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                            <i class="fa fa-envelope text-primary me-2"></i>
                            <h6 class="mb-0">Acelink@gmail.com</h6>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2">
                            <i class="fa fa-phone-alt text-primary me-2"></i>
                            <h6 class="mb-0">+831 085 1590</h6>
                        </div>
                    </div>
                    <div class="col-lg-5 px-5 text-end">
                        <div class="d-inline-flex align-items-center py-2">
                            <a class="btn btn-light btn-square rounded-circle me-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="btn btn-light btn-square rounded-circle me-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="btn btn-light btn-square rounded-circle me-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="btn btn-light btn-square rounded-circle me-2" href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="btn btn-light btn-square rounded-circle" href="">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0 px-lg-5">
                    <a href="index.html" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 display-4 text-primary text-uppercase">Acelink</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                   
                        <div class="navbar-nav mr-auto py-0">
                            <a href="user_dashboard.php" class="nav-item nav-link">Dashboard</a>
                            <a href="showcourts.php" class="nav-item nav-link active">Book now</a>
							<a href="view_userbooking_details.php" class="nav-item nav-link">Your bookings</a>
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                        </div>
                        
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Hero Start -->
    <div class="container-fluid bg-primary p-5 bg-hero mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-2 text-uppercase text-white mb-md-4">Book<br>Courts and Equipments</h1><br>
                <a href="user_dashboard.php" class="btn btn-primary py-md-3 px-md-5 me-3">Dashboard</a><br><br>
			<style>
                .highlighted {
                    display: inline-block;
                    background-color: rgba(144, 238, 144, 0.7);
                    color: #005600;
                    padding: 6px 12px;
                    border-radius: 4px;
                    transition: background 0.3s, color 0.3s;
                    margin-top: 10px; /* Adds spacing between the button and links */
                }

                .highlighted:hover {
                    background-color: rgba(60, 179, 113, 0.7);
                    color: #003300;
                }

                /* Aligns the navigation links vertically under the Dashboard button */
                .vertical-nav {
                    display: inline-block;
                    text-align: center; 
                    margin-top: 55px; /* Adds space between the button and the links */
                    margin-bottom: 40px; /* Adds space below the links */
                    padding: 10px; /* Optional: adds padding around the box */
                    background-color: rgba(255, 255, 255, 0.1); /* Optional: adds a background color */
                    border-radius: 5px; /* Optional: adds rounded corners to the box */
                }

                .vertical-nav a {
                    display: block; /* Ensures each link is on a new line */
                    margin: 5px 0; /* Adds space between each link */
                }
            </style>

            <!-- Navigation links appear vertically under the Dashboard button -->
            <div class="vertical-nav">
                <a href="#court" class="nav-item nav-link active highlighted"><b>COURTS</b></a>
                <a href="#equip" class="nav-item nav-link active highlighted"><b>EQUIPMENTS</b></a>
            </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
	
    <!-- Team Start -->
    <div class="container-fluid p-5" id="court">
        <div class="mb-5 text-center">
            <h5 class="text-primary text-uppercase">
            </h5>
            <h1 id="court" class="display-3 text-uppercase mb-0">Book Best Courts</h1><br>
			<b>Book Your Court Today! Don’t wait – ensure you have the perfect spot for your next badminton match by reserving your court now!</b>
        </div>
<center><div id="availability-block" style="
    background-color: #e8f5e9; 
    border: 1px solid #ccc; 
    border-radius: 8px; 
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
    padding: 20px; 
    margin: 10px; 
    width: 1000px; 
    text-align: center;
    transition: box-shadow 0.3s ease, transform 0.3s ease;">

    <p style="color: #F95454; font-size: 1em; line-height: 1.6;">
        <b>Our courts are available for rent throughout the week, including weekends and holidays.</b>
  </p>
	<h6 style="color: red;"><b>NOTE*</b>&nbsp;Extend your booking if needed (Extending your schedule can be done if there is a availability of court).</h6>
    <p style="
        color: #555; 
        font-size: 1em; 
        line-height: 1.6;">
        <strong>Weekdays:</strong> 6:00 AM – 10:00 PM<br>
        <strong>Weekends and Holidays:</strong> 7:00 AM – 11:00 PM
    </p>
	</div>

	<script>
    const block = document.getElementById('availability-block');
    
    block.onmouseover = function() {
        block.style.boxShadow = '0 8px 16px rgba(0, 0, 0, 0.3)';
        block.style.transform = 'scale(1.05)';
    };

    block.onmouseout = function() {
        block.style.boxShadow = '0 4px 8px rgba(0, 0, 0, 0.1)';
        block.style.transform = 'scale(1)';
    };
	</script>
</center><br>
        <div class="row g-5">
          
			<?php  
			
				include 'connects.php';
				$conn=connectdb();


				
				$sql="select * from add_court";

				$result=$conn->query($sql);

					if($result->num_rows>0)
				
					{
						
						while($row=$result->fetch_assoc())
							 
						{

			echo'<div class="col-lg-4 col-md-6">
                <div class="team-item position-relative">
                    <div class="position-relative overflow-hidden rounded">
                        <img class="img-fluid w-100" src="upload/'.$row["cimage"].'" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    
					<div class="position-absolute start-0 bottom-0 w-100 rounded-bottom text-center p-4" style="background: rgba(34, 36, 41, 0.5);">
                        <h5 class="text-uppercase text-light">" '.$row["cname"].'"&nbsp;&nbsp;₹.'.$row["cprice"].'</h5>
						<h5 class="text-uppercase" style="font-size: 16px; color: #FDFD96; ">"'.$row["description"].'"</h5>
                        <center>
						<p class="text-uppercase text-secondary m-0" style="color: #1a1a1a; padding: 2px;">
						<a href="booking.php?cno='.$row["cno"].'" style="color: #00FF00; text-decoration: none; -webkit-text-stroke: 1px #00FF00; text-stroke: 1px black;">Book Court</a>
						</p>
						</center>
					</div>
                </div>
            </div>';
			
						}
						}

						?>
			
			

        </div>
    </div>
    <!-- Team End -->
	
		<!-- Team Start -->
    <div class="container-fluid p-5">
        <div class="mb-5 text-center">
            <h5 class="text-primary text-uppercase">
            </h5>
            <h1 id="equip" class="display-3 text-uppercase mb-0">Book Best Equipments</h1><br>
			<b>Book Now! Don’t miss out on the chance to elevate your badminton game with our premium rackets. Available on a first-come, first-served basis.</b>
        </div>
        <div class="row g-5">
          
			<?php  
			
				
				


				
				$sql="select * from add_equip";

				$result=$conn->query($sql);

					if($result->num_rows>0)
				
					{
						
						while($row=$result->fetch_assoc())
							 
						{

			echo'<div class="col-lg-4 col-md-6">
                <div class="team-item position-relative">
                    <div class="position-relative overflow-hidden rounded">
                        <img class="img-fluid w-100" src="upload/'.$row["cimage"].'" alt="">
                        <div class="team-overlay">
						<b>Terms & Conditions:&nbsp;<br>
							-Rackets are to be returned in the same condition as received.<br>
							-Late returns will incur additional charges.
                        </b>    
                        </div>
                    </div>
					<div class="position-absolute start-0 bottom-0 w-100 rounded-bottom text-center p-4" style="background: rgba(34, 36, 41, 0.5);">
                        <h5 class="text-uppercase text-light"> "'.$row["ename"].'"&nbsp;&nbsp;₹.'.$row["eprice"].'</h5>
						<h5 class="text-uppercase" style="font-size: 16px; color: #FDFD96; ">"'.$row["description"].'"</h5>
						<center>
						<p class="text-uppercase text-secondary m-0" style="color: #1a1a1a;  padding: 1px;">
						<a href="bookinge.php?eno='.$row["eno"].'" style="color: #00FF00; text-decoration: none; -webkit-text-stroke: 1px #00FF00; text-stroke: 1px black;">Book Equipment</a>
						</p>
						</center>
					</div>
                </div>
            </div>';
			
						}
						}

						?>
			
			

        </div>
    </div>
    <!-- Team End -->
    
    
    



    <!-- Class Timetable Start -->
    
    <!-- Class Timetable Start -->
    

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary px-5 mt-5">
        <div class="row gx-5">
            <div class="col-lg-8 col-md-6">
                <div class="row gx-5">
                    <div class="col-lg-4 col-md-12 pt-5 mb-5">
                        <h4 class="text-uppercase text-light mb-4">Get In Touch</h4>
                        <div class="d-flex mb-2">
                            <i class="bi bi-geo-alt text-primary me-2"></i>
                            <p class="mb-0">Ankola</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-envelope-open text-primary me-2"></i>
                            <p class="mb-0">Acelink@gmail.com</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-telephone text-primary me-2"></i>
                            <p class="mb-0">+831 085 1590</p>
                        </div>
                        <div class="d-flex mt-4">
                            <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <h4 class="text-uppercase text-light mb-4">Quick Links</h4>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="user_dashboard.php"><i class="bi bi-arrow-right text-primary me-2"></i>Dashboard</a>
                            <a class="text-secondary mb-2" href="view_userbooking_details.php"><i class="bi bi-arrow-right text-primary me-2"></i>View bookings</a>
							 <a class="text-secondary" href="contact.php"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                        </div>
                    </div>
                   
                </div>
            </div>
           
        </div>
    </div>
   <div class="container-fluid py-4 py-lg-0 px-5" style="background: #111111;">
        <div class="row gx-5">
            <div class="col-lg-8">
                <div class="py-lg-4 text-center">
                    <p class="text-secondary mb-0">&copy; <a class="text-light fw-bold" href="#">Acelink Badminton</a></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="py-lg-4 text-center credit">
                    <p class="text-light mb-0">Designed by <a class="text-dark fw-bold" style="font-family: 'Arial', sans-serif; font-size: 20px;"> M R Gagan <a class="btn btn-dark btn-square rounded-square me-2" href="https://www.linkedin.com/in/m-r-gagan-2866b023a/">
                                <i class="fab fa-linkedin-in"></i>
                            </a></a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-dark py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
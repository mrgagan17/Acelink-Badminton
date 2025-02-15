<?php
session_start(); 
include 'connects.php';
/*
//delete vendor
if(isset($_GET['email']))
{
	$mysqli=connectdb();
	$email=test_input($_GET['email']);
	$query = "delete from vregister where email=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('s',$email);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:view_vendors.php");
}





//delete customer
if(isset($_GET['email']))
{
	$mysqli=connectdb();
	$email=test_input($_GET['email']);
	$query = "delete from register where email=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('s',$email);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:view_vendors.php");
}

*/

//delete feedbacks
if(isset($_GET['email']))
{
	$email=test_input($_GET['email']);
	$mysqli=connectdb();
	$query = "delete from feedback where uid=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('s',$email);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:view_feedback.php");
}


//approve
if(isset($_GET['a']))
{
	$a=test_input($_GET['a']);
	$mysqli=connectdb();
	
	$query1 = "update booking set  status='Approved' where bno='".$a."'";
	$statement = $mysqli->prepare($query1);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->execute();

	
	
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:view_booking.php");
}


//denying requests 
	
if(isset($_GET['b']))
{
	
	$b=test_input($_GET['b']);
	$mysqli=connectdb();

	$query = "update booking set status='Denied' where bno='".$b."'";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:view_booking.php");
}







if(isset($_GET['a']))
{
	$a=test_input($_GET['a']);
	$mysqli=connectdb();
	
	$query1 = "update bookinge set  status='Approved' where bno='".$a."'";
	$statement = $mysqli->prepare($query1);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->execute();

	
	
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:view_booking.php");
}


//denying requests 
	
if(isset($_GET['b']))
{
	
	$b=test_input($_GET['b']);
	$mysqli=connectdb();

	$query = "update bookinge set status='Denied' where bno='".$b."'";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:view_booking.php");
}


 
/* if(isset($_GET['email']))
{
	$email=test_input($_GET['email']);
	$mysqli=connectdb();
	
	$query1 = "update vregister set  status='approved' where email='".$email."'";
	$statement = $mysqli->prepare($query1);
	{
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:approve.php");
}


//denying requests
	
if(isset($_GET['deny']))
{
	
	$deny=test_input($_GET['deny']);
	$mysqli=connectdb();

	$query = "update vregister set  status='denied' where email=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	/* $statement->bind_param('i',$denyid); */
	/* if(!$statement->execute()){ */
		/*die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:approve.php");
 }  */

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
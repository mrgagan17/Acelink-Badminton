<?php
//session_start(); 
if(isset($_POST['btnsubmit']))
{
include 'connects.php';
$Firstname=test_input($_POST['Firstname']);
$Lastname=test_input($_POST['Lastname']);
$Dob=test_input($_POST['Dob']);
$Email=test_input($_POST['Email']);
$Age=test_input($_POST['Age']);
$Mobile=test_input($_POST['Mobile']);
$Address=test_input($_POST['Address']);
$City=test_input($_POST['City']);
$State=test_input($_POST['State']);
$Password=test_input($_POST['Password']);

$CPassword=test_input($_POST['CPassword']);

$rdate= date('d-m-y');



//mysql_connect("localhost", "root","");
$mysqli = connectdb();
$sql="select * from register where Email='".$Email."'";
	$result=$mysqli->query($sql);
	if($result->num_rows>0)
	{
		echo '<script type="text/javascript">alert("Email  already exists. Please spcify another emailID.!"); window.history.back();</script>';
	}
	else
	{
		$query = "INSERT INTO register(Firstname,Lastname,Dob,Email,Age,Mobile,Address,City,State,Password,CPassword,rdate) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
		$statement = $mysqli->prepare($query);
		//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
		$statement->bind_param('ssssiissssss',$Firstname,$Lastname,$Dob,$Email,$Age,$Mobile,$Address,$City,$State,$Password,$CPassword,$rdate);



if($statement->execute())
{
	echo '<script type="text/javascript">alert("Your Details sent to Admin successfully!"); window.location="index.html"; </script>';
}
else
{
   echo '<script type="text/javascript">alert("Error... try again!"); </script>';
}
$statement->close();
	}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>



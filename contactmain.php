<?php
//session_start(); 
if(isset($_POST['btnsubmit']))
{
include 'connects.php';
$Name=test_input($_POST['Name']);
$Email=test_input($_POST['Email']);
$Mobile=test_input($_POST['Mobile']);
$Message=test_input($_POST['Message']);
$fdate= date('d-m-y');


//mysql_connect("localhost", "root","");
$mysqli = connectdb();
$query = "INSERT INTO feedback(Name,Email,Mobile,Message,fdate) VALUES(?,?,?,?,?)";
$statement = $mysqli->prepare($query);
//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
$statement->bind_param('sssss',$Name,$Email,$Mobile,$Message,$fdate);



if($statement->execute())
{
	echo '<script type="text/javascript">alert("Your Message sent to Admin successfully!"); window.location="index.html"; </script>';
}
else
{
   echo '<script type="text/javascript">alert("Error... in posting feedback try again!"); </script>';
}
$statement->close();
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

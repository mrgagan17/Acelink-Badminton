<?php
session_start(); 
if(isset($_POST['btnsubmit']))
{
include 'connects.php';
$bdate=test_input($_POST['bdate']);
$btime=test_input($_POST['btime']);
$descr=test_input($_POST['descr']);
$bkdate= date('d-m-y');


//mysql_connect("localhost", "root","");
$mysqli = connectdb();
$query = "INSERT INTO bookinge(uid,eno,bdate,btime,descr,bkdate) VALUES(?,?,?,?,?,?)";
$statement = $mysqli->prepare($query);
//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
$statement->bind_param('ssssss',$_SESSION['EMAIL'],$_SESSION['ENO'],$bdate,$btime,$descr,$bkdate);



if($statement->execute())
{
	echo '<script type="text/javascript">alert("Booked Equipment Successfully! Please wait for admin approval."); window.location="user_dashboard.php"; </script>';
}
else
{
   echo '<script type="text/javascript">alert("Error... in booking Equipment try again!"); </script>';
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
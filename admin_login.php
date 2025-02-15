<?php
session_start();
include 'connects.php';
if(isset($_POST['btn_submit']))
{
$Name=test_input($_POST['Name']);
$Password=test_input($_POST['Password']);
//$Password=md5($Password);

//mysql_connect("localhost", "root","");
$conn=connectdb();

	$sql="Select * from admin where Name= '".$Name."' and Password= '".$Password."'";
	$result=$conn->query($sql);
	if($result->num_rows>0)
	{
			
				while($row=$result->fetch_assoc())
				{
				
				$_SESSION['EMAIL']=$row['Email'];
				$_SESSION['NAME']=$row['Name'];	
				$_SESSION['PASSWORD']=$row['Password'];	
				}
				header("location:AdminDashboard.php");
				
	}
	else
	{
		//header("Location:login.html");
		echo'<script type="text/javascript">alert("Incorrect Username or Password");window.history.back(); </script>';
	
	}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

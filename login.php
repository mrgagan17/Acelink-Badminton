<?php
session_start();
include 'connects.php';
if(isset($_POST['btnsubmit']))
{
$Email=test_input($_POST['Email']);
$Password=test_input($_POST['Password']);
//$Password=md5($Password);

//mysql_connect("localhost", "root","");
$conn=connectdb();

	$sql="Select * from register where Email= '".$Email."' and Password= '".$Password."'";
	$result=$conn->query($sql);
	if($result->num_rows>0)
	{
			
				while($row=$result->fetch_assoc())
				{
				
				$_SESSION['NAME']=$row['Name'];
				$_SESSION['EMAIL']=$row['Email'];	
				}
				header("location: user_dashboard.php");
				
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

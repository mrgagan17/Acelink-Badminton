<?php
//session_start(); 
if(isset($_POST['btncrt']))
{
include 'connects.php';
$cname=test_input($_POST['cname']);
$ctype=test_input($_POST['ctype']);
$cprice=test_input($_POST['cprice']);
$description=test_input($_POST['description']);
$pimage=$_FILES['pimage']['name'];
$rdate= date('d-m-y');

//mysql_connect("localhost", "root","");
$mysqli = connectdb();
$query = "INSERT INTO add_court(cname,ctype,cprice,description,cimage,rdate) VALUES(?,?,?,?,?,?)";
$statement = $mysqli->prepare($query);
//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
$statement->bind_param('ssssss',$cname,$ctype,$cprice,$description,$pimage,$rdate);

if($statement->execute())
{
	move_uploaded_file($_FILES["pimage"]["tmp_name"], "upload/".$_FILES["pimage"]["name"]);
	echo '<script type="text/javascript">alert("Court Added Successfully!"); window.history.back();</script>';
}
else
{
   echo '<script type="text/javascript">alert("Error... try again!"); </script>';
}
$statement->close();

}



if(isset($_POST['btneqp']))
{
include 'connects.php';
$ename=test_input($_POST['ename']);
$eqty=test_input($_POST['eqty']);
$eprice=test_input($_POST['eprice']);
$description=test_input($_POST['description']);
$pimage=$_FILES['pimage']['name'];
$rdate= date('d-m-y');

//mysql_connect("localhost", "root","");
$mysqli = connectdb();
$query = "INSERT INTO add_equip(ename,eqty,eprice,description,cimage,rdate) VALUES(?,?,?,?,?,?)";
$statement = $mysqli->prepare($query);
//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
$statement->bind_param('ssssss',$ename,$eqty,$eprice,$description,$pimage,$rdate);

if($statement->execute())
{
	move_uploaded_file($_FILES["pimage"]["tmp_name"], "upload/".$_FILES["pimage"]["name"]);
	echo '<script type="text/javascript">alert("Equipment Added Successfully!"); window.history.back();</script>';
}
else
{
   echo '<script type="text/javascript">alert("Error... try again!"); </script>';
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

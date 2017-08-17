<?php
include_once("dbconnect.php");

if (isset($_POST['register']))
 {
	

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dob  = $_POST['dob'];
$class = $_POST['class'];

$sql="INSERT INTO `portal_users`( `name`, `email`, `phone`, `dob`, `class`) VALUES ('$name','$email','$phone','$dob','$class')";

if(mysqli_query($connect,$sql))
{
	header ('Location:assignment(page1).php?success=1');
}
else
{
header ('Location:assignment(page1).php?success=0');	
}
}


?>
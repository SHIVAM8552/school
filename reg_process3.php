<?php

if (isset($_POST['register'])) {
	

$email = $_POST['email'];
$password = $_POST['password'];


echo "Your Information: Email id:".$email." <br> Password: ".$password;}
else{
	echo "Access Forbidden!!!";
}
?>
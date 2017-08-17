<?php

if (isset($_POST['register'])) {
	

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$description  = $_POST['description'];

echo "Your Information: <br/> Name:".$name." <br> Email: ".$email." <br> Subject: ".$subject." <br> description: ".$description;}
else{
	echo "Access Forbidden!!!";
}
?>
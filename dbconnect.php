<?php
$host="localhost";
$username="root";
$pass="";
$dbname="portal_db";

$connect=mysqli_connect($host,$username,$pass,$dbname);

if(!$connect)
{
echo "Some error occured!! Please try again later!!!";
}
?>

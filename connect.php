<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "grocery";
$con = mysqli_connect($servername, $username, $password, $dbname);
// $con = mysqli_connect("localhost","root","","grocery"); 
if(mysqli_connect_errno())
{
	echo "Failed to establish connection with the database";
}

else{
	// echo "Connection with database established successfully";
}
?>
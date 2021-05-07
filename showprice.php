<?php
include "connect.php";
$x = $_POST["id"];


if($x == "1")
{
	// run query to fetch the price of item 1
	$sql = "SELECT `price` FROM `udmart` WHERE `name`='milk'";
	$result = mysqli_query($con, $sql);
	if($result)
	{
		$row = mysqli_fetch_assoc($result);
		echo "Price: INR ".$row['price']."/-";
		echo "<br>";
	}	
}

if($x=="2")
{
	// run query to fetch the price of item 2
	$sql = "SELECT `price` FROM `udmart` WHERE `name`='coke'";
	$result = mysqli_query($con, $sql);
	if($result)
	{
		$row = mysqli_fetch_assoc($result);
		echo "Price: INR ".$row['price']."/-";
		echo "<br>";
	}	
}

if($x=="3")
{
	// run query to fetch the price of item 3
	$sql = "SELECT `price` FROM `udmart` WHERE `name`='bread'";
	$result = mysqli_query($con, $sql);
	if($result)
	{
		$row = mysqli_fetch_assoc($result);
		echo "Price: INR ".$row['price']."/-";
		echo "<br>";
	}	
}

// $sql = "SELECT * FROM udmart";
// $result = mysqli_query($con, $sql);
// if(mysqli_num_rows($result))
// {
// 	for($i=0;$i<1;$i++)
// 	{
// 		$row = mysqli_fetch_assoc($result);
// 		echo "Price: INR ".$row['price']."/-";
// 		echo "<br>";
// 	}
// }

mysqli_close($con); // close the connection with database
?>
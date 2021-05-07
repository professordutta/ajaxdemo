<?php
include "connect.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>UDMART</title>
	<!-- include the link for jquery script -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<script src="jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function(){
			var FREQ = 1000;
			function fetchmydata(){
				setTimeout(function(){
					fetchprice();
					fetchmydata();
				}, FREQ);
			}
			fetchprice();
			fetchmydata();
			function fetchprice(){
				var id = 1;
				$("#price1").load("showprice.php",{id:"1"});
				$("#price2").load("showprice.php",{id:"2"});
				$("#price3").load("showprice.php",{id:"3"});
			}

		});
	</script>
</head>
<body>
	<div class="header">
		<h1 style="text-align: center; background-color: #2c82c9;color: #FFFFFF">Welcome to UDMart</h1>
	</div>
	<div class="milk-container">
		<div class="milk-products">
			<img src="amul.png" style="width:300px; height: 300px;">
			<div id="price1">
			</div>	
		</div>
		<div class="milk-products">
			<img src="coke.png" style="width:150px; height: 300px;">
			<div id="price2">
			</div>	
		</div>
		<div class="milk-products">
			<img src="bread.png" style="width:300px; height: 300px;">
			<div id="price3">
			</div>	
		</div>
	</div>
	
</body>
</html>
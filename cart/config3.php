<?php
	$conn = new mysqli("localhost","root","","salon_cart_system");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>
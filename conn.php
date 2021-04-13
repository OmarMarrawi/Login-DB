<?php
	$conn = mysqli_connect("localhost", "root", "", "db_modal");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>
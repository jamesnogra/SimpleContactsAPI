<?php

	$servername = "localhost";
	$username = "contacts_user";
	$password = "OOZ3oOp2BZSUa4r9";
	$dbname = "test";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

?>
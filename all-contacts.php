<?php

	require_once('db.php');

	$sql = "SELECT * FROM contacts";
	$result = $conn->query($sql);

	$rows = array();
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	        $rows[] = $row;
	    }
	}
	print json_encode($rows);

	$conn->close();

?>
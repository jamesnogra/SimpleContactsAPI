<?php

	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	require_once('db.php');

	$sql = 'INSERT INTO contacts (key, name, address, photo) VALUES ("'.bin2hex(random_bytes(8)).'", "'.$_POST['name'].'", "'.$_POST['address'].'", "'.$_POST['photo'].'", )';

	if ($conn->query($sql) === TRUE) {
	    $rows = array(
			'status'		=> 1,
			'mesage' 		=> 'Contact has been added',
		);
	} else {
	    $rows = array(
			'status'		=> ,
			'mesage' 		=> 'Fail in adding contact!',
			'error'			=> $conn->error,
		);
	}
	
	print json_encode($rows);

	$conn->close();

?>
<?php

	require_once('db.php');

	$sql = 'DELETE FROM contacts WHERE id="'.$_POST['id'].'"';
	if ($conn->query($sql) === TRUE) {
	    $rows = array(
			'status'		=> 1,
			'mesage' 		=> 'Contact has been deleted',
		);
	} else {
	    $rows = array(
			'status'		=> 0,
			'mesage' 		=> 'Fail in deleting contact!',
			'error'			=> $conn->error,
			'query'			=> $sql
		);
	}
	
	print json_encode($rows);

	$conn->close();

?>
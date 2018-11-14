<?php

	require_once('db.php');

	$sql = 'INSERT INTO contacts (key, name, address, photo) VALUES ("'.bin2hex(random_bytes(8)).'", "'.$_POST['name'].'", "'.$_POST['address'].'", "'.$_POST['photo'].'", )';
	echo $sql;

	$conn->close();

?>
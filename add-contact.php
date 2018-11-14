<?php

	require_once('db.php');

	$sql = 'INSERT INTO contacts (key, name, address, photo) VALUES ("'.bin2hex(random_bytes(8)).'", "'.$_POST['name'].'", "'.$_POST['address'].'", "'.$_POST['photo'].'", )';
	echo $sql;
	$result = $conn->query($sql);

	$rows = array(
		'status'		=> 1,
		'mesage' 		=> 'User has been added',
	);
	print json_encode($rows);

	$conn->close();

?>
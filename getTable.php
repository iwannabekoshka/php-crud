<?php
	$mysqli = new mysqli('localhost', 'root', '', 'php-crud')
	or die(mysqli_error($mysqli));
	$result = $mysqli->query("SELECT * FROM data")
	or die($mysqli->error);

	$arr = array();
	while ($row = $result->fetch_assoc()) {
		array_push($arr, $row);
	}
	echo json_encode($arr);

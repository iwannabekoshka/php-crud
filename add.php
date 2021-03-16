<?php
header('Location: /php-crud');

$mysqli = new mysqli('localhost', 'root', '', 'php-crud')
or die(mysqli_error($mysqli));

if (isset($_POST['save'])) {
	$name = $_POST['name'];
	$color = $_POST['color'];

	$mysqli->query("INSERT INTO data (name, color) VALUES ('$name', '$color')")
	or die($mysqli->error);
}
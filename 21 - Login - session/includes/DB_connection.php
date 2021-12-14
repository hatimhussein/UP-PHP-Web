<?php

$connection = mysqli_connect('127.0.0.1', 'root', '', 'khalil');

if (!$connection) {
	echo "Connection Failed";
	die("Connection Failed: " . mysqli_connect_error());
}


?>
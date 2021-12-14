<?php

session_start();
include_once('includes/DB_connection.php');

if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
	header("Location: login.php");
}

$id = $_SESSION['user_id'];
$query = "select * from admins where id = $id limit 1";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);



echo "<h2>Welcome " . $row['name'] . "</h2>";
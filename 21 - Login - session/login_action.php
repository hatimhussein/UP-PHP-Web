<?php
session_start();

include_once('includes/DB_connection.php');
	

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$email = $_POST['email'];
	$password = $_POST['password'];
	$enc_password = md5($password);

	$query = "select * from admins where email = '$email' AND password = '$enc_password' limit 1";
	$result = mysqli_query($connection, $query);

	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['user_id'] = $row['id'];
		header("Location: profile.php");
	}else{
		echo "<h2>Login Faield</h2>";
	}
}
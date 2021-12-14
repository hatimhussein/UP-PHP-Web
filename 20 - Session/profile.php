<?php

	session_start();

if (isset($_SESSION['user_id'])) {
	echo "<h2>Welcome <a href='logout.php'>Logout</a> </h2>";
}else{
	header("Location: login.php");
}
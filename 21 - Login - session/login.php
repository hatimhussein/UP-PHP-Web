<?php
session_start();

if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
	header("Location: profile.php");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>

	<form action="login_action.php" method="POST">
		<input type="email" name="email" placeholder="User Name">
		<br>
		<br>
		<input type="password" name="password" placeholder="Password">
		<br>
		<br>

		<input type="submit" value="Login">
	</form>

</body>
</html>
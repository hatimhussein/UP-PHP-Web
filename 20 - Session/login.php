<?php

	session_start();

	if (isset($_SESSION['user_id'])) {
		header("Location: profile.php");
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form  action="login_action.php" method="POST">
	
	<input type="email" name="" placeholder="Email">
	<br>
	<br>

	<input type="password" name="" placeholder="Password">
	<br>
	<br>

	<input type="submit" name="" value="Login">

</form>

</body>
</html>
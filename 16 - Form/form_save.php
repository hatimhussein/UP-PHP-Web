<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<form action="save.php" method="POST" enctype="multipart/form-data">
		<input type="text" name="user_name" placeholder="User Name">
		<br>
		<br>
		<input type="email" name="user_email" placeholder="User Email">
		<br>
		<br>
		<input type="password" name="user_password" placeholder="User Password">
		<br>
		<br>
		<input type="file" name="user_file">
		<br>
		<br>
		<input type="submit" name="user_submit" value="Save">
	</form>
</body>
</html>
<?php
include_once('includes/appStyle.php');
include_once('includes/appJS.php');
include_once('includes/DB_connection.php');


			// students: id, name, email, birth_date, nationality

			/*
				create table students (
				id int primary key auto_increment,
				name text,
				email text,
				birth_date text,
				nationality text
			);
			*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>Create Student</title>
</head>
<body>

	<div class="container">

		<div class="row">
			<a href="students_paging.php">View Students</a>
		</div>
		

		<?php

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$birth_date = $_POST['birth_date'];

			// validation

			$query = "INSERT INTO students (name, email, birth_date) VALUES ('$name', '$email', '$birth_date')";

			$result = mysqli_query($connection, $query);

			if ($result) {
				echo '<div class="row"><div class="col-12"><div class="alert alert-success">New record created</div></div></div>';				
			} else {
				echo '<div class="row"><div class="col-12"><div class="alert alert-danger">Failed to create a new record</div></div></div>';				
			}
		}

		?>


		<div class="row">
			<div class="col-12">
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) . '?id=564544'; ?>" method="POST" id="my-form" enctype="multipart/form-data">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" id="name" class="form-control">
					</div>

					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" id="email" class="form-control">
					</div>

					<div class="form-group">
						<label for="birth_date">Birth of Date</label>
						<input type="date" name="birth_date" id="birth_date" class="form-control">
					</div>

					<button class="btn btn-primary" type="submit" id="save-btn">Save</button>
				</form>
			</div>
		</div>
	</div>

</body>
</html>

<script type="text/javascript">
	$('#save-btn').click(function (event) {
		event.preventDefault();

		var result = confirm("Are you sure?");

		if (result == true) {
			$('#my-form').submit();
		}
	});
</script>
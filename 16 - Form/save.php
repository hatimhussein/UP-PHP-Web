<?php

if (isset($_FILES['user_file'])) {
	$file_name 	   = $_FILES['user_file']['name'];
	$file_tmp_name = $_FILES['user_file']['tmp_name'];
	$file_size = $_FILES['user_file']['size'];
	$file_type = $_FILES['user_file']['type'];

	$file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
	echo $file_ext;

    $file_name = uniqid() . '.' . $file_ext;
	$path = "uploads/" . $file_name;
	move_uploaded_file($file_tmp_name, $path);
}


 if ($_SERVER['REQUEST_METHOD'] == 'POST') {

 	if ( isset($_POST['user_name']) && isset($_POST['user_email']) &&
 		 !empty($_POST['user_name']) && !empty($_POST['user_email']) &&
 		 ( strlen($_POST['user_password']) >= 8 && is_numeric($_POST['user_password']) )
 	 ) {
 		echo $_POST['user_name'] . ' - ' . $_POST['user_email'];
 	}else{
 		echo "Please enter correct info";
 	}

 }else{
 	echo "Please use POST request!";
 }


<?php

include_once ('db_con.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if( isset($_POST['user_email']) && isset($_POST['user_password'])
        && !empty(trim($_POST['user_email'])) && !empty(trim($_POST['user_password']))
    ){
        insertUser($con);
    }else{
        echo 'Please enter your info!';
    }
}else{
    echo 'Please use POST Request!';
}

function insertUser($con){
    $email = $_POST['user_email'];
    $password = $_POST['user_password'];

    $query = "insert into users(id, email, password) values(1, '$email', '$password')";
    $result = mysqli_query($con, $query);
}







//$query = "INSERT INTO students (name, email, birth_date, nationality) VALUES ('$name', '$email', '$birth_date', '$nationality')";
//
//$result = mysqli_query($connection, $query);
//
//if ($result) {
//    echo '<div class="row"><div class="col-12"><div class="alert alert-success">New record created</div></div></div>';
//} else {
//    echo '<div class="row"><div class="col-12"><div class="alert alert-danger">Failed to create a new record</div></div></div>';
//}

<?php

session_start();

$_SESSION['user_id'] = 105;

header("Location: profile.php");
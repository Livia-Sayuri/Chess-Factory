<?php
session_start();
include('connection.php');

if(empty($_POST['user']) || empty($_POST['password'])) {
	header('Location: index.php');
	exit();
}

$user = mysqli_real_escape_string($connection, $_POST['user']);
$password = mysqli_real_escape_string($connection, $_POST['password']);

$query = "select user_id, user from user where user = '{$user}' and password = md5('{$password}')";

$result = mysqli_query($connection, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['user'] = $user;
	header('Location: home.php');
	exit();
} else {
	$_SESSION['not_authenticated'] = true;
	header('Location: index.php');
	exit();
}
<?php

if (isset($_POST['registerbtn'])) {
	
	include_once 'database.php';

	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password1 = mysqli_real_escape_string($conn, $_POST['password1']);
	$email1 = mysqli_real_escape_string($conn, $_POST['email1']);

	if (empty($username) || empty($password1) || empty($email1)) {
		header("Location: ../register.php?register=empty");
	exit();
	} else{
		if (!preg_match("/^[a-zA-z]*$/", $username)) {
			header("Location: ../register.php?register=invalid");
		exit();
		} else{
			if (!filter_var($email1, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../register.php?register=email");
	exit();
			} else {
				$sql = "SELECT * FROM users WHERE username = '$username1'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					header("Location: ../register.php?register=usertaken");
	exit();
				} else{
					//hashing the  password
					$hashedPwd = password_hash($password1, PASSWORD_DEFAULT);
					//insert the user into db
					$sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$hashedPwd', '$email1'); ";

					mysqli_query($conn, $sql);
					header("Location: ../login.php");
	exit();
				}
			}
		}
	}

} else {
	header("Location: ../register.php");
	exit(); }

	
<?php

session_start();

if (isset($_POST['loginbtn'])) {

	include 'database.php';

	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	//Error handlers
	//Check if inputs are empty
	if (empty($username) || empty($password)) {
		header("Location: ../login.php?login=empty");
	exit();
	} else {
		$sql = "SELECT * FROM users WHERE username='$username' OR email='$username' ";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		$passwordSql = "SELECT * FROM users WHERE password='$password'";

		if ($resultCheck < 1) {
			header("Location: ../login.php?login=errorres");
	exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				$hashedPwdCheck = password_verify($password, $row['password']);
				if ($hashedPwdCheck == false) {
					header("Location: ../login.php?login=errorpass");
	exit();
				} elseif ($hashedPwdCheck == true){
					//log in the user here
					$_SESSION['id'] = $row['id'];
					$_SESSION['username'] = $row['username'];
					$_SESSION['password'] = $row['password'];

					header("Location: ../index.php?username=".$row['username']);
	exit();

				}
			}
		}
	}
} else {
	header("Location: ../login.php?login=error");
	exit();
}
<?php 



#if (isset($_POST['submit'])) {
	#
	//session_unset();
	//session_destroy();
	
	//exit();
	//include 'index.php';
//}

if (isset($_POST['logout'])) {

header("Cache-Control", "no-store, no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
session_start();
session_unset();
session_destroy();
header("Location: ../login.php");

exit();

}
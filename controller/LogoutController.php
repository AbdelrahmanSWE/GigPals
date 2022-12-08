<?php


if(isset($_POST["submitLogout"])){
	include'../models/UserClass.php';
	if ($_SESSION['UserRole']=='admin'){
		$user = new Admin();
		$user->logout();
		return 'admin logged out';
	}
	$user = new User();
	$user->logout();
	return 'user logged out';
}


?>
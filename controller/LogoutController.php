<?php


if(true){
	include'../models/UserClass.php';
	if ($_SESSION['UserRole']=='admin'){
		$user = new Admin();
		$user->logout();
		
	}
	$user = new User();
	$user->logout();
	
	
}


?>
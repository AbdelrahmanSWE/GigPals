<?php

/*
if (isset($_POST['submit'])&& $_SESSION['UserRole']=='admin'){
    include_once '../models/UserClass.php';
    $user = new User();
    $user->addUser($_POST['username'],$_POST['password'],$_POST['fname'],$_POST['lname'],$_POST['email'],$_POST['phoneNo'],$_POST['profileImg'],$_POST['userRole']);
}
*/
if(isset($_POST["Register"])){


	if(isset($_FILES))
    {
		
		@$file = $_FILES["file"];
        $allowedExts = array("jpg", "png");
        $maxSize = 1024000;
        $destination = "../uploads/pfpimg/";

		include '../models/UploadClass.php';
        $upload = new upload($file, $allowedExts, $maxSize, $destination);
		$info['ProfileImg'] = $upload->updateimg('file');

	}
	 else
	{		
		echo"error update img";
	}


    $info['username']=$_POST['username'];
    $info['password'] = $_POST['password'];
    $info['FName'] = $_POST['FName'];
    $info['LName'] = $_POST['LName'];
	$info['PhoneNo'] = $_POST['PhoneNo'];
    $info['Email'] = $_POST['Email'];
    $info['UserRole'] = $_POST['UserRole'];
	
	include'../models/UserClass.php';
	$user = new User();
	$user = $user->addUser($info);

	if($user)
	{
		echo'Data is stored!';
        header('location: ../view/AdminPanel.php',true);
    }
    else 
    {
		echo 'Data is not stored!. The username is already used.';
	}
   
   
}

?>
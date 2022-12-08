<?php


if (isset($_POST['submit'])&& $_SESSION['UserRole']=='admin'){
    include_once '../models/UserClass.php';
    $user = new User();
    $user->addUser($_POST['username'],$_POST['password'],$_POST['fname'],$_POST['lname'],$_POST['email'],$_POST['phoneNo'],$_POST['profileImg'],$_POST['userRole']);
}



?>
<?php


if (isset($_POST['Remove'])  /*&& $_SESSION['UserRole']=='admin'*/){
    include_once '../models/UserClass.php';
    $user = new User();
    if (!empty($_POST['username'])) {
        $user->removeUser($_POST['username']);
    }
    header("location: ../view/adminpanel.php");
}


?>
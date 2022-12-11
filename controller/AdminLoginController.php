<?php

if(isset($_POST["Login"])){
    include'../models/AdminClass.php';
    if(!empty($_POST['username']) && !empty($_POST['password'])) {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $user = new Admin();
        $true = $user->login($username, $password);
        if ($true == true) 
        {
            header("location: ../view/adminpanel.php");
        }
        else 
        {
            header("location: ../index.html");
        }
    }
}


?>
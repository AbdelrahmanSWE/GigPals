<?php

if(isset($_POST["submit"])){
    include'../models/UserClass.php';
    if(!empty($_POST['username']) && !empty($_POST['password'])) {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $user = new Admin();
        $true = $user->login($username, $password);
        if ($true == true) 
        {
            header("location: ../views/admin_home.php");
        }
        else 
        {
            $param = "false";
            header("location: ../index.php?id=$param");
        }
    }
}


?>
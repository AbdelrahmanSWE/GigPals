<?php


if(isset($_POST["submit"])){
    include'../models/UserClass.php';
    if(!empty($_POST['username']) && !empty($_POST['password'])) {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $user = new User();
        $true = $user->login($username, $password);
        
        if ($true == true) 
        {
            @$type=  $_SESSION['UserRole'];
            if($type=='freelancer') {
                header("location: ../views/admin_home.php");
            }
            elseif($type=='client') {
                header("location: ../views/student_home.php");

            }
        }
        else 
        {
            $param = "false";
            header("location: ../index.php?id=$param");
        }
    }
}



?>
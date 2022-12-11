<?php


if(isset($_POST["login"])){
    include'../models/UserClass.php';
    if(!empty($_POST['username']) && !empty($_POST['password'])) {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $user = new User();
        $true = $user->login($username, $password);
        
        if ($true == true) 
        {
            @$type=$_SESSION['UserRole'];
            if($type=='freelancer') {
                header("location: ../view/wallpage.php");
            }
            elseif($type=='client') {
                header("location: ../view/ClientProfile.php");
            }
            echo "no role";
        }
        else 
        {
            $param = "false";
            header("location: ../index.html?id=$param");
        }
    }
}



?>
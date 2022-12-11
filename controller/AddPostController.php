<?php
session_start();
if (isset($_POST['Create'])&&$_SESSION['UserRole']=='client'){
    include_once '../models/PostClass.php';
    if(!empty($_POST['PostTitle']) && !empty($_POST['PostDesc']) && !empty($_POST['Budget']) && !empty($_POST['PayType'])){
        $post = new Post();
        $PostDate=date("d/m/Y");
        $post->createPost($_SESSION['UserID'], $_POST['PostTitle'], $_POST['PostDesc'], $_POST['Budget'], $_POST['PayType'],$PostDate);
        header("location: ../view/ClientProfile.php");
    } else {
        //header("location: ../view/ClientProfile.php");
        echo '<script> alert("Invalid input"); </script>';
    }
}



?>
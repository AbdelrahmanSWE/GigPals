<?php
session_start();
if (isset($_POST['save']) && $_SESSION['UserRole']=='freelancer' ){
    
    include_once '../models/PostClass.php';
    $savePost = new Post();
    $savePost->savePost($_POST['save'], $_SESSION['UserID']);
    header("location: ../view/wallpage.php");
}

?>
<?php
session_start();
if (isset($_POST['update']) && $_SESSION['UserRole']=='admin'){
    include_once '../models/PostClass.php';
    $post = new Post();
    $post->updatePost($_POST['PostID'], $_POST['JobTitle'], $_POST['JobDesc'], $_POST['PayType'], $_POST['Budget']);
    header("location: ../view/adminpanel.php");
}

?>
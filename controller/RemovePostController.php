<?php



    include_once '../models/PostClass.php';
    $post = new Post();
    $post->removePost($_POST['PostID']);
    header("location: ../view/adminpanel.php");



?>
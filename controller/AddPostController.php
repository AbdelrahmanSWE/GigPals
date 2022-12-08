<?php

if (isset($_POST['submit'])&&$_SESSION['UserRole']=='client'){
    include_once '../models/PostClass.php';
    if(!empty($_POST['PostTitle']) && !empty($_POST['$PostDesc']) && !empty($_POST['Budget']) && !empty($_POST['PayType'])){
        $post = new Post();
        $post->createPost($_SESSION['UserID'], $_POST['PostTitle'], $_POST['$PostDesc'], $_POST['Budget'], $_POST['PayType']);
    }
}



?>
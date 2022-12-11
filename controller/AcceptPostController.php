<?php

if (isset($_POST['CheckAccept']) /*&& $_SESSION['UserRole']=='admin'*/){
    echo "clicked";
    include_once '../models/PostClass.php';
    $post = new Post();
    $test = $post->postAcceptance((int)$_POST['PostID'], (int)$_POST['acceptValue']);
    echo $test;
    header("location: ../view/adminpanel.php");
}


?>

<?php

if (isset($_POST['submit']) && $_SESSION['UserRole']=='admin'){
    include_once '../models/PostClass.php';
    $post = new Post();
    $post->postAcceptance($_POST['PostID'], $_POST['acceptValue']);
}


?>

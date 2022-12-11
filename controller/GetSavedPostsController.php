<?php

include_once '../models/PostClass.php';
if ($_SESSION['UserRole'] == 'freelancer') {

    $freelancer = $_SESSION['UserID'];
    $savedposts = new Post();
    $numberOfSavedPosts = $savedposts->numberOfSavedPosts($freelancer);
    $savedposts = $savedposts->getSavedPosts($freelancer);
}

?>
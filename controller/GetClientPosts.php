<?php

include_once '../models/PostClass.php';
if (isset($_SESSION['UserRole'])) {
    if($_SESSION['UserRole']=='client'){
        $ClientID = $_SESSION['UserID'];
    } else {
        $ClientID = $_GET['UserID'];
    }
    $savedposts = new Post();
    $numberOfSavedPosts = $savedposts->historyPostsNumber($ClientID) ;
    $savedposts = $savedposts->historyPosts($ClientID) ;
}



?>
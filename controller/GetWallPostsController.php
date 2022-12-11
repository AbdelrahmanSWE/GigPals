<?php
include_once '../models/PostClass.php';
$post = new Post();
$postsNumber = $post->AcceptedNumber();
$posts = $post->displayOnWall();

?>
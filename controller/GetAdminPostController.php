<?php
include_once '../models/PostClass.php';
$post = new Post();
$postsNumber = $post->pendingAcceptanceNumber();

?>
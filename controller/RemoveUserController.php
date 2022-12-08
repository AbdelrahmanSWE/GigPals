<?php


if (isset($_POST['submit']) && $_SESSION['UserRole']=='admin'){
    include_once '../models/UserClass.php';
    $user = new User();
    if (!empty($_POST['username'])) {
        $user->removeUser($_POST['username']);
    }
}


?>
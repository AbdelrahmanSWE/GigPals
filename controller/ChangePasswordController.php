<?php

if (isset($_POST['ChangePass']))
{
    include_once '../models/UserClass.php';
    if (!empty($_POST['password'])){
        $user = new User();
        $user->updatePassword($_POST['password']);
    }
    $user->logout();
    header("location: ../index.html");
    
}

?>
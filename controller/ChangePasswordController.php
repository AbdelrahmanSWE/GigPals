<?php

if (isset($_POST['submit']))
{
    include_once '../models/UserClass.php';
    if (!empty($_POST['password'])){
        $user = new User();
        $user->updatePassword($_POST['password']);
    }
}

?>
<?php

include_once '../models/UserClass.php';
$user = new User();
$user = $user->getProfileInfo($_GET['UserID']);


?>
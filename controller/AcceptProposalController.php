<?php


if (isset($_POST['submit']) && $_SESSION['UserRole']){
    include_once '../models/ProposalClass.php';
    $proposal = new proposal();
    $proposal->acceptProposal($PostID, $_POST['AcceptValue']);
}


?>
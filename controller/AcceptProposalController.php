<?php
session_start();

if (isset($_POST['acceptance']) && $_SESSION['UserRole']=="client"){
    include_once '../models/ProposalClass.php';
    include_once '../models/PostClass.php';
    $proposal = new proposal();
    $proposalpost = new Post();
    $proposal->acceptProposal($_POST['PostID'], $_POST['acceptance']);
    $proposalpost->postAcceptance($_POST['PPostID'],2);
}


?>
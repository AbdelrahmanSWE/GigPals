<?php
session_start();
if (isset($_POST['Propose']) && $_SESSION['UserRole']=='freelancer')
{
    
    include_once '../models/ProposalClass.php';
    $proposal = new proposal();
    
    $proposal->createProposal($_POST['desc'],$_POST['budget'],$_POST['PostID'],$_SESSION['UserID']);
    header("location: ../view/wallpage.php");
}


?>
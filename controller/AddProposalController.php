<?php

if (isset($_POST['submit']) && $_SESSION['UserRole']=='freelancer')
{
    include_once '../models/ProposalClass.php';
    $proposal = new proposal();
    $proposal->createProposal($_POST['PDesc'],$_POST['PBudget'],$_POST['PostID'],$_SESSION['UserID']);
}


?>
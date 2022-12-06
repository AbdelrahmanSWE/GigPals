<?php


 class proposal{

    private $ID;
    private $PDesc;
    private $PBudget;
    private $PostID;
    private $FreeLancerID;
    private $db;



    function __construct()
    {
        include_once '../include/DatabaseConnectClass.php';
        $db = new Database();
    }


    function createProposal($PDesc,$PBudget,$PostID,$FreeLancerID){
        $this->db->insert("INSERT INTO proposal(PDesc,PBudget,PostID,FreeLancerID) VALUES('$PDesc','$PBudget','$PostID','$FreeLancerID') ");
        $this->db->close();
    }

    









 }




?>
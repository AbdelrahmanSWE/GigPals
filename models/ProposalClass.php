<?php


 class proposal{

    private $ID;
    private $PDesc;
    private $PBudget;
    private $PostID;
    private $FreeLancerID;
    private $acceptValue;
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
    

    function acceptProposal($ProposalID,$acceptValue){
        if($acceptValue===true){
            $this->db->update("UPDATE proposal SET PostAccepted=1 WHERE ID='$ProposalID'");
            $this->db->close();
            return true;
        }
        $this->db->delete("DELETE FROM proposal WHERE ID='$ProposalID'");
        $this->db->close();
        return false;
    }
    
 }




?>
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
        $this->db = new Database();
    }


    function createProposal($PDesc,$PBudget,$PostID,$FreeLancerID){
        $this->db->insert("INSERT INTO proposal(PDesc,PBudget,PostID,FreeLancerID) VALUES('$PDesc','$PBudget','$PostID','$FreeLancerID') ");
        
    }
    
    function displayProposals($PostID){
       return $this->db->display("SELECT * FROM proposal join post ON post.PostID=proposal.PostID JOIN user ON proposal.FreeLancerID=user.UserID WHERE proposal.PostID='$PostID'");
    }
    

    function acceptProposal($ProposalID,$acceptValue){
        if($acceptValue==1){
            $this->db->update("UPDATE proposal SET ProposalAccepted=1 WHERE ID='$ProposalID'");
            $this->db->delete("DELETE FROM proposal WHERE ProposalAccepted=0");
            $this->db->close();
            return true;
        }
        $this->db->delete("DELETE FROM proposal WHERE ID='$ProposalID'");
        $this->db->close();
        return false;
    }
    
 }




?>
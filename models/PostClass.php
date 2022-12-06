<?php


class Post{
    private $PostID;
    private $ClientID;
    private $PostTitle;
    private $PostDesc;
    private $PostDate;
    private $Budget;
    private $PayType;
    private $PostAccepted;
    
    private $db;

    function __construct()
    {
        include_once '../include/DatabaseConnectClass.php';
        $db = new Database();
    }



    function createPost($ClientID,$PostTitle,$PostDesc,$PostDate,$Budget,$PayType){
        $PostDate=date("dd/mm/yyyy");
        $this->db->insert("INSERT INTO post(PostTitle,PostDesc,Budget,PostCreatDate,PayType,ClientID) VALUES('$PostTitle','$PostDesc','$PostDate','$Budget','$PayType','$ClientID')");
        $this->db->close();
    }



    function displayPosts($PostID){
        $this->PostID=$PostID;
        $row=$this->db->select("SELECT * FROM post WHERE PostID='$PostID'");
        return $row;
    }



    function findProposalsNumber($PostID){
        $num=$this->db->select("SELECT COUNT(ID) AS NumberOfProposals FROM proposal WHERE PostID='$PostID'");      
        $this->db->close();
        return $num['NumberOfProposals'];
    }



    function findPostByClient($ClientID){
        $Post=$this->db->select("SELECT * FROM post WHERE ClientID='$ClientID'");
        return $Post;
    }



    function postAcceptance($PostID,$acceptValue){
        if($acceptValue===true){
            $this->db->update("UPDATE post SET PostAccepted=1 WHERE PostID='$PostID'");
            $this->db->close();
            return true;
        }
        $this->db->delete("DELETE FROM post WHERE PostID='$PostID'");
        $this->db->close();
        return false;
    }



    function updatePost($PostID,$JobTitle,$JobDesc,$PayType,$Budget){
        if (!empty($JobTitle)){
            $this->db->update("UPDATE post SET PostTitle='$JobTitle' WHERE PostID='$PostID'");
        }
        if (!empty($JobDesc)){
            $this->db->update("UPDATE post SET PostDesc='$JobDesc' WHERE  PostID='$PostID'");
        }
        if (!empty($Budget)){
            $this->db->update("UPDATE post SET Budget='$Budget' WHERE PostID='$PostID'");
        }
        if (!empty($PayType)){
            $this->db->update("UPDATE post SET PayType='$PayType' WHERE PayType='$PayType'");
        }
        $this->db->close();
    }



    function searchForPost($input){
        $post=$this->db->select("SELECT * FROM post WHERE PostTitle='$input' OR PostCreateDate='$input' OR user.Username='$input'");
        $this->db->close();
        return $post;
    }
    
}


?>
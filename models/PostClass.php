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
        $this->db = new Database();
    }

    public function usersinfo($info) {       
        include_once'../include/DatabaseClass.php';		
		$this->ClientID = $info['ClientID'];
		$this->PostID = $info['PostID'];
		$this->PostTitle = $info['PostTitle'];
        $this->PostDesc = $info['PostDesc'];
		$this->PostDate = $info['PostCreateDate'];
		$this->Budget = $info['Budget'];
        $this->PayType = $info['PayType'];
        $this->PostAccepted = $info['PostAccepted'];
    }
    

    function createPost($ClientID,$PostTitle,$PostDesc,$Budget,$PayType,$PostDate){
        $true=$this->db->insert("INSERT INTO post (PostTitle,PostDesc,Budget,PostCreateDate,PayType,ClientID) VALUES ('$PostTitle','$PostDesc','$Budget','$PostDate','$PayType','$ClientID')");
        $this->db->close();
        
        return $true;
    }

    function savePost($PostID,$FreelancerID){
        $this->db->insert("INSERT INTO savedposts(FreeLancerID,PostID) VALUES ('$FreelancerID','$PostID')");
    }

    function getSavedPosts($FreelancerID){
        $rows = $this->db->display("SELECT * FROM savedposts JOIN post JOIN user WHERE FreeLancerID='$FreelancerID'");
        
        return $rows;
    }

    function numberOfSavedPosts($freelancer){
        return $this->db->select("SELECT COUNT(SharedID) AS numberOfSavedPosts FROM savedposts WHERE FreeLancerID='$freelancer'");

    }


    function displayPosts($PostID){
        $this->PostID=$PostID;
        $row=$this->db->select("SELECT * FROM post WHERE PostID='$PostID'");
        
        return $row;
    }



    function findProposalsNumber($PostID){
        $num=$this->db->select("SELECT COUNT(ID) AS NumberOfProposals FROM proposal WHERE PostID='$PostID'");      
        
        return $num['NumberOfProposals'];
    }



    function findPostByClient($ClientID){
        $Post=$this->db->select("SELECT * FROM post WHERE ClientID='$ClientID'");
        return $Post;
    }

    function pendingAcceptanceNumber(){
        $sql = "SELECT COUNT(PostID) AS NumberOfPosts FROM post WHERE PostAccepted=0";
        return $this->db->select($sql);
    }

    function displayOnAdminPanel(){
        $sql = "SELECT * FROM post JOIN user ON post.ClientID=user.UserID WHERE PostAccepted=0";
        $row = $this->db->display($sql);
        
        return $row;
    }

    function displayOnWall(){
        $sql = "SELECT * FROM post JOIN user ON post.ClientID=user.UserID WHERE PostAccepted=1";
        $row = $this->db->display($sql);
        
        return $row;
    }
    function AcceptedNumber(){
        $sql = "SELECT COUNT(PostID) AS NumberOfPosts FROM post WHERE PostAccepted=1";
        return $this->db->select($sql);
    }

    function postAcceptance($PostID,$acceptValue){
        if($acceptValue==1){
            if($res= $this->db->update("UPDATE post SET PostAccepted=1 WHERE PostID='{$PostID}'")){
                 echo$res;
            }
            $this->db->close();
            return true;
        }

        $this->db->delete("DELETE FROM post WHERE PostID='{$PostID}'");
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
        $post=$this->db->display("SELECT * FROM post join user on post.ClientID=user.UserID WHERE PostTitle='$input' OR PostCreateDate='$input' OR user.Username='$input'");
        $this->db->close();
        return $post;
    }
    function searchForPostsNumber($input){
        $post=$this->db->select("SELECT COUNT(PostID) AS numberOfSavedPosts FROM post join user on user.UserID=post.ClientID WHERE PostTitle='$input' OR PostCreateDate='$input' OR user.Username='$input'");
        
        return $post;
    }

    function historyPosts($input){
        $post=$this->db->display("SELECT * FROM post join user on user.UserID=post.ClientID WHERE user.UserID='$input'");
        
        return $post;
    }
    function historyPostsNumber($input){
        $post=$this->db->select("SELECT COUNT(PostID) AS numberOfSavedPosts FROM post join user on user.UserID=post.ClientID WHERE user.UserID='$input'");
        
        return $post;
    }


    function removePost($PostID){
        $this->db->delete("DELETE FROM post WHERE PostID='$PostID'");
        $this->db->close();
    }
    
}


?>
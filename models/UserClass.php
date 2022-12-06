<?php


class user{
  private $UserID;
  private $FName;
  private $LName;
  private $Username;
  private $password;
  private $Email;
  private $PhoneNo;
  private $ProfileImg;
  private $UserRole;
  private $db;

  function __construct()
  {
    include_once '../include/DatabaseConnectClass.php';
    $db = new Database();
  }

  function addUser($Username,$Password,$fname,$lname,$Email,$PhoneNo,$ProfileImg,$UserRole){
    $this->db->insert("INSERT INTO user(Username,Password,FName,LName,Email,PhoneNo,ProfileImg,UserRole) VALUES ('$Username','$Password','$fname','$lname','$Email','$PhoneNo','$ProfileImg','$UserRole')");
    $this->db->close();
  }

  function login($username , $password) {
    $this->Username = $username;
    $this->password = $password;
    $sql = "SELECT * FROM user WHERE Username='$this->Username'";
    $row = $this->db->select($sql);
    if ($row['Password'] === $this->password) {
      session_start();
      $_SESSION['UserID'] = $row['UserID'];
      $_SESSION['FName']=$row['FName'];
      $_SESSION['LName'] = $row['LName'];
      $_SESSION['Username']=$row['Username'];
      $_SESSION['Email']=$row['Email'];
      $_SESSION['PhoneNo']=$row['PhoneNo'];
      $_SESSION['ProfileImg']=$row['ProfileImg'];
      $_SESSION['UserRole'] = $row['UserRole'];
      $this->db->close();
      return true;
    }
    $this->db->close();
    return false;
  }

  function logout() {

    session_start();
    unset($_SESSION['UserID']);
    unset($_SESSION['FName']);
    unset($_SESSION['LName']);
    unset($_SESSION['Username']);
    unset($_SESSION['Email']);
    unset($_SESSION['PhoneNo']);
    unset($_SESSION['ProfileImg']);
    unset($_SESSION['UserRole']);
    session_destroy();
    header("location:../index.php");
    $this->db->close();
  }


  function updatePassword($newPass){
    $changePassFor=$_SESSION['Username'];
    $this->db->update("UPDATE user SET Password='$newPass' WHERE Username='$changePassFor'");
    $this->password=$newPass;
    session_start();
    $this->db->close();
  }

  function removeUser($Username){
    $this->db->delete("DELETE FROM user WHERE Username='$Username'");
    $this->db->close();
  }

}


?>

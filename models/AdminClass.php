<?php


class Admin{

  private int $adminID;
  private string $username;
  private string $password;
  
  private $db;

  function __construct()
  {
    include_once "../include/DatabaseConnectClass.php";
    $db  = new Database();
  }

  function login($username,$password){
    $this->username=$username;
    $this->password=$password;
    $sql = "SELECT * FROM admin WHERE Username='$this->username'";
    $row = $this->db->select($sql);
    if ($row['Password'] === $this->password){
      session_start();
      $_SESSION['ID'] = $row['ID'];
      $_SESSION['Username']=$row['Username'];
      $_SESSION['UserRole']="admin";
      $this->db->close();

      return true;
    }
    $this->db->close();
    return false;
  }

  function logout(){
    session_start();
    unset($_SESSION['ID']);
    unset($_SESSION['Username']);
    unset($_SESSION['UserRole']);
    session_destroy();
    header("location:../index.php");
    $this->db->close();
  }


  
  function updatePassword($newPass){
    $changePassFor=$_SESSION['Username'];
    $this->db->update("UPDATE admin SET Password='$newPass' WHERE Username='$changePassFor' ");
    $this->password=$newPass;
    session_start();
    $_SESSION['Password']=$newPass;
    $this->db->close();
  }

}


?>

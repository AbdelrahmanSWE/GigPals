<?php


class User{
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
    $this->db = new Database();
  }

  function addUser($info)
  {


    $sql = "SELECT * FROM user WHERE Username = '{$info['username']}'";

    $r = $this->db->check($sql);

    if ($r == 0) {
      if ($info['ProfileImg'] == '../uploads/pfpimg/') {
        $s_sql1 = "INSERT INTO user (FName, LName, Username, Password,Email, PhoneNo, ProfileImg,UserRole) 
        VALUES ('{$info['FName']}', '{$info['LName']}', '{$info['username']}', '{$info['password']}','{$info['Email']}','{$info['PhoneNo']}','../uploads/pfpimg/download.png','{$info['UserRole']}')";
        if ($this->db->insert($s_sql1)) {
          $check = 1;
        }
      } else {
        $s_sql1 = "INSERT INTO user (type, username, password, email, fname, lname, age, phone, address, photo)  
        VALUES ('{$info['FName']}', '{$info['LName']}', '{$info['username']}', '{$info['password']}','{$info['Email']}','{$info['PhoneNo']}','{$info['ProfileImg']}','{$info['UserRole']}')";
        if ($this->db->insert($s_sql1)) {
          $check = 1;
        }
      }

      $this->db->close();

      return true;
    }
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
    header("location:../index.html");
    $this->db->close();
  }


  function updatePassword($newPass){
    session_start();
    $changePassFor=$_SESSION['Username'];
    $this->db->update("UPDATE user SET Password='$newPass' WHERE Username='$changePassFor'");
    $this->password=$newPass;
    
    $this->db->close();
  }

  function removeUser($Username){
    $this->db->delete("DELETE FROM user WHERE Username='$Username'");
    $this->db->close();
  }

  function getProfileInfo($userID){
    $user=$this->db->select("SELECT * FROM user WHERE UserID='$userID'");
    
    return $user;
  }

}


?>

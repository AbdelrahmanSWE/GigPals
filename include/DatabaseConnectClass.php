<?php

class Database{
  private $host;
  private $user;
  private $password;
  private $database;
  public $conn;

  function __construct()
  {
    include 'connection.php';
    $this->host=$host;
    $this->database=$dbname;
    $this->user=$dbusername;
    $this->password=$dbpassword;
    include_once 'DatabaseConnectionSingleton.php';
    $this->conn= Singleton::getinstance();
  }

  function connect() {
    if (!$this->conn = new mysqli($this->host, $this->user, $this->password, $this->database)) {
      throw new Exception("Error:not connected to the server or not found database.");
    }
  }

  function close() {
    $this->conn->close();
  }



  function check($sql)
  {

    if ($result = $this->conn->query($sql)) {
      $num = $result->num_rows;
      return $num;
    }
  }

  function display($sql)
  {
    if ($result = $this->conn->query($sql)) {
      $num = $result->num_rows;
      if ($num > 0) {
        for ($i = 0; $i < $num; $i++) {
          $data[$i] = $result->fetch_array(MYSQLI_ASSOC);
        }return $data;
      }
    } else {

      throw new Exception("problem in query:".$sql);
    }
  }

  function select($sql) {

    if (!$result = $this->conn->query($sql)) {
      
      return false;
    }



    if($row = $result->fetch_array(MYSQLI_ASSOC))
    $result->close();
    return $row;
  }

  function update($sql)
  {
    if(!$result=$this->conn->query($sql))
    {
      throw new Exception("Error:can not execute the query");
    }else{
      return true;
    }
  }

  function insert($sql) {

    if ($result = $this->conn->query($sql)) {
      return true;
    } else {
      

      return false;
    }

  }


  function delete($sql) {
    if(!$result=$this->conn->query($sql))
    {
      
      return false;
    }
    else {
      return true;
    }

  }

}


?>

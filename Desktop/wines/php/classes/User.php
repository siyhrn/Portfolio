<?php
  require_once 'Database.php';
  session_start();
  class User extends Database
  {
    public function createUser($fname,$lname,$email,$pass,$add,$num){
      $new_pass = md5($pass);

      $sql = "INSERT INTO signup(first_name,last_name,email,password,address,number)
      VALUE ('$fname','$lname','$email','$new_pass','$add','$num')";

      if($this->conn->query($sql)){
        header("Location:../login.html");
      }else{
        echo "failed.".$this->conn->error;
      }
    }


    public function login($email,$pass)
    {
      $hash_pass = md5($pass);
      $sql = "SELECT * FROM signup WHERE email = '$email' 
      AND password = '$hash_pass'";
      $result = $this->conn->query($sql);

      if($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['id'] = $row['id'];
        return $row['id'];
      }else{
        return false;
      }
    }
    public function sp_user($userID){

      $sql = "SELECT * FROM signup WHERE id = '$userID'";
      $result = $this->conn->query($sql);
      $row = $result->fetch_assoc();
      return $row;
    }
    // public function displayname($fname){
    //   $sql = "SELECT * FROM signup WHERE first_name = '$fname'";
    //   $result = $this->conn->query($sql);
    //   $row = array();
    //   while ($row = $result->fetch_assoc()){
    //     $rows[] = $row;
    //   }
    //   return $rows;
    // }
     
      

      }
    

  
?>
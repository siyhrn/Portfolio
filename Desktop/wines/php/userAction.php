<?php
    require_once 'classes/User.php';
    $user = new User;


  session_start();

  if(isset($_POST['add'])){
    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $add = $_POST["address"];
    $num = $_POST["number"];

    $user->createUser($fname,$lname,$email,$pass,$add,$num);
  }elseif(isset($_POST['login'])){
  $email = $_POST["email"];
  $pass = $_POST["password"];

  $result = $user->login($email,$pass);
  if($result === false){
    $_SESSION['id'] = $result;
    echo "user doesnt exist
    ";
    echo "<a href='../signup.html'><button class='btn btn-outline-primary' type='submit' >To Sign up</button></a>";
  }else{
    header("location:../index_my.php");
  }
  }elseif(isset($_POST['signup'])){
    header("location:../signup.html");
  }



?>
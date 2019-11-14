<?php
  require_once 'classes/cart_item.php';
  $item = new cart_item;

  if(isset($_POST['cart'])){
  
    $cproduct = $_POST["product"];
    $cprice = $_POST["price"];
    $cname = $_FILES['pic']['name'];
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["pic"]["name"]);
    
    $res = $item->addcart($cproduct,$cprice,$cquantity, $cname);
    
    if($res){
      move_uploaded_file($_FILES['pic']['tmp_name'],$target_file);
    header ("location: ../cart.php");
    }
  }


?>
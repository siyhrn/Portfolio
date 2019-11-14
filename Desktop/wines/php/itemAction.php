<?php
require_once 'classes/Item.php';
$item = new Item;


if (isset($_POST['submit'])){
  $product = $_POST["name"];
  $price = $_POST["price"];
  $quantity = $_POST["quantity"];
  $name = $_FILES['pic']['name'];
  $target_dir = "upload/";
  $target_file = $target_dir . basename($_FILES["pic"]["name"]);
  
  $res = $item->createItem($product,$price,$quantity, $name);

  if($res){
    move_uploaded_file($_FILES['pic']['tmp_name'],$target_file);
    header("location: ../shop.php");
  }
  
}
// elseif(isset($_POST['cart'])){
  
//   $cproduct = $_POST["name"];
//   $cprice = $_POST["price"];
//   $cquantity = $_POST["quantity"];
//   $cname = $_FILES['pic']['name'];
//   $target_dir = "upload/";
//   $target_file = $target_dir . basename($_FILES["pic"]["name"]);
  
//   $res = $item->addcart($cproduct,$cprice,$cquantity, $cname);
  
//   if($res){
//     move_uploaded_file($_FILES['pic']['tmp_name'],$target_file);
//   header ("location: ../cart.php");
//   }
// }
?>
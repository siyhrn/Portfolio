<?php
require_once 'Database.php';
// session_start();
class Item extends Database
{
  public function createItem($product, $price, $quantity, $name)
  {
    $sql = "INSERT INTO items (picture,product,price,quantity) 
    VALUES ('$name','$product','$price','$quantity')";

    $res = $this->conn->query($sql);
    if ($res) {
      return TRUE;
    } else {
      echo "Error" . $this->conn->error;
    }
  }
  public function getItems()
  {
    $sql = "SELECT * FROM items";
    $result = $this->conn->query($sql);
    $row = array();
    while ($row = $result->fetch_assoc()) {
      $rows[] = $row;
    }
    return $rows;
  }

//   public function addcart($cproduct,$cprice,$cquantity,$cname){

//     $sql = "INSERT INTO cart_item (cart_picture,cart_product,cart_price,cart_quantity) 
//     VALUES ('$cname','$cproduct','$cprice','$cquantity')";

// $res = $this->conn->query($sql);
// if ($res) {
//   return TRUE;
// } else {
//   echo "Error" . $this->conn->error;
// }
//   }
//   public function get()
//   {
//     $sql = "SELECT * FROM cart_item";
//     $result = $this->conn->query($sql);
//     $row = $result->fetch_assoc();
//     return $row;
//   }
}
?>
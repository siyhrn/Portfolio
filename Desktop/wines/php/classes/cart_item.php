<?php
  require_once 'Database.php';
   class cart_item extends Database{

    public function addcart($cproduct,$cprice,$cquantity,$cname){

      $sql = "INSERT INTO cart_item (cart_picture,cart_product,cart_price,cart_quantity) 
      VALUES ('$cname','$cproduct','$cprice','$cquantity')";
  
  $res = $this->conn->query($sql);
  if ($res) {
    return TRUE;
  } else {
    echo "Error" . $this->conn->error;
  }
    }
    public function get()
    {
      $sql = "SELECT * FROM cart_item";
      $result = $this->conn->query($sql);
      $row = array();
      while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
      }
      return $rows;
      // $row = $result->fetch_assoc();
      // return $row;
    }
   }
?>
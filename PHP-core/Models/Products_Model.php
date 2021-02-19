<?php
//Start
include_once("../mysql-connect-db.php");

class Products_Model{
      //Get all product
      function get_AllProducts(){
            $conn = OpenCon(); 
            $result =  mysqli_query($conn, "SELECT * FROM products");
            return $result;   
      }

      //Get A product by id
      function getProductByID($id){
            $conn = OpenCon(); 
            $result =  mysqli_query($conn, "SELECT * FROM products WHERE ID_SP = '{$id}' ");
            return $result;   
      }

      //Add a product
      function add_Product($id,$name,$price,$manufacturer){
            $conn = OpenCon(); 
            try{
            $query = "INSERT INTO products VALUES ('{$id}' ,'{$name}', '{$price}', '{$manufacturer}')";
            $conn->query($query);
            }
            catch(Exception $err){
                $conn->close();
                throw $err;
            }
      }

      //Edit a product
      function edit_Product($id,$name,$price,$manufacturer){
            $conn = OpenCon(); 
            try{
            $query = "UPDATE products SET TEN_SP = '{$name}', Gia_SP = '{$price}', Nha_San_Xuat = '{$manufacturer}' WHERE ID_SP = '{$id}' ";
            $conn->query($query);
            }
            catch(Exception $err){
                $conn->close();
                throw $err;
            }
      }

      //Delete a product
      function delete_Product($id){
            $conn = OpenCon(); 
            try{
            $query = "DELETE FROM products WHERE ID_SP = '{$id}' ";
            $conn->query($query);
            }
            catch(Exception $err){
                $conn->close();
                echo $err;
            }
      }
}

?>
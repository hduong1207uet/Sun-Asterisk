<?php
//Start
include_once("../mysql-connect-db.php");
include_once("../Controllers/Base_Controller.php");

class Products_Model{
      //Get all product
      function get_AllProducts(){
            try{
            $conn = OpenCon(); 
            $query = "SELECT * FROM products";
            $query =  test_input($query);
            $result =  mysqli_query($conn, $query);
            return $result;   
            }
            catch(Exception $err){
                  $conn->close();
                  throw $err;
            }
      }

      //Get A product by id
      function getProductByID($id){
            try{
            $conn = OpenCon(); 
            $query = "SELECT * FROM products WHERE ID_SP = '{$id}' ";
            $query =  test_input($query);
            $result =  mysqli_query($conn, $query);
            return $result;   
            }
            catch(Exception $err){
                  $conn->close();
                  throw $err;
            }
      }

      //Add a product
      function add_Product($id,$name,$price,$manufacturer){
            $conn = OpenCon(); 
            try{
            $query = "INSERT INTO products VALUES ('{$id}' ,'{$name}', '{$price}', '{$manufacturer}')";
            $query = test_input($query);
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
            $query = test_input($query);
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
            $query = test_input($query);
            $conn->query($query);
            }
            catch(Exception $err){
                $conn->close();
                echo $err;
            }
      }
}

?>
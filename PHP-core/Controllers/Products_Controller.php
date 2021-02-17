<?php
  include("../Models/Products_Model.php");

  class Products_Controller{
        function get_AllProducts(){
                $P_Model = new Products_Model();
                $result = $P_Model->get_AllProducts();  
                return $result;
        }

        //Get single product
        function get_Product_ByID($id){
                $P_Model = new Products_Model();
                $result= $P_Model->get_Product_ByID($id);
                return $result;
        }

        //Add a product
        function add_Product(){
                $P_Model = new Products_Model(); 
                $id    = $_POST["txt_product_id"];
                $name  = $_POST["txt_product_name"];
                $price  = $_POST["txt_product_price"];
                $manufacturer  = $_POST["txt_manufacturer"];               
                $P_Model->add_Product($id,$name,$price,$manufacturer);
                $url = "../Views/admin-page.php";    
                echo '<script language="javascript">window.location.href ="'.$url.'"</script>';         
        }

        //Edit a product
        function edit_Product(){
                $P_Model = new Products_Model(); 
                $id    = $_POST["txt_id"];
                $name  = $_POST["txt_name"];
                $price  = $_POST["txt_price"];
                $manufacturer  = $_POST["txt_manufacturer"];               
                $P_Model->edit_Product($id,$name,$price,$manufacturer);
                $url = "../Views/admin-page.php";    
                echo '<script language="javascript">window.location.href ="'.$url.'"</script>';  
        }

        //Delete a product
        function delete_Product($id){
                $P_Model = new Products_Model(); 
                $P_Model->delete_Product($id);
                $url = "../Views/admin-page.php";    
                echo '<script language="javascript">window.location.href ="'.$url.'"</script>'; 
        }
  }



?>
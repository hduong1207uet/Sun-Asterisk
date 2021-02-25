<!--File chứa Product Controller và xử lý sự kiện-->

<?php
  include_once("../Models/Products_Model.php");
  include_once("Base_Controller.php");

  class Products_Controller{
        function get_AllProducts(){
                $P_Model = new Products_Model();
                $result = $P_Model->get_AllProducts();  
                return $result;
        }

        //Get single product
        function getProductByID($id){
                $P_Model = new Products_Model();
                $id = test_input($id);
                $result = $P_Model->getProductByID($id);
                return $result;
        }

        //Add a product
        function add_Product(){
                $P_Model = new Products_Model(); 
                $id    = test_input($_POST["txt_product_id"]);
                $name  = test_input($_POST["txt_product_name"]);
                $price  = test_input($_POST["txt_product_price"]);
                $manufacturer  = test_input($_POST["txt_manufacturer"]);               
                $P_Model->add_Product($id,$name,$price,$manufacturer);
                goBack_AdminPage();        
        }

        //Edit a product
        function edit_Product(){
                $P_Model = new Products_Model(); 
                $id    = test_input($_POST["txt_id"]);
                $name  = test_input($_POST["txt_name"]);
                $price  = test_input($_POST["txt_price"]);
                $manufacturer  = test_input($_POST["txt_manufacturer"]);               
                $P_Model->edit_Product($id,$name,$price,$manufacturer);
                goBack_AdminPage(); 
        }

        //Delete a product
        function delete_Product($id){
                $P_Model = new Products_Model(); 
                $id = test_input($id);
                $P_Model->delete_Product($id);
                goBack_AdminPage();
        }

  }//end Class Controller

  $Products_Ctrl = new Products_Controller();  
  if(isset($_GET["action"])){
        $action = $_GET["action"];
        if($action == 'add'){
            $Products_Ctrl->add_Product();
        }
        if($action == 'del'){
            $id = test_input($_GET["id"]);
            $Products_Ctrl->delete_Product($id);
        }
        if($action == 'edit'){            
            $Products_Ctrl->edit_Product();
        }
        if($action == 'getProductByID'){
           $id = test_input($_GET["id"]);
           header("Location:../Views/Edit_Form.php?id=${id}");
        }
    }




?>
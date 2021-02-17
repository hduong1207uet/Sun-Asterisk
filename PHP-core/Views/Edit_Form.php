<html>
    <head> 
            <title>Edit Product Page</title>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <link rel="stylesheet" href="../Assets/Css/style-admin.css">
            <link rel="stylesheet" href="../Assets/Css/style.css">
    </head>
    <body>
        <script language="javascript">
               function loadPage($url){
                window.location.href ="'.$url.'";
               }   
        </script>
        <?php 
            include("../Controllers/Products_Controller.php"); 
            $Product_Ctrl =  new Products_Controller();
            $id = $_GET["id_sp"];
            $row =  $Product_Ctrl->get_Product_ByID($id);
        ?>
    <!--Edit products form-->
            <form class="modal-content animate" action="admin-page.php?action=edit" method="post">      
        
                <span onclick="document.getElementById('edit_product').style.display='none'" class="close" >&times;</span>
                                
                <div class="container">
                    <h2>SỬA SẢN PHẨM</h2>
                    <br>
                    <label><b>ID sản phẩm</b></label>
                    <input type="text"  name="txt_id" value="<?php echo $row["ID_SP"]; ?>"required>

                    <label><b>Tên sản phẩm</b></label>
                    <input type="text" name="txt_name" value="<?php echo $row["Ten_SP"]; ?>" required>
                    <br>      
                    
                    <label><b>Giá sản phẩm</b></label>
                    <input type="text" name="txt_price" value="<?php echo $row["Gia_SP"]; ?>" required>
                    <br> 

                    <label><b>Nhà sản xuất</b></label>
                    <input type="text" name="txt_manufacturer" value="<?php echo $row["Nha_san_xuat"]; ?>" required>
                    <br> 
                    
                    <button type="submit" class="button-style">Sửa sản phẩm</button>
                    
                </div>

                <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick=""  class="cancelbtn">Cancel</button>
                
                </div>
            </form>
    <!--End add products form -->
    </body>
</html>
<html>
    <head> 
            <title>Edit Product Page</title>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <link rel="stylesheet" href="../Assets/Css/style-admin.css">
            <link rel="stylesheet" href="../Assets/Css/style.css">
            <script src="../Assets/JS/myJS.js"></script>
    </head>
    <body>
        <?php 
            include("../Controllers/Products_Controller.php");
            //kiem tra dau vao
            $id = test_input($_GET["id"]);
            $result = $Products_Ctrl->getProductByID($id); 
            //duyet kqua tim 1 ban ghi qua ID
            $row = mysqli_fetch_array($result);
        ?>
    <!--Edit products form-->
            <form name="edit_form" class="modal-content animate" action="../Controllers/Products_Controller.php?action=edit" method="post" onsubmit="return checkPriceEditForm()">      
                                
                <div class="container">
                    <h2>SỬA SẢN PHẨM</h2>
                    <br>
                    <label><b>ID sản phẩm</b></label>
                    <input type="text"  name="txt_id" value="<?php echo $row["ID_SP"]; ?>" readonly>

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
                <button type="button" onclick="window.history.back();"  class="cancelbtn">Cancel</button>
                
                </div>
            </form>
    <!--End add products form -->
    </body>
</html>
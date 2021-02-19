<?php
session_start();
include_once("../Controllers/Products_Controller.php");
if(!isset($_SESSION["username"])){
    header("Location:../index.php");
    exit;
}
?>
<!DOCTYPE>
<html>
    <head> 
        <title>Admin Page</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="../Assets/Css/style-admin.css">
        <link rel="stylesheet" href="../Assets/Css/style.css">
        <script src="../Assets/JS/myJS.js"></script>
    </head>

    <!--Body part-->
    <body>
        <!--Logout Button-->
        <div class="nav-bar">
           <button class="btn-dang-xuat" onclick="logout_User()" >  
               Đăng xuất
           </button>
        </div>
        
        <?php 
            echo "Xin chào, " .$_SESSION["username"];        
        ?>

        <div class = "main-content"> 
          <table class="product-tbl">    
             <caption><h1>Danh sách sản phẩm</h1></caption>
             <tr>
                  <td style="border:none;text-align:center;vertical-align: middle;">
                  <button style="height:40px;cursor: pointer;" onclick ="displayForm('add_product')" >Thêm sản phẩm </button>                 
                  </td>
             </tr>                 
              <tr>
                  <th>ID sản phẩm</th>
                  <th>Tên sản phẩm</th>
                  <th>Giá sản phẩm</th>
                  <th>Nhà sản xuất</th>
                  <th>Sửa / Xóa</th>
              </tr>
              <?php
              //fetch all products's row
                 $result_all_Product = $Products_Ctrl->get_AllProducts();
                 while($row = mysqli_fetch_array($result_all_Product)) {
              ?>
                 <tr>
                     <td> <?php echo $row["ID_SP"]; ?></td>
                     <td> <?php echo $row["Ten_SP"]; ?></td>
                     <td> <?php echo $row["Gia_SP"]. " $"; ?></td>
                     <td> <?php echo $row["Nha_san_xuat"]; ?></td> 
                     <td>
                         <button class="edit_btn" onclick="edit_Products('<?php echo $row['ID_SP'];?>') ">Sửa</button>
                         <button class="del_btn" onclick="confirm_Del('<?php echo $row['ID_SP'];?>') ">Xóa</button>
                     </td>                       
                 </tr>
              <?php       
                 }
              ?>
          </table>
        <div>

        <?php
            include_once("./Add_Form.html");
        ?>

    </body>


</html>


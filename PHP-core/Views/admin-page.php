<?php
session_start();
include("../Controllers/Products_Controller.php");
?>
<!DOCTYPE>
<html>
    <head> 
        <title>Admin Page</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="../Assets/Css/style-admin.css">
        <link rel="stylesheet" href="../Assets/Css/style.css">
    </head>

    <!--Body part-->
    <body>
        <!--Logout Button-->
        <div class="nav-bar">
           <button class="btn-dang-xuat" onclick="window.location.href='../logout.php';" >  
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
                  <button style="height:40px;cursor: pointer;" onclick ="document.getElementById('add_product').style.display='block'" >Thêm sản phẩm </button>
                  <button style="height:40px;cursor: pointer;" onclick="refreshPage">Refresh </button> 
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
                 $Products_Ctrl = new Products_Controller();  
                 $result_all_Product = $Products_Ctrl->get_AllProducts();
                 while($row = mysqli_fetch_array($result_all_Product)) {
              ?>
                 <tr>
                     <td> <?php echo $row["ID_SP"]; ?></td>
                     <td> <?php echo $row["Ten_SP"]; ?></td>
                     <td> <?php echo $row["Gia_SP"]. " $"; ?></td>
                     <td> <?php echo $row["Nha_san_xuat"]; ?></td> 
                     <td>

                         <a href="Edit_Form.php?action=view_by_id&id_sp=<?php echo $row["ID_SP"]?>" class="edit_btn">Sửa</a>&nbsp&nbsp
                         <a href="admin-page.php?action=del&id_sp=<?php echo $row["ID_SP"]?>" class="del_btn">Xóa</a>
                     </td>                       
                 </tr>
              <?php       
                 }
              ?>
          </table>
        <div>
        <?php
            include("./Add_Form.html");
            if(isset($_GET["action"])){
                $action = $_GET["action"];
                if($action == 'add'){
                    $Products_Ctrl->add_Product();
                }
                if($action == 'del'){
                    $id = $_GET["id_sp"];
                    $Products_Ctrl->delete_Product($id);
                }
                if($action == 'edit'){
                    $id = $_GET["id_sp"];
                    $Products_Ctrl->edit_Product($id);
                }
            }

        ?>



    </body>


</html>


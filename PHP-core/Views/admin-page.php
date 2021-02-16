<?php
session_start();
?>
<!DOCTYPE>
<html>
    <head> 
        <title>Admin Page</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="../Css/style-admin.css">
    </head>

    <!--Body part-->
    <body>   
        <div class="nav-bar">
           <button class="btn-dang-xuat" onclick="window.location.href='../logout.php';" >  
               Đăng xuất
           </button>
        </div>
        <?php 
            include "../Controllers/mysql-connect-db.php"; 
            $conn = OpenCon();  
            $result =  mysqli_query($conn, "SELECT * FROM products");
            echo "Xin chào, " .$_SESSION["username"];
        ?>
        <div class = "main-content">
             <h1>Danh sách sản phẩm</h1>
             <tr>
                  <button style="height:40px;">Thêm sản phẩm </button>
                  <button style="height:40px;">Refresh </button>
            </tr>
             <table class="product-tbl">                 
                 <tr>
                     <th>ID sản phẩm</th>
                     <th>Tên sản phẩm</th>
                     <th>Giá sản phẩm</th>
                     <th>Nhà sản xuất</th>
                     <th>Sửa/Xóa</th>
                 </tr>
                 <?php
                    while($row = mysqli_fetch_array($result)) {
                 ?>
                    <tr>
                        <td> <?php echo $row["ID_SP"]; ?></td>
                        <td> <?php echo $row["Ten_SP"]; ?></td>
                        <td> <?php echo $row["Gia_SP"]. " $"; ?></td>
                        <td> <?php echo $row["Nha_san_xuat"]; ?></td> 
                        <td>
                            <button>Sửa</button>
                            <button>Xóa</button>
                        </td>                       
                    </tr>
                 <?php       
                    }
                 ?>
             </table>
        <div>

    </body>


</html>

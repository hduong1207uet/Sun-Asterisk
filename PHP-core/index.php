
<?php 
      session_start();
    //   include_once("./Controllers/Base_Controller.php");
      //Kiem tra da ton tai nguoi dung chua
      if(isset($_COOKIE["username"])){
          $_SESSION["username"] = $_COOKIE["username"];
          header("Location:./Views/admin-page.php");
           exit;
      }
?>

<!DOCTYPE html>
<html>
    <head> 
           <title>Trang chủ</title>
           <meta name="viewport" content="width=device-width,initial-scale=1">
           <link rel="stylesheet" href="Assets/Css/style.css">
            <script src="./Assets/JS/myJS.js"></script>
    </head>
    <body>

        <h2>PHP Core </h2>
        <!--Button Dang nhap-->         
        <button onclick ="displayForm('form_dang_nhap')" ,style="width:100;" class="button-style">
            Đăng nhập       
        </button>
        <br>

        <!--Form Dang nhap--> 
        <div id="form_dang_nhap" class="modal">
              <form class="modal-content animate" action="login.php" method="post" autocomplete="off">
                <div class="imgcontainer">
                <span onclick="closeForm('form_dang_nhap')" class="close" title="Close Form">&times;</span>
                <img src="Assets/img/icon.png" width="200" height="200" >
                </div>

                <div class="container">
                    <label for="uname"><b>Tên đăng nhập</b></label>
                    <input type="text" placeholder="Enter Username" name="username" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" required>

                    <label for="psw"><b>Mật khẩu</b></label>
                    <input type="password" placeholder="Enter Password" name="password"  value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" required>
                    <br>
                    <label>
                        <input type="checkbox" checked="checked" name="remember_chkbox">Nhớ tôi trên thiết bị
                        <br>
                    </label>
                    
                    <button type="submit" class="button-style">Đăng nhập</button>
                    
                </div>
                
                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="closeForm('form_dang_nhap')" class="cancelbtn">Cancel</button>
                </div>
            </form>
        </div>
        <!--hiển thị lỗi đăng nhập nếu được trả về -->
        <h2 style="color:red;">
               <?php 
               if(isset($_GET["message"])) {
                   echo $_GET["message"];
                }
               ?>
        </h2>

    </body>

</html>
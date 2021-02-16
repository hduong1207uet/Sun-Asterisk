<!DOCTYPE html>

<html>
    <head> 
           <title>Trang chủ</title>
           <meta name="viewport" content="width=device-width,initial-scale=1">
           <link rel="stylesheet" href="Css/style.css">
    </head>
    <body>

        <h2>PHP Core </h2>
        <!--Button Dang nhap-->         
        <button onclick ="document.getElementById('id01').style.display='block' " ,style="width:100;">
            Đăng nhập       
        </button>
        <br>
        <label>
               <?php 
               if(isset($_GET["message"])) {
                   echo $_GET["message"];
                }
               ?>
        </label>
        
        <!--Button Dang ky--> 
        <!-- <button onclick ="document.getElementById('id02').style.display='block' " ,style="width:100;">
            Đăng ký       
        </button> -->


        <!--Form Dang nhap--> 
        <div id="id01" class="modal">
  
            <form class="modal-content animate" action="login.php" method="post">
                <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="img/icon.png" width="200" height="200" >
                </div>

                <div class="container">
                    <label for="uname"><b>Tên đăng nhập</b></label>
                    <input type="text" placeholder="Enter Username" name="username" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" required>

                    <label for="psw"><b>Mật khẩu</b></label>
                    <input type="password" placeholder="Enter Password" name="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" required>
                    <br>
                    <label>
                        <input type="checkbox" checked="checked" name="remember_chkbox">Nhớ tôi trên thiết bị
                    </label>
                    
                    <button type="submit">Đăng nhập</button>
                    
                </div>

                <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                
                </div>
            </form>
        </div>
  
    
        
        
        <script>
        // Get the modal
        var modal_01 = document.getElementById('id01');
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal_01) {
                modal_01.style.display = "none";
            }
            
        }
        </script>

    </body>

</html>
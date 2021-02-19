<?php
session_start();
include_once("./Controllers/Base_Controller.php");
//Kiem tra neu co request den moi kiem tra
if(isset($_POST["username"]) && isset($_POST["password"]))       
{ 
    $message="";
    include ("./mysql-connect-db.php"); 

    $conn = OpenCon();
    $usr_result =  mysqli_query($conn, "SELECT * FROM user WHERE username = '" . $_POST["username"] . "' AND password = '" . $_POST["password"] . "' ");    

    //Duyệt qua kết quả trả về từ CSDL
    $row  = mysqli_fetch_array($usr_result);
    if(is_array($row)){
        $_SESSION["username"] = $row['username'];
        $_SESSION["email"] = $row['email'];

        //kiểm tra kết quả và gán SESSION , COKKIES
        if(!empty($_POST["remember_chkbox"])) {
            setcookie ("username",$_POST["username"],time()+ 3600);
            setcookie ("password",$_POST["password"],time()+ 3600);
            echo "Cookies Set Successfuly";
        } else {
            setcookie("username","");
            setcookie("password","");
            echo "Cookies Are Not Set";
        }
        header ("Location:./Views/admin-page.php");
    }
    else{
        $message = "Invalid Username or Password!";
        header ("Location:index.php?message=$message");
    }
}
//Neu khong co request se chuyen den trang dang nhap
else{
    goBack_Index();
    session_destroy();
}    

?>

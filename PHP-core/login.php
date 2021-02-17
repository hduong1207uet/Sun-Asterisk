<?php
    session_start();
    $message="";
    include ("./mysql-connect-db.php"); 
    $conn = OpenCon();
    $usr_result =  mysqli_query($conn, "SELECT * FROM user WHERE username = '" . $_POST["username"] . "' AND password = '" . $_POST["password"] . "' ");    

    $row  = mysqli_fetch_array($usr_result);
    if(is_array($row)){
        $_SESSION["username"] = $row['username'];
        $_SESSION["email"] = $row['email'];
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

?>

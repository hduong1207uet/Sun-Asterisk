<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["email"]);
   setcookie("username", "", time() - 3600);
   setcookie("password", "", time() - 3600);
   header("Location:index.php");
?>
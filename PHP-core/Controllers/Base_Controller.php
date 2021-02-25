<?php 
   function goBack_Index(){
    $url = "index.php";
    echo '<script language="javascript">window.location.href ="'.$url.'"</script>';
   }

  function goBack_AdminPage(){
    $url = "../Views/admin-page.php";
    echo '<script language="javascript">window.location.href ="'.$url.'"</script>';
   }

   function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    
?>
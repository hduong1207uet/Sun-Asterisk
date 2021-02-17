<?php       
    function OpenCon()
     {
         $dbhost = "localhost";
         $dbuser = "hduong1207uet";
         $dbpass = "12071998";
         $db = "PHP_Core";
 
         $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);               

         return $conn;   
     }
         

?>
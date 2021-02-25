<?php
     function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
$string = "%22%3E%3Cscript%3Ealert('hacked')%3C/script%3E";
echo $string.'<br>';
echo test_input($string).'<br>';
echo '  bla blo'.'<br>';
echo trim('  bla blo');


?>
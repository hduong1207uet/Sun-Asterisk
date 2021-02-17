<?php 
function view($path, $data) {
    foreach($data as $item) {
        echo $item;
    }
}  
$data = array('item0', 'item1', 'item3');
view('index', $data);
return View::display("index.php");

?>
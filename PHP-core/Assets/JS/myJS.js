
//hien thi form dang nhap
function displayForm(name){
    document.getElementById(name).style.display='block';
}

//dong Form dang nhap
function closeForm(name){
    document.getElementById(name).style.display='none';
}

function logout_User(){
    window.location.href='../logout.php';
}

function confirm_Del(id){
    var conf= confirm("Xóa sản phẩm này?");
    var action = 'del';
    if(conf){   
    window.location.href="../Controllers/Products_Controller.php?action="+action+"&id="+id;
    }
}
function edit_Products(id){
    var action = 'getProductByID';
    window.location.href="../Controllers/Products_Controller.php?action="+action+"&id="+id;
}
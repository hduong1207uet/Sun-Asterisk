
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

function checkPriceEditForm(){
        var price = document.forms["edit_form"]["txt_price"].value;
         if(isNaN(price)){
             alert("Giá sản phẩm phải là 1 số !");
             document.forms["edit_form"]["txt_price"].focus();
             return false;
         }
}
function checkPriceAddForm(){
    var price = document.forms["add_form"]["txt_product_price"].value;
     if(isNaN(price)){
         alert("Giá sản phẩm phải là 1 số !");
         document.forms["add_form"]["txt_product_price"].focus();
         return false;
     }
}
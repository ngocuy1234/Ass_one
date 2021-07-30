<?php
include_once "../config/open_close_sql.php";

if(!empty($_POST)){

    if(isset($_POST['email'])){
        $email = $_POST['email'];
        htmlentities($email);
    };

    if(isset($_POST['password'])){
        $password = $_POST['password'];
        htmlentities($password);
    };
   
    $new_password = $password;

    $query = "SELECT * FROM DATA_CUSTOMER WHERE EMAIL = '".$email."'";
    
    $data_list = set_array_data($query);


    if(password_verify($new_password, $data_list[0]['PASSWORD']){
        header("Location: /ASS_PHP/product.html");
    }else{
        header("Location: /ASS_PHP/login.html");
    }
};
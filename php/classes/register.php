<?php
include_once "../config/open_close_sql.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
      extract($_REQUEST);
    //   $pattern = [ 'username' => '' , 'email' => ''];

    //   $pattern['fullname'] = "/([^\d]*)\s([^\d]*)/i";
    //   $pattern['email'] = "/^(\w+@\gmail)(\.\w{2,})$/i";


    if($username == ''||$email == ''||$password ==''||$date == ''||$product == ''){
        header("Location: /ASS_PHP/register.html");
    }
    else{

        $password =  password_hash($password, PASSWORD_DEFAULT);
    
        $query = "INSERT INTO DATA_CUSTOMER(USER_NAME , EMAIL , PASSWORD ,  DATE , PRODUCT)
            VALUE ('".$username."' , '".$email."' , '".$password."', '".$date."' , '".$product."')";

        $a =  open_close_sql($query);
        // var_dump($a);
        // die();

        $table = "SELECT * FROM DATA_CUSTOMER";

        $data_list = set_array_data($table);
        // echo "<pre>";
        // var_dump($data_list);
        // die();
        // echo "</pre>";

        // Check email input with email in sql
        // for($i = 0 ; $i < count($data_list) ; $i++){
        //     if($email == $data_list[$i]['EMAIL']){
        //         header("Location: /ASS_PHP/register.html");
        //         die();
        //     };
        // };        

        header("Location: /ASS_PHP/login.html");
    };
};

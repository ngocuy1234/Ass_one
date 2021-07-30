<?php
require_once("define.php");

// Hàm dùng để kết nối và đóng kết nối database
function open_close_sql($sql){
    // thực hiện kết nối
    $connect = new mysqli(HOST , USERNAME , PASSWORD , DATABASE);
     
    mysqli_set_charset($connect , 'utf8');

    mysqli_query($connect , $sql);

    mysqli_close($connect);
};

function set_array_data($sql){
    // thực hiện kết nối
    $connect = new mysqli(HOST , USERNAME , PASSWORD , DATABASE);
     
    mysqli_set_charset($connect , 'utf8');

    $result = mysqli_query($connect , $sql);
        $data_list = array();
        while($row = mysqli_fetch_array($result , 1)){
           $data_list[] = $row;
        };

    mysqli_close($connect);

    return $data_list;
};
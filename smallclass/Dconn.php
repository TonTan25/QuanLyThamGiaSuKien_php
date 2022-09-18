<?php
// PHẦN XỬ LÝ PHP
// BƯỚC 1: KẾT NỐI CSDL
try{
    $servername="localhost";
    $username="root";
    $password="";
    $database="ql_events"; // ten CSDL qlsua;

    $cn = mysqli_connect($servername, $username, $password, $database);
    
}catch(Exception $ex) {
    exit($ex->getMessage()); 
}
?>
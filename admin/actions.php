<?php

require_once "../autoload.php";

if(isset($_POST['adminLogin'])){

    $emailAdmin = $_POST['emailAdmin'];
    $pwdAdmin = $_POST['pwdAdmin'];

    $adminLogin = new Admin();
    if($adminLogin->adminLogin($emailAdmin,$pwdAdmin)){
        Db::$msg = "ورود به بخش ادمین با موفقیت صورت گرفت";
    }else{
        Db::$error = "مشکلی در ورود به بخش ادمین پیش آمد";
    }

}
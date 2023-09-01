<?php

require_once "../autoload.php";

class Admin
{

    private $adminEmail = "alirezanikju@gmail.com";
    private $adminPwd = "123456";




    public function adminLogin($email, $pwd)
    {

        if ($email == $this->adminEmail && $pwd == $this->adminPwd) {
            session_start();
            $_SESSION['admin'] = $email;
            return true;
        } else {
            return false;
        }
    }


    
}

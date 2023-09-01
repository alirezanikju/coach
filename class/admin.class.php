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





    public function addSlider($imgName, $imgTmp, $imgType)
    {
        if (is_uploaded_file($imgTmp)) {

            $fileType = explode("/",$imgName);
            $fileName = $imgName[0]."-eby-".time().substr($imgName,-4,4);

            $sql = "INSERT INTO slider (imgName) VALUE (:img) ";
            $result = Db::prepare($sql);
            $result->bindValue(":img", $fileName);
            if ($result->execute()) {


                $fileType = ["image/png", "image/jpg"];
                if(in_array($imgType,$fileType)){

                    if(move_uploaded_file($imgTmp,"sliderImg/".$fileName)){
                        Db::$msg = "تصویر جدید اسلایدر با موفقیت افزوده شد";
                    }else{
                        Db::$error = "مشکلی در افزودن تصویر اسلایدر جدید پیش آمد";
                    }

                }else{
                    Db::$error = "تصویر انتخابی شما فقط می تواند png یا jpg باشد";
                }

            
            } else {
                return false;
            }

        } else {
            Db::$error = "فایلی را برای آپلود انتخاب کنید";
        }
    }
}
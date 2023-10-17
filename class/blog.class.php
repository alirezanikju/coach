<?php


class Blog{


    public function insertBlogName($blogImgName, $blogImgTmp,$blogImgType,$blogTitle)
    {

        if (is_uploaded_file($blogImgTmp)) {

            $fileType = explode("/",$blogImgName);
            $fileName = $blogTitle."-eby-blog-".time().substr($blogImgName,-4,4);


            $sql = "INSERT INTO blogindex (blogTitle,blogIndexImg) VALUE (:blogTitle,:blogIndexImg) ";
            $result = Db::prepare($sql);
            $result->bindValue(":blogTitle", $blogTitle);
            $result->bindValue(":blogIndexImg", $fileName);

            if ($result->execute()) {

                $fileType = ["image/png", "image/jpg"];
                if(in_array($blogImgType,$fileType)){

                    if(move_uploaded_file($blogImgTmp,"blogIndexImg/".$fileName)){
                        Db::$msg = "تصویر جدید مقاله با موفقیت افزوده شد";
                    }else{
                        Db::$error = "مشکلی در افزودن تصویر مقاله جدید پیش آمد";
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
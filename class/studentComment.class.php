<?php

class StudentComment{


    
    
        //insert Student Comment
        public function insertStudentComment($studentImgName,$studentImgTmp,$studentImgType,$studentName,$studentComment){
    
            if (is_uploaded_file($studentImgTmp)) {
    
                $fileType = explode("/",$studentImgName);
                $fileName = $studentImgName[0]."-eby-".time().substr($studentImgName,-4,4);
    
                $sql = "INSERT INTO studentComment (studentImgName,studentName,studentComment) VALUE (:studentImgName,:studentName,:studentComment) ";
                $result = Db::prepare($sql);
                $result->bindValue(":studentImgName", $fileName);
                $result->bindValue(":studentName", $studentName);
                $result->bindValue(":studentComment", $studentComment);
                if ($result->execute()) {
    
    
                    $fileType = ["image/png", "image/jpg"];
                    if(in_array($studentImgType,$fileType)){
    
                        if(move_uploaded_file($studentImgTmp,"bestStudent/".$fileName)){
                            Db::$msg = "کامنت دانشجو با موفقیت افزوده شد";
                        }else{
                            Db::$error = "مشکلی در افزودن تصویر کامنت دانشجو جدید پیش آمد";
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
    
    
    
    
    // select  Student Comment
    public function getStudentComment(){
        $sql = "SELECT * FROM studentComment";
        $result = Db::connect()->query($sql);
        return $result;
    }
    






    //remove Student Comment
    public function removeStudentComment($deleteStudentCommentId){
        $sql = "DELETE FROM studentComment WHERE id=:id";
        $result = Db::prepare($sql);
        $result->bindValue(":id",$deleteStudentCommentId);
    if($result->execute()){
    Db::$msg= "کامنت دانشجو با موفقیت حذف شد";
    
    }else{
    Db::$error = "مشکلی در حذف کامنت دانشجو پیش آمد ";
    
    }
    }
    







}
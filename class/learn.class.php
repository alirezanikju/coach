<?php

class Learn{




    //insert learn item
    public function insertLearnItem($learnImgName, $learnImgTmp,$learnImgType,$learnTitle,$aboutLearn){

        if (is_uploaded_file($learnImgTmp)) {

            $fileType = explode("/",$learnImgName);
            $fileName = $learnImgName[0]."-eby-".time().substr($learnImgName,-4,4);

            $sql = "INSERT INTO learn (learnphoto,learntitle,aboutlearn) VALUE (:learnphoto,:learntitle,:aboutlearn) ";
            $result = Db::prepare($sql);
            $result->bindValue(":learnphoto", $fileName);
            $result->bindValue(":learntitle", $learnTitle);
            $result->bindValue(":aboutlearn", $aboutLearn);
            if ($result->execute()) {


                $fileType = ["image/png", "image/jpg"];
                if(in_array($learnImgType,$fileType)){

                    if(move_uploaded_file($learnImgTmp,"learnImg/".$fileName)){
                        Db::$msg = "تصویر جدید آموزش با موفقیت افزوده شد";
                    }else{
                        Db::$error = "مشکلی در افزودن تصویر آموزش جدید پیش آمد";
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




// select learn
public function getLearn(){
    $sql = "SELECT * FROM learn";
    $result = Db::connect()->query($sql);
    return $result;
}

//remove learn
public function removeLearn($learnId){
    $sql = "DELETE FROM learn WHERE id=:id";
    $result = Db::prepare($sql);
    $result->bindValue(":id",$learnId);
if($result->execute()){
Db::$msg= "آموزش با موفقیت حذف شد";

}else{
Db::$error = "مشکلی در حذف آموزش پیش آمد ";

}
}


}
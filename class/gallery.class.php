<?php

class Gallery{




    //insert gallery
    public function insertGallery($galleryImgName,$galleryImgTmp,$galleryImgType){

        if (is_uploaded_file($galleryImgTmp)) {

            $fileType = explode("/",$galleryImgName);
            $fileName = $galleryImgName[0]."-eby-".time().substr($galleryImgName,-4,4);

            $sql = "INSERT INTO gallery (galleryImg) VALUE (:galleryImg) ";
            $result = Db::prepare($sql);
            $result->bindValue(":galleryImg", $fileName);
            if ($result->execute()) {


                $fileType = ["image/png", "image/jpg"];
                if(in_array($galleryImgType,$fileType)){

                    if(move_uploaded_file($galleryImgTmp,"galleryImg/".$fileName)){
                        Db::$msg = "تصویر جدید گالری با موفقیت افزوده شد";
                    }else{
                        Db::$error = "مشکلی در افزودن تصویر گالری جدید پیش آمد";
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




// select gallery
public function getgallery(){
    $sql = "SELECT * FROM gallery";
    $result = Db::connect()->query($sql);
    return $result;
}







//remove gallery
public function removeGallery($galleryId){
    $sql = "DELETE FROM gallery WHERE id=:id";
    $result = Db::prepare($sql);
    $result->bindValue(":id",$galleryId);
if($result->execute()){
Db::$msg= "آموزش با موفقیت حذف شد";

}else{
Db::$error = "مشکلی در حذف آموزش پیش آمد ";

}
}


}
<?php

class Service{




    //insert service
    public function insertService($serviceTitle,$aboutService){

            $sql = "INSERT INTO service (serviceTitle,aboutService) VALUE (:serviceTitle,:aboutService) ";
            $result = Db::prepare($sql);
            $result->bindValue(":serviceTitle", $serviceTitle);
            $result->bindValue(":aboutService", $aboutService);
            if ($result->execute()) {
                        Db::$msg = "سرویس با موفقیت افزوده شد";
                    }else{
                        Db::$error = "مشکلی در افزودن سرویس جدید پیش آمد";
                    }

    }




// select service
public function getService(){
    $sql = "SELECT * FROM service";
    $result = Db::connect()->query($sql);
    return $result;
}



//remove service
public function removeService($ServiceId){
    $sql = "DELETE FROM service WHERE id=:id";
    $result = Db::prepare($sql);
    $result->bindValue(":id",$ServiceId);
if($result->execute()){
Db::$msg= "سرویس با موفقیت حذف شد";

}else{
Db::$error = "مشکلی در حذف سرویس پیش آمد ";

}
}


}
<?php

class AboutUs{

    public function addAboutUsTxt($aboutUsTxt){
        $sql = "INSERT INTO aboutus(aboutUsTxt) VALUES (:aboutUsTxt) ";
            $result = Db::prepare($sql);
            $result->bindValue(":aboutUsTxt", $aboutUsTxt);
            if ($result->execute()) {
                Db::$msg = "متن جدید درباره ما با موفقیت افزوده شد";
            }else{
                Db::$error = "افزودن متن درباره ما با شکست مواجه شد";
            }
    }


    public function getAboutUsTxt(){
        $sql = "SELECT * FROM aboutus";
        $result = Db::connect()->query($sql);
        return $result;
    }


}




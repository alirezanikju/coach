<?php

class Events{


    //insert enent
    public function addEvent($eventName,$eventCity,$eventPlace,$eventDate){
        $sql = "INSERT INTO events(eventName, eventCity, eventPlace, eventDate) VALUES (:eventName, :eventCity, :eventPlace, :eventDate)";
        $result = Db::prepare($sql);
        $result->bindValue(":eventName",$eventName);
        $result->bindValue(":eventCity",$eventCity);
        $result->bindValue(":eventPlace",$eventPlace);
        $result->bindValue(":eventDate",$eventDate);

        if($result->execute()){
            Db::$msg = "رویداد با موفقیت افزوده شد";
        }else{
            Db::$error = "مشکلی در افزودن رویداد پیش آمد";
        }
    }


    //get enent
    public function getEvent() {
        $sql = "SELECT * FROM events";
        $result = Db::connect()->query($sql);
        return $result;
    }


    //remove event
    public function removeEvent($deleteEventId) {
        $sql = "DELETE FROM events WHERE id = :id";
        $result = Db::prepare($sql);
        $result -> bindValue(":id",$deleteEventId);
        if($result -> execute()){
            Db::$msg = "حذف رویداد با موفقیت انجام شد";
        }else{
            Db::$error = "مشکلی در حذف رویداد پیش آمد";
        }
    }


}
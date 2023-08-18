<?php


class Db{

    private static $server = "localhost";
    private static $dbName = "coach";
    private static $userName = "root";
    private static $pwd = "";
    private static $dsn;
    public static $con;


    public static function connect() {

        try{
        self::$dsn = "mysql:host=".self::$server.";dbname=".self::$dbName;
        self::$con = new PDO(self::$dsn,self::$userName,self::$pwd);
        self::$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return self::$con;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }


}

Db::connect();














<?php

function myAutoload($class){
    require_once "class/$class.class.php";
}

spl_autoload_register("myAutoload");
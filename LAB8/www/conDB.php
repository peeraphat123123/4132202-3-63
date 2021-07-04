<?php
$host = "localhost";
$user = "root";
$pass = "test";
$db = "class_room";

try{
    $mysqli = new mysqli("host","user","pass","db");
    $mysqli->query("SET NAMES utf8");
}
catch(Excaption $e){
    echo $e->getMassage();
    echo "Error !!!";
}
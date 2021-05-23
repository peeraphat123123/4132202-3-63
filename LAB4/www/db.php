<?php

try{
    $mysqli = new mysqli("localhost","root","test","myDB");
    echo "Connected !!!";
}
catch(Excaption $e){
    echo $e->getMassage();
    echo "Error !!!";
}
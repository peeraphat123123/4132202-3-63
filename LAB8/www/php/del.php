<?php
require "../conDB.php";

$id = $_GET['id'];
$sub_id = $_GET['sub_id'];

try{
    $sql ="DELETE FROM tb_register
           WHERE id = '$id' AND subject_id = '$sub_id'";
    $mysqli->query($sql);

    if($mysqli->errno == null)
        header("Locatin:/add.php");
}
catch(Excaption $e){
     echo $e->getMassage();
}
?>
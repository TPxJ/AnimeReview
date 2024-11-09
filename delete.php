<?php
include("mysqlconnect.php");

$oldsql = "SELECT `a_star` FROM `animedata` WHERE `a_id` = " . $_GET["id"];
$oldres = mysqli_query($conn , $oldsql);
$assocold = mysqli_fetch_all($oldres , MYSQLI_ASSOC);

$newstar = intval($assocold[0]["a_star"]) + 1;


$sql = 'UPDATE `animedata` SET `a_star` = ' . $newstar . " WHERE a_id = " . $_GET["id"];
$vote = mysqli_query($conn , $sql);

if($vote){
    header("Location:index.php");
    exit();
}
?>
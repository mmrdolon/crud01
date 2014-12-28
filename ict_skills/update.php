<?php

$id = $_POST['id'];
$Field = $_POST['field'];
$skillDescription  = $_POST['skill_description'];
$Extra = $_POST['extra'];

$link = mysqli_connect("localhost",
    "root",
    "",
    "crud");
$query = "UPDATE `crud`.`skills` SET  `field` = '".$Field."',`skill_description` = '".$skillDescription."',
    `extra` = '".$Extra."'
    WHERE `skills`.`id` = $id;";
mysqli_query($link, $query);
header('location:list.php');
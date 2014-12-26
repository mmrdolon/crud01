<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "",
    "crud");

$query = "DELETE FROM `crud`.`academic_info3` WHERE `academic_info3`.`id` = $id";

mysqli_query($link, $query);

header('location:list.php');
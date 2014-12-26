<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "",
    "crud");

$query = "DELETE FROM `crud`.`academic_info2` WHERE `academic_info2`.`id` = $id";

mysqli_query($link, $query);

header('location:list.php');
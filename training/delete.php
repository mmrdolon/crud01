<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "",
    "crud");

$query = "DELETE FROM `crud`.`training` WHERE `training`.`id` = $id";

mysqli_query($link, $query);

header('location:list.php');
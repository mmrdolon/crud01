<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "",
    "crud");

$query = "DELETE FROM `crud`.`employment` WHERE `employment`.`id` = $id";

mysqli_query($link, $query);

header('location:list.php');
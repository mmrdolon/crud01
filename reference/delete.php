<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "",
    "crud");

$query = "DELETE FROM `crud`.`reference` WHERE `reference`.`id` = $id";

mysqli_query($link, $query);

header('location:list.php');
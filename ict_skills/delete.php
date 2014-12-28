<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "",
    "crud");

$query = "DELETE FROM `crud`.`skills` WHERE `skills`.`id` = $id";

mysqli_query($link, $query);

header('location:list.php');
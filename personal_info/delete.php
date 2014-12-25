<?php

$ssc_roll = $_GET['ssc_roll'];

$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "crud");

$query = "DELETE FROM `crud`.`personal_info` WHERE `personal_info`.`ssc_roll` = $ssc_roll";

mysqli_query($link, $query);

header('location:list.php');
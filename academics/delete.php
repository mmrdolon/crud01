<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "c17c17dolon01",
    "mrd01935846417",
    "c17contact_info");

$query = "DELETE FROM `c17contact_info`.`academics` WHERE `academics`.`id` = $id";

mysqli_query($link, $query);

header('location:list.php');
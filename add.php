<?php

$firstName = $_POST['firstName'];
$lastName  = $_POST['lastName'];

$link = mysqli_connect("localhost",
                        "root",
                        "lict@2",
                        "students");

$query = "INSERT INTO `students`.`users` (
`first_name` ,
`last_name`
)
VALUES (
    '$firstName', '$lastName'
)";

mysqli_query($link, $query);

header('location:list.php');
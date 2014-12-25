<?php

$firstName = $_POST['track'];
$firstName = $_POST['firstName'];
$firstName = $_POST['firstName'];
$firstName = $_POST['firstName'];
$firstName = $_POST['firstName'];
$firstName = $_POST['firstName'];
$firstName = $_POST['firstName'];
$firstName = $_POST['firstName'];
$firstName = $_POST['firstName'];
$lastName  = $_POST['lastName'];
$firstName = $_POST['firstName'];
$firstName = $_POST['firstName'];
$firstName = $_POST['firstName'];
$firstName = $_POST['firstName'];

$link = mysqli_connect("localhost",
    "root",
    "",
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
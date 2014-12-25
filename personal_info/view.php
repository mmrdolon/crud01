<?php

$ssc_roll = $_GET['ssc_roll'];

$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "crud");

$query = "select * from personal_info WHERE ssc_roll = $ssc_roll";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

print_r($row);

?>

<a href="list.php">Go to Home</a>
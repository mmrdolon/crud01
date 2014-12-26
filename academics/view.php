<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "c17c17dolon01",
    "mrd01935846417",
    "c17contact_info");

$query = "select * from academics WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

print_r($row);

?>

<a href="list.php">Go to Home</a>
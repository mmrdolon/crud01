<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 12/22/14
 * Time: 5:03 PM
 */
$id = $_GET['ssc_roll'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud01_new");

$query = "select * from users WHERE id = $ssc_roll";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

print_r($row);
?>

<a href="list.php">Go to Home</a>
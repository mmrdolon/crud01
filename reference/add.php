<?php
//print_r($_POST);

$Name = $_POST['a_name'];
$Organization  = $_POST['organization'];
$Address  = $_POST['address'];
$Ophone = $_POST['o_phone'];
$Hphone  = $_POST['h_phone'];
$Mobile  = $_POST['mobile'];
$Email = $_POST['email'];
$Relation  = $_POST['relation'];

$link = mysqli_connect("localhost",
    "root",
    "",
    "crud") or die('cannot connect');

$query = "INSERT INTO `crud`.`reference` (`id`,
`a_name`,`organization`,`address`,`o_phone`,`h_phone`,`mobile`,`email`,`relation`)
VALUES (NULL ,'$Name', '$Organization','$Address','$Ophone','$Hphone','$Mobile','$Email','$Relation')";

//echo $query;
mysqli_query($link, $query);

header('location:list.php');
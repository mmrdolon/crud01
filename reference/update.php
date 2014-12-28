<?php
$id = $_POST['id'];
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
    "crud");
$query = "UPDATE `crud`.`reference` SET  `a_name` = '".$Name."',`organization` = '".$Organization."',
    `address` = '".$Address."',`o_phone` = '".$Ophone."',`h_phone` = '".$Hphone."',
    `mobile` = '".$Mobile."',`email` = '".$Email."',`relation` = '".$Relation."'
    WHERE `reference`.`id` = $id;";
mysqli_query($link, $query);
header('location:list.php');
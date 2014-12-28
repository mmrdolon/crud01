<?php

$id = $_POST['id'];
$trainingTitle = $_POST['training_title'];
$trainingDescription  = $_POST['training_description'];
$Institute  = $_POST['institute'];
$Address  = $_POST['address'];
$trainingYear  = $_POST['training_year'];
$Duration = $_POST['duration'];
$link = mysqli_connect("localhost",
    "root",
    "",
    "crud");
$query = "UPDATE `crud`.`training` SET  `training_title` = '".$trainingTitle."',`training_description` = '".$trainingDescription."',
    `institute` = '".$Institute."',`address` = '".$Address."',`training_year` = '".$trainingYear."', `duration` = '".$Duration."',
 WHERE `training`.`id` = $id;";
mysqli_query($link, $query);
header('location:list.php');
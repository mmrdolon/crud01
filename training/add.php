<?php
//print_r($_POST);

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

$query = "INSERT INTO `crud`.`training` (
`training_title`,`training_description`,`institute`,`address`,`training_year`,`duration`)
VALUES ('$trainingTitle', '$trainingDescription','$Institute','$Address','$trainingYear','$Duration')";

mysqli_query($link, $query);

header('location:list.php');
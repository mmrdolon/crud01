<?php
//print_r($_POST);

$Field = $_POST['field'];
$skillDescription  = $_POST['skill_description'];
$Extra  = $_POST['extra'];

$link = mysqli_connect("localhost",
    "root",
    "",
    "crud") or die('cannot connect');

$query = "INSERT INTO `crud`.`skills` (`id`,
`field`,`skill_description`,`extra`)
VALUES (NULL ,'$Field', '$skillDescription','$Extra')";

//echo $query;
mysqli_query($link, $query);

header('location:list.php');
<?php

$id = $_POST['id'];
$examTitle = $_POST['exam_title'];
$Institution = $_POST['institution'];
$link = mysqli_connect("localhost",
    "c17c17dolon01",
    "mrd01935846417",
    "c17contact_info");
$query = "UPDATE `c17contact_info`.`academics` SET `exam_title` = '".$examTitle."',
`institution` = '".$Institution ."' WHERE `academics`.`id` = $id;";
mysqli_query($link, $query);
header('location:list.php');
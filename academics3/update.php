<?php

$id = $_POST['id'];
$Level = $_POST['edu_level'];
$examTitle  = $_POST['exam_title'];
$Group  = $_POST['student_group'];
$Institution  = $_POST['institution'];
$resultType  = $_POST['result_type'];
$Result  = $_POST['result'];
$passingYear  = $_POST['passing_year'];
$Duration  = $_POST['duration'];
$Achievement  = $_POST['achievement'];
$link = mysqli_connect("localhost",
    "root",
    "",
    "crud");
$query = "UPDATE `crud`.`academic_info3` SET  `edu_level` = '".$Level."',`exam_title` = '".$examTitle."',
    `student_group` = '".$Group."',`institution` = '".$Institution."',`result_type` = '".$resultType."', `result` = '".$Result."',
        `passing_year` = '".$passingYear."',`duration` = '".$Duration."',
        `achievement` = '".$Achievement."' WHERE `academic_info3`.`id` = $id;";
mysqli_query($link, $query);
header('location:list.php');
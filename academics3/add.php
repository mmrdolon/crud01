<?php
//print_r($_POST);

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
    "crud") or die('cannot connect');

$query = "INSERT INTO `crud`.`academic_info3` (`id`,
`edu_level`,`exam_title`,`student_group`,`institution`,`result_type`,`result`,`passing_year`,`duration`,`achievement`)
VALUES (NULL ,'$Level', '$examTitle','$Group','$Institution','$resultType','$Result','$passingYear','$Duration','$Achievement')";

//echo $query;
mysqli_query($link, $query);

header('location:list.php');
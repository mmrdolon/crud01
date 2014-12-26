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
    "c17c17dolon01",
    "mrd01935846417",
    "c17contact_info") or die('cannot connect');

$query = "INSERT INTO `c17contact_info`.`academics` (`id`,
`edu_level`,`exam_title`,`student_group`,`institution`,`result_type`,`result`,`passing_year`,`duration`,`achievement`)
VALUES (NULL ,'$Level', '$examTitle','$Group','$Institution','$resultType','$Result','$passingYear','$Duration','$Achievement')";

echo $query;
mysqli_query($link, $query);

header('location:list.php');
<?php

$Track = $_POST['track'];
$SSCroll = $_POST['ssc_roll'];
$HSCroll = $_POST['hsc_roll'];
$Laptop = $_POST['laptop'];
$Name = $_POST['a_name'];
$Father_name = $_POST['father_name'];
$Mother_name = $_POST['mother_name'];
$Religion = $_POST['religion'];
$DOB = $_POST['dob'];
$Sex = $_POST['sex'];
$Nationality  = $_POST['nationality'];
$Address = $_POST['address'];
$Mobile = $_POST['mobile'];
$Email = $_POST['email1'];


$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "crud");

$query = "INSERT INTO `crud`.`personal_info` (`track`,`ssc_roll`,`hsc_roll`,`laptop`,`a_name`,`father_name`,
`mother_name`,`religion`,`value`,`sex`,`nationality`,`address`,`mobile`,`email`)

VALUES (
    '$Track','$SSCroll','$HSCroll','$Laptop','$Name','$Father_name','$Mother_name',
'$Religion','$Value','$Sex','$Nationality','$Address','$Mobile','$Email'
)";

mysqli_query($link, $query);

header('location:list.php');
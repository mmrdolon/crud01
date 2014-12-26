<?php
//print_r($_POST);

$companyName = $_POST['company_name'];
$companyBusiness  = $_POST['company_business'];
$Address  = $_POST['address'];
$Designation  = $_POST['designation'];
$Department  = $_POST['department'];
$Duration  = $_POST['duration'];
$Responsibility  = $_POST['responsibility'];


$link = mysqli_connect("localhost",
    "root",
    "",
    "crud") or die('cannot connect');

$query = "INSERT INTO `crud`.`employment` (`id`,
`company_name`,`company_business`,`address`,`designation`,`department`,`duration`,`responsibility`)
VALUES (NULL ,'$companyName', '$companyBusiness','$Address','$Designation','$Department','$Duration','$Responsibility')";

//echo $query;
mysqli_query($link, $query);

header('location:list.php');
<?php

$id = $_POST['id'];
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
    "crud");
$query = "UPDATE `crud`.`employment` SET  `company_name` = '".$companyName."',`company_business` = '".$companyBusiness."',
    `address` = '".$Address."',`designation` = '".$Designation."',`department` = '".$Department."', `duration` = '".$Duration."',
        
        `responsibility` = '".$Responsibility."' WHERE `employment`.`id` = $id;";
mysqli_query($link, $query);
header('location:list.php');
<?php

$id = $_POST['id'];
$presentAddress = $_POST['present_address'];
$permanentAddress = $_POST['permanent_address'];
$District = $_POST['district'];

$link = mysqli_connect("localhost",
    "c17c17dolon01",
    "mrd01935846417",
    "c17contact_info");
$query = "UPDATE `c17contact_info`.`information` SET `present_address` = '".$presentAddress."',
`permanent_address` = '".$permanentAddress ."',`district`= '".$District."' WHERE `information`.`id` = $id;";
mysqli_query($link, $query);
header('location:list.php');
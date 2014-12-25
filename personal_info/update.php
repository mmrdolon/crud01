<?php

$ssc_roll = $_POST['ssc_roll'];
$Name = $_POST['a_name'];
$HSCroll = $_POST['hsc_roll'];
$link = mysqli_connect("localhost",
    "root",
    "",
    "crud");
$query = "UPDATE `crud`.`personal_info` SET `a_name` = '".$Name."',
`hsc_roll` = '".$HSCroll ."' WHERE `personal_info`.`ssc_roll` = $ssc_roll;";
mysqli_query($link, $query);
header('location:list.php');
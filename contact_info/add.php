<?php
$presentAddress = $_POST['present_address'];
$permanentAddress = $_POST['permanent_address'];
$District = $_POST['district'];
$homePhone = $_POST['home_phone'];
$Mobile = $_POST['mobile'];
$Econtact = $_POST['e_contact'];
$Pinformation = $_POST['personal_email'];
$Aemail = $_POST['a_email'];
$Gender = $_POST['gender'];

$link = mysqli_connect("localhost",
    "c17c17dolon01",
    "mrd01935846417",
    "c17contact_info");

$query = "INSERT INTO `c17contact_info`.`information` (`id`,`present_address`,`permanent_address`,`district`,`home_phone`,`mobile`,`e_contact`,
`personal_email`,`a_email`,`gender`)

VALUES ( NULL ,'$presentAddress ','$permanentAddress ','$District','$homePhone,'$Mobile','$Econtact',
'$Pinformation','$Aemail','$Gender')";

mysqli_query($link, $query);

header('location:list.php');


I/*NSERT INTO `contact_info`.`information` (
`id` ,
`present_address` ,
`permanent_address` ,
`district` ,
`home_phone` ,
`mobile` ,
`e_contact` ,
`personal_email` ,
`a_email`
)
VALUES (
    '1', 'qe', 'rt', 'dhka', '55', '8885', '2153', 'ghghg@hgg', 'jhjh@jkhjh'
);*/
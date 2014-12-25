<?php
$Email = $_POST['email1'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud01_new");

/*

$query = "INSERT INTO `crud01_new`.`emails` (
`id`,`email`,`created`)
VALUES ('','$Email','')";

*/

$query= "INSERT INTO `crud01_new`.`emails` (
`id` ,
`email` ,
`created`
)
VALUES (
    NULL , '$Email', NOW( )
)";




mysqli_query($link, $query);

header('location:email_list.php');
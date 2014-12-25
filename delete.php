<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 12/22/14
 * Time: 4:33 PM
 */
$id = $_GET['ssc_roll'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud01_new");

$query = "DELETE FROM `crud01_new`.`crud` WHERE `crud`.`ssc_roll` = $id";

mysqli_query($link, $query);

header('location:list.php');
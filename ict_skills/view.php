<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "",
    "crud");

$query = "select * from skills WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

//print_r($row);

?>

<h1>View Page</h1>

<table border="1" width="80%">


    <tr>
        <td>ID</td>
        <td>Field Of Specialization</td>
        <td>Skill Description</td>
        <td>Extra Curricular Activities</td>

    </tr>


    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['field']?></td>
        <td><?php echo $row['skill_description']?></td>
        <td><?php echo $row['extra']?></td>


    </tr>

</table>

<a href="list.php">Go to Home</a>
<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "",
    "crud");

$query = "select * from employment WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

//print_r($row);

?>

<table border="1" width="80%">


    <tr>
        <td>ID</td>
        <td>Company Name: </td>
        <td>Company Business: </td>
        <td>Address: </td>
        <td>Designation: </td>
        <td>Department: </td>
        <td>Duration: </td>
        <td>Responsibility: </td>

    </tr>


    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['company_name']?></td>
        <td><?php echo $row['company_business']?></td>
        <td><?php echo $row['address']?></td>
        <td><?php echo $row['designation']?></td>
        <td><?php echo $row['department']?></td>
        <td><?php echo $row['duration']?></td>
        <td><?php echo $row['responsibility']?></td>
    </tr>

</table>

<a href="list.php">Go to Home</a>
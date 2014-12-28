<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "",
    "crud");

$query = "select * from training WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

//print_r($row);

?>

<table border="1" width="80%">


    <tr>
        <td>ID</td>
        <td>Training Title</td>
        <td>Training Description</td>
        <td>Institute</td>
        <td>Address</td>
        <td>Training Year</td>
        <td>Duration</td>
    </tr>


    <tr>

        <td><?php echo $row['id']?></td>
        <td><?php echo $row['training_title']?></td>
        <td><?php echo $row['training_description']?></td>
        <td><?php echo $row['institute']?></td>
        <td><?php echo $row['address']?></td>
        <td><?php echo $row['training_year']?></td>
        <td><?php echo $row['duration']?></td>
    </tr>

</table>

<a href="list.php">Go to Home</a>
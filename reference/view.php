<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "",
    "crud");

$query = "select * from reference WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

//print_r($row);

?>

<h1>View Page</h1><br>
<a href="list.php">Go To List</a>

<table border="1" width="80%">
    <tr>

        <td>ID</td>
        <td>Name</td>
        <td>Organization</td>
        <td>Address</td>
        <td>Phone(Office)</td>
        <td>Phone(Home)</td>
        <td>Mobile</td>
        <td>Email</td>
        <td>Relation</td>
        <td>Action</td>


    </tr>
    <?php
    foreach($result as $row){
        ?>

        <tr>

            <td><?php echo $row['id']?></td>
            <td><?php echo $row['a_name']?></td>
            <td><?php echo $row['organization']?></td>
            <td><?php echo $row['address']?></td>
            <td><?php echo $row['o_phone']?></td>
            <td><?php echo $row['h_phone']?></td>
            <td><?php echo $row['mobile']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['relation']?></td>


            <td> <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> | <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> | <a href="view.php?id=<?php echo $row['id']?>">View</a></td>
        </tr>

    <?php
    }
    ?>

</table>

<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 12/22/14
 * Time: 3:54 PM
 */


$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud01_new");

$query = "select * from emails;";

$result = mysqli_query($link, $query);
?>


<ul>
<li><a href="create_email.php">Create New</a> </li>
</ul>

<table border="1" width="70%">
    <tr>

        <td>ID</td>
        <td>Emails</td>

        <td>Date</td>

    </tr>
    <?php
    foreach($result as $row){
        ?>

        <tr>

            <td><?php echo $row['id']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['created']?></td>

            <td> <a href="#">Edit</a> | <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> | <a href="softdelete.php?id=<?php echo $row['id']?>">Soft Delete</a></td>
        </tr>

    <?php
    }
    ?>

</table>
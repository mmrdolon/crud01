<?php

$link = mysqli_connect("localhost",
    "c17c17dolon01",
    "mrd01935846417",
    "c17contact_info");

$query = "select * from information;";

$result = mysqli_query($link, $query);


//while( $row = mysqli_fetch_assoc($result) ){
//    print_r($row);
//}

//alternative


//print_r($row);

?>

<ul>
    <li><a href="#">Download as XL</a> </li>
    <li><a href="#">Download as PDF</a> </li>
    <li><a href="create.php">Create New</a> </li>
</ul>

<table border="1" width="70%">
    <tr>
        <td>ID</td>
        <td>Present Address</td>
        <td>Permanent Address</td>
        <td>District</td>
        <td>Home Phone</td>
        <td>Mobile</td>
        <td>Emergency Contact</td>
        <td>Personal Email</td>
        <td>Alternative Email</td>
        <td>Gender</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>

        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['present_address']?></td>
            <td><?php echo $row['permanent_address']?></td>
            <td><?php echo $row['district']?></td>
            <td><?php echo $row['home_phone']?></td>
            <td><?php echo $row['mobile']?></td>
            <td><?php echo $row['e_contact']?></td>
            <td><?php echo $row['personal_email']?></td>
            <td><?php echo $row['a_email']?></td>
            <td><?php echo $row['gender']?></td>

            <td> <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> | <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> | <a href="view.php?id=<?php echo $row['id']?>">View</a></td>
        </tr>

    <?php
    }
    ?>

</table>




?>
<?php

$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "crud");

$query = "select * from personal_info;";

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
        <td>Track</td>
        <td>S.S.C Roll</td>
        <td>H.S.C Roll</td>
        <td>Laptop</td>
        <td>Name</td>
        <td>Father's Name</td>
        <td>Mother's Name</td>
        <td>Religion</td>
        <td>Date Of Birth</td>
        <td>Sex</td>
        <td>Nationality</td>
        <td>H.S.C Roll</td>
        <td>Address</td>
        <td>Mobile</td>
        <td>Email</td>
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>

        <tr>
            <td><?php echo $row['track']?></td>
            <td><?php echo $row['ssc_roll']?></td>
            <td><?php echo $row['hsc_roll']?></td>
            <td><?php echo $row['laptop']?></td>
            <td><?php echo $row['a_name']?></td>
            <td><?php echo $row['father_name']?></td>
            <td><?php echo $row['mother_name']?></td>
            <td><?php echo $row['religion']?></td>
            <td><?php echo $row['dob']?></td>
            <td><?php echo $row['sex']?></td>
            <td><?php echo $row['nationality']?></td>
            <td><?php echo $row['address']?></td>
            <td><?php echo $row['mobile']?></td>
            <td><?php echo $row['email']?></td>

            <td> <a href="#">Edit</a> | <a href="delete.php?ssc_roll=<?php echo $row['ssc_roll']?>">Delete</a> | <a href="view.php?id=<?php echo $row['ssc_roll']?>">View</a></td>
        </tr>

    <?php
    }
    ?>

</table>




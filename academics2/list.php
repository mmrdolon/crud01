<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 12/22/14
 * Time: 3:54 PM
 */


$link = mysqli_connect("localhost",
    "root",
    "",
    "crud");

$query = "select * from academic_info2;";

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

<table border="1" width="80%">
    <tr>

        <td>ID</td>
        <td>level of Education</td>
        <td>Exam Title</td>
        <td>Group/Subject</td>
        <td>Institution</td>
        <td>Result Type</td>
        <td>Result</td>
        <td>Passing Year</td>
        <td>Duration</td>
        <td>Achievements</td>
        <td>Action</td>

    </tr>
    <?php
    foreach($result as $row){
        ?>

        <tr>

            <td><?php echo $row['id']?></td>
            <td><?php echo $row['edu_level']?></td>
            <td><?php echo $row['exam_title']?></td>
            <td><?php echo $row['student_group']?></td>
            <td><?php echo $row['institution']?></td>
            <td><?php echo $row['result_type']?></td>
            <td><?php echo $row['result']?></td>
            <td><?php echo $row['passing_year']?></td>
            <td><?php echo $row['duration']?></td>
            <td><?php echo $row['achievement']?></td>


            <td> <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> | <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> | <a href="view.php?id=<?php echo $row['id']?>">View</a></td>
        </tr>

    <?php
    }
    ?>

</table>




<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "",
    "crud");

$query = "select * from academic_info2 WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

//print_r($row);

?>

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
    </tr>


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
    </tr>

</table>

<a href="list.php">Go to Home</a>
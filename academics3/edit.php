<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "",
    "crud");
$query = "select * from academic_info3 WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />
    <label> Level Of Education:</label>
    <input type="text" name="edu_level" value="<?php echo $row['edu_level'];?>" /><br>
    <label> Exam Title:</label>
    <input type="text" name="exam_title" value="<?php echo $row['exam_title'];?>" /><br>
    <label>Group/Subject:</label>
    <input type="text" name="student_group" value="<?php echo $row['student_group'];?>" /><br>
    <label> Institution:</label>
    <input type="text" name="institution" value="<?php echo $row['institution'];?>" /><br>
    <label> Result Type:</label>
    <input type="text" name="result_type" value="<?php echo $row['result_type'];?>" /><br>
    <label> Result:</label>
    <input type="text" name="result" value="<?php echo $row['result'];?>" /><br>

    <label> Passing Year:</label>
    <input type="text" name="passing_year" value="<?php echo $row['passing_year'];?>" /><br>

    <label> Duration: <label>
            <input type="text" name="duration" value="<?php echo $row['duration'];?>" /><br>
            <label> Achievement :</label>
            <input type="text" name="achievement" value="<?php echo $row['achievement'];?>" /><br>


            <button type="submit">Submit</button>
</form>
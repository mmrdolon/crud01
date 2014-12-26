<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "c17c17dolon01",
    "mrd01935846417",
    "c17contact_info");
$query = "select * from academics WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />
    <label> Exam Title:</label>
    <input type="text" name="exam_title" value="<?php echo $row['exam_title'];?>" />
    <label>Institution:</label>
    <input type="text" name="institution" value="<?php echo $row['institution'];?>" />
    <button type="submit">Submit</button>
</form>
<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "",
    "crud");
$query = "select * from skills WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>

<h1>Edit Form</h1>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />

    <label> Field Of Specialization:</label>
    <input type="text" name="field" value="<?php echo $row['field'];?>" /><br>

    <label> Skill Description:</label>
    <input type="text" name="skill_description" value="<?php echo $row['skill_description'];?>" /><br>


    <label> Extra Curricular Activities:</label>
    <input type="text" name="extra" value="<?php echo $row['extra'];?>" /><br>

            <button type="submit">Submit</button>
</form>
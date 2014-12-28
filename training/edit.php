
<h1> EDIT FORM</h1>

<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "",
    "crud");
$query = "select * from training WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />
    <label> Training Title:</label>
    <input type="text" name="training_title" value="<?php echo $row['training_title'];?>" /><br>
    <label> Training Description:</label>
    <input type="text" name="training_description" value="<?php echo $row['training_description'];?>" /><br>
    <label>Institution:</label>
    <input type="text" name="institution" value="<?php echo $row['institution'];?>" /><br>
    <label> Address:</label>
    <input type="text" name="address" value="<?php echo $row['address'];?>" /><br>
    <label> Training Year:</label>
    <input type="text" name="training_year" value="<?php echo $row['training_year'];?>" /><br>
    <label> Duration:</label>
    <input type="text" name="duration" value="<?php echo $row['duration'];?>" /><br>




            <button type="submit">Submit</button>
</form>
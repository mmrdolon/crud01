<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "",
    "crud");
$query = "select * from employment WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />
    <label> Company Name:</label>
    <input type="text" name="company_name" value="<?php echo $row['company_name'];?>" /><br>
    <label> Company Business:</label>
    <input type="text" name="company_business" value="<?php echo $row['company_business'];?>" /><br>
    <label>Address:</label>
    <input type="text" name="address" value="<?php echo $row['address'];?>" /><br>
    <label> Designation:</label>
    <input type="text" name="designation" value="<?php echo $row['designation'];?>" /><br>
    <label> Department:</label>
    <input type="text" name="department" value="<?php echo $row['department'];?>" /><br>
    <label> Duration:</label>
    <input type="text" name="duration" value="<?php echo $row['duration'];?>" /><br>

    <label> Responsibility:</label>
    <input type="text" name="responsibility" value="<?php echo $row['responsibility'];?>" /><br>




    <button type="submit">Submit</button>
</form>
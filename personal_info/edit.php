<?php
$ssc_roll = $_GET['ssc_roll'];
$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "crud");
$query = "select * from personal_info WHERE ssc_roll = $ssc_roll";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
<form action="update.php" method="post">
    <input type="hidden" name="ssc_roll" value="<?php echo $row['ssc_roll'];?>" />
    <label> Name:</label>
    <input type="text" name="a_name" value="<?php echo $row['a_name'];?>" />
    <label>H.S.C Roll:</label>
    <input type="number" name="hsc_roll" value="<?php echo $row['hsc_roll'];?>" />
    <button type="submit">Submit</button>
</form>
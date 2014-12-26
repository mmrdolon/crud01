<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "c17c17dolon01",
    "mrd01935846417",
    "c17contact_info");
$query = "select * from information WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />
    <label> Present Address:</label>
    <input type="text" name="present_address" value="<?php echo $row['present_address'];?>" />
    <label>Permanent Address:</label>
    <input type="text" name="permanent_address" value="<?php echo $row['permanent_address'];?>" />

    <label>District:</label>
   <select>
       <option value="rajshahi"<?php if($district==rajshahi)echo "selected=selected"?>>Rajshahi</option>
       <option value="dhaka"<?php if($district==dhaka)echo "selected=selected"?>>Dhaka</option>
       <option value="khulna"<?php if($district==khulna)echo "selected=selected"?>>Khulna</option>
       <option value="barisal"<?php if($district==barisal)echo "selected=selected"?>>barisal</option>

   </select>


    <button type="submit">Submit</button>
</form>
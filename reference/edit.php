<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "",
    "crud");
$query = "select * from reference WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>

<h1>Edit Form</h1>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />


    <label> Name:</label>
    <input type="text" name="a_name" value="<?php echo $row['a_name'];?>" /><br>


    <label> Organization:</label>
    <input type="text" name="organization" value="<?php echo $row['organization'];?>" /><br>


    <label> Address:</label>
    <input type="text" name="address" value="<?php echo $row['address'];?>" /><br>

    <label> Phone(Office):</label>
    <input type="text" name="o_phone" value="<?php echo $row['o_phone'];?>" /><br>

    <label> Skill Description:</label>
    <input type="text" name="h_phone" value="<?php echo $row['h_phone'];?>" /><br>

    <label> Mobile:</label>
    <input type="text" name="mobile" value="<?php echo $row['mobile'];?>" /><br>

    <label> Email:</label>
    <input type="text" name="email" value="<?php echo $row['email'];?>" /><br>

    <label> Relation:</label>
    <input type="text" name="relation" value="<?php echo $row['relation'];?>" /><br>


    <button type="submit">Submit</button>
</form>
<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "",
    "crud");
$query = "select * from skills WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
var_dump($row['field']);
?>

<h1>Edit Form</h1>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />

    <label> Field Of Specialization:</label>
   <select name="field" id="field">

       <option value="" selected="selected">Select category</option>

       <option <?php if($row['field'] == 'Information Technology') echo 'selected'; ?> value="Information Technology" >Information Technology</option>
       <option <?php if($row['field'] == 'Computer Science & Enginering')echo'selected';?> value="Computer Science & Enginering">Computer Science & Enginering</option>
       <option <?php if($row['field'] == 'Accounting')echo'selected';?> value="Accounting">Accounting</option>
       <option <?php if($row['field'] == 'Programming')echo'selected';?> value="Programming">Programming</option>
   </select>

    <label> Skill Description:</label>
    <input type="text" name="skill_description" value="<?php echo $row['skill_description'];?>" /><br>


    <label> Extra Curricular Activities:</label>
    <input type="text" name="extra" value="<?php echo $row['extra'];?>" /><br>

            <button type="submit">Submit</button>
</form>
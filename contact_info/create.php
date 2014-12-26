<form action="add.php" method="post">

    <h1> Contact Information</h1><br>

    <a href="list.php">Show List </a><br><br>


    <label> Present Address: </label>
    <input type="text" name="present_address"><br>

    <label> Permanent Address: </label>
    <input type="text" name="permanent_address"><br>

    <label>District: </label>
    <select>
        <option  value="rajshahi">Rajshahi</option>
        <option value="dhaka">Dhaka</option>
        <option value="khulna">Khulna</option>
        <option value="barisal">Barisal</option>

    </select><br>


    <label>Home Phone: </label>
    <input type="number" name="home_phone" /><br>

    <label>Mobile: </label>
    <input type="number" name="mobile" /><br>

    <label>Emergency contact: </label>
    <input type="number" name="e_contact" /><br>

    <label>Email: </label>
    <input type="email" name="personal_email" /><br>


    <label>Alternate Email: </label>
    <input type="email" name="a_email" /><br>

    <label>Gender: </label>
    <input type="radio" name="gender" value="male" checked />Male
    <input type="radio" name="gender" value="female" />Female<br>

    <button type="submit">Submit</button>

</form>
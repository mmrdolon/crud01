<form action="list.php" method="post">

    <h1>Track Information</h1>

    <label> Prefered Track: </label>
    <input type="text" name="track" /><br>

    <label>S.S.C. Roll: </label>
    <input type="text" name="ssc_roll" /> <br>

    <label>H.S.C. Roll: </label>
    <input type="email" name="hsc_roll" ><br>

    <label>Has Laptop: </label>
    <input type="email" name="laptop" ><br>

    <h1>Personal Information</h1><br>

    <label>Name: </label>
    <input type="text" name="a_name" ><br>

    <label>Father's Name: </label>
    <input type="text" name="father_name" ><br>

    <label>Mother's Name: </label>
    <input type="text" name="mother_name" ><br>

    <label>Religion: </label>
    <input type="text" name="religion" ><br>

    <label>Date Of Birth:</label>
    <select>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>


    <select>
        <option value="1">Jan</option>
        <option value="2">Feb</option>
        <option value="3">Mar</option>
        <option value="4">Oct</option>
        <option value="5">Nov</option>
    </select>


    <select>
        <option value="1">1990</option>
        <option value="2">1991</option>
        <option value="3">1992</option>
        <option value="4">1993</option>
        <option value="5">1994</option>
    </select><br>

    <label>Gender: </label>
    <input type="radio" name="sex" value="male" >Male
    <input type="radio" name="sex" value="female" >Female<br>

    <label> Nationality </label>
    <input type="text" name="nationality"><br>


    <h1>Contact Information</h1>
    <label> Address: </label>
    <input type="text" name="address"><br>

    <label> Mobile: </label>
    <input type="number" name="mobile"><br>

    <label>Email: </label>
    <input type="email" name="email1"><br>

    <button type="submit">Submit</button>

</form>

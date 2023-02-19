<form action="challenge1_output.php" method="post">

<label for="firstName">First Name:</label>
<input type="text" name="firstName" required><br>

<label for="lastName">Last Name:</label>
<input type="text" name="lastName" required><br>

<label for="gender">Gender:</label>
<label>
    <input type="radio" value="female" name="gender" required>
    Female
</label>
<label>
    <input type="radio" value="male" name="gender" required>
    Male
</label>
<label>
    <input type="radio" value="other" name="gender" required>
    Other
</label> <br>

<label for="age">Age:
    <input type="text" name="age" required>
</label><br>

<label for="car">
    Car:
  <select name="car" id="car">
  <option value="BMW">BMW</option>
  <option value="Audi">Audi</option>
  <option value="Land Rover">Land Rover</option>
  <option value="Jeep">Jeep</option>
  </select>
</label> <br>

<input type="submit">

</form>
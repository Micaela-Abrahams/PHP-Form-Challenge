<form action="challenge3_output.php" method="post">

<label for="number">Insert a number:</label>
<input type="number" name="number" required><br>

<label for="color">Color:</label>
<select name="color" id="color" required>
    <option value="Red">Red</option>
    <option value="Orange">Orange</option>
    <option value="Yellow">Yellow</option>
    <option value="Green">Green</option>
    <option value="Blue">Purple</option>
</select><br>

<label for="objects">Object:</label>

<label for="circle">
    <input type="radio" name="object" value="Circle" required>
    Circle
</label>  

<label for="square" >
    <input type="radio" name="object" value="Square" required>
    Square
</label>

<label for="triangle" >
    <input type="radio" name="object" value="Triangle" required>
    Triangle
</label>

<label for="rectangle" >
    <input type="radio" name="object" value="Rectangle" required>
    Rectangle
</label>

<label for="diamond" >
    <input type="radio" name="object" value="Diamond" required>
    Diamond
</label><br>

<input type="submit">

</form>
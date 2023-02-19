<?php
// Check if form was submitted
if($_SERVER['REQUEST_METHOD'] == "POST"){

    // Get values of form inputs
    $name = $_POST['firstName']. ' '. $_POST['lastName'];
    $age = $_POST["age"];
    $car = $_POST['car'];
    $gender = $_POST['gender'];

    echo "$name is a $age year old $gender who drives a $car.";

 } else {
   echo"An error seems to have occurred, please fill out the form & click the Submit button again. </br>
   If the error occurs please request assistance from your nearest Help Desk Service Provider";
 }
 
?>
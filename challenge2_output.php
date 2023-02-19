<?php
$yes = $_POST['yes'];
$no = $_POST['no'];

//use isset() to check if the variable $yes & $no is set. 
if(isset($yes)){
    echo "Congratulations, your prize have been claimed!!!🥳";
} elseif (isset($no)){
    echo "Come back soon to claim your prize.";
}else{
    echo "Please select Yes or No & click the Submit Button";
}
?>
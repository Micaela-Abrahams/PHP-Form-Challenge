<?php
$number = $_POST['number'];
$color = $_POST['color'];
$object = $_POST['object'];

for($i = 1; $i <= $number; $i++){
    echo $color . ' '. $object ."<br>";
}
?>
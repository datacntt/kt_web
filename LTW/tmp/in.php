<?php
$so = $_POST['so'];

for($i=1; $i<=10; $i++){
    // 5 x1 = 5
    // 5 x2 = 10
    echo $so . " x " . $i  . " = " . ($so * $i) . "<br>";
}

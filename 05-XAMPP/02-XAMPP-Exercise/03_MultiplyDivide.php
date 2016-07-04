<?php
if (isset($_GET[num1]) && isset($_GET[num2])) {
    $num1 = $_GET[num1];
    $num2 = $_GET[num2];
    if ($num2 >= $num1) {
        echo $num1 * $num2;
    } else {
        echo $num1 / $num2;
    }
}
?>
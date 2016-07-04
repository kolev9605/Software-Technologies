<?php
if (isset($_GET['num'])) {
    $num = intval($_GET['num']);
    $current = 1;
    $prevTwo = 0;
    $prevOne = 1;

    for ($i = 1; $i <= $num; $i++) {
        echo $current . " ";
        $current = $prevTwo + $prevOne;
        $prevTwo = $prevOne;
        $prevOne = $current;
    }
}
?>
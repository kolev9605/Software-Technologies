<?php
$num = $_GET['num'];
for ($i = 1; $i <= $num; $i++) {
    if ($i % 2 == 0)
        echo $i . " ";
}
?>
<?php
if (isset($_GET['num'])) {
    $num = $_GET['num'];
    for ($i = (int)$num; $i >= 1; $i--) {
        echo $i." ";
    }
}
?>

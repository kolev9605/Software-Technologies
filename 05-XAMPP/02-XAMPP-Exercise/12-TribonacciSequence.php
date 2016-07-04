<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form>
    Number:
    <input type="number" name="num">
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_GET['num'])) {
    $num = intval($_GET['num']);
    $current = 1;
    $prevOne = 1;
    $prevTwo = 0;
    $prevThree = 0;

    for ($i = 1; $i <= $num; $i++) {
        echo $current . " ";
        $current = $prevTwo + $prevOne + $prevThree;
        $prevThree = $prevTwo;
        $prevTwo = $prevOne;
        $prevOne = $current;
    }
}
?>

</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form>
    <input type="number" name='num1'>
    <input type="number" name='num2'>
    <input type="number" name='num3'>
    <input type="submit" value="Submit">
</form>
<?php
if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $num3 = $_GET['num3'];

    $array = [$num1, $num2, $num3];
    $negativeCount = 0;

    foreach ($array as $item) {
        if ($item <= 0) {
            $negativeCount++;
        }
    }

    if ($negativeCount % 2 == 0) {
        echo "Positive";
    } else {
        echo "Negative";
    }
}
?>
</body>
</html>
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

    for ($i = $num; $i >= 1; $i--) {
        if (isPrime($i)) {
            echo $i . " ";
        }
    }
}

function isPrime(int $number) : int
{
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}
?>

</body>
</html>
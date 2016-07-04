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
    $fact = 1;
    for ($i = $num; $i > 1; $i--) {
        $fact *= $i;
    }

    echo $fact;
}
?>

</body>
</html>
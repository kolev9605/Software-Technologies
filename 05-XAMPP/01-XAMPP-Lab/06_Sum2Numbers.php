<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form>
    First number:
    <input type="number" name="num1">
    Second number:
    <input type="number" name="num2">
    <input type="submit" value="Calculate">
</form>

<?php
if(isset($_GET['num1']) && isset($_GET['num2'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    echo $num1 . " + " . $num2 . " = " . ($num1 + $num2);
}
?>
</body>
</html>
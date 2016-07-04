<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form>
    <input type="number" name="num1">
    <input type="number" name="num2">
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_GET['num1']) && isset($_GET['num2'])) {
    $num1 = intval($_GET['num1']);
    $num2 = intval($_GET['num2']);

    echo "<ul>";
    for ($i = 1; $i <= $num1; $i++) {
        echo "<li>";
        echo "List $i";
        echo "<ul>";
        for ($j = 1; $j <= $num2; $j++) {
            echo "<li>Element $i.$j</li>";
        }

        echo "</ul>";
        echo "</li>";
    }

    echo "</ul>";
}
?>
</body>
</html>
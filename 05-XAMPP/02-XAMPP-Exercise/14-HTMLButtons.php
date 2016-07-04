<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form>
    <input type="number" name="num">
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_GET['num'])) {
    $num = intval($_GET['num']);
    for ($i = 1; $i <= $num; $i++) {
        echo "<button>$i</button>";
    }
}
?>
</body>
</html>
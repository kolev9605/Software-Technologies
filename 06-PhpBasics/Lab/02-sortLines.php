<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
$sorted = '';
if (isset($_GET['lines'])) {
    $text = $_GET['lines'];
    $lines = explode("\n", $text);
    $lines = array_map('trim', $lines);
    sort($lines, SORT_STRING);
    $lines = array_filter($lines);

    $sorted = implode("\n", $lines);
}
?>

<form>
    <textarea rows="20" name="lines"><?= $sorted ?></textarea><br>
    <input type="submit" value="Sort">
</form>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        div {
            display: inline-block;
        }
    </style>
</head>
<body>
<?php
$result = '';
if (isset($_GET['towns']) && isset($_GET['townsToExclude'])) {
    $towns = $_GET['towns'];
    $townsToExclude = $_GET['townsToExclude'];

    $townsArray = explode("\n", $towns);
    $townsToExcludeArray = explode("\n", $townsToExclude);

    $townsArray = array_map('trim', $townsArray);
    $townsToExcludeArray = array_map('trim', $townsToExcludeArray);

    $townsArray = array_filter($townsArray);
    $townsToExcludeArray = array_filter($townsToExcludeArray);

    foreach ($townsArray as $value) {
        if (!in_array($value, $townsToExcludeArray)) {
            $result .= "<li>$value</li>";
        }
    }
}
?>

<form>
    Towns
    <div>
        <textarea rows="10" name="towns"></textarea>
    </div>
    Towns to exclude
    <div>
        <textarea rows="10" name="townsToExclude"></textarea>
    </div>
    <input type="submit" value="Exclude">
</form>

<ul>
    <?= $result ?>
</ul>

</body>
</html>
<html>
<head>

</head>
<body>

<?php
if (isset($_GET['delimiter'])
    && isset($_GET['array-size'])
    && isset($_GET['key-value-pairs'])
) {
    $array = [];
    $delimiter = $_GET['delimiter'];
    $arraySize = $_GET['array-size'];
    $pair = $_GET['key-value-pairs'];

    for ($i = 0; $i < $arraySize; $i++) {
        $array[$i] = 0;
    }

    $lines = array_filter(array_map('trim', explode("\n", $pair)));
    foreach ($lines as $line) {
        $args = array_map('trim', explode($delimiter, $line));
        $index = $args[0];
        $value = $args[1];
        $array[$index] = $value;
    }

    foreach ($array as $item) {
        echo "$item<br>";
    }
}
?>
<form>
    Delimiter: <input type="text" name="delimiter">
    Array-size: <input type="text" name="array-size">
    Input: <textarea name="key-value-pairs"></textarea>
    <input type="submit">
</form>
</body>
</html>
<?php
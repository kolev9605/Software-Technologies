<html>
<head>

</head>
<body>
<form>
    Delimiter: <input type="text" name="delimiter">
    Input: <textarea name="key-value-pairs"></textarea>
    Target Key: <input type="text" name="target-key">
    <input type="submit">
</form>
</body>
</html>

<?php
if (isset($_GET['delimiter']) &&
    isset($_GET['key-value-pairs']) &&
    isset($_GET['target-key'])
) {
    $asoc = [];

    $delimiter = $_GET['delimiter'];
    $targetKey = $_GET['target-key'];
    $pairs = array_filter(array_map('trim', explode("\n", $_GET['key-value-pairs'])));

    foreach ($pairs as $pair) {
        $pairArgs = explode($delimiter, $pair);
        if (!isset($asoc[$pairArgs[0]])) {
            $asoc[$pairArgs[0]] = [];
        }

        $asoc[$pairArgs[0]][] = $pairArgs[1];
    }

    if (isset($asoc[$targetKey])) {
        echo implode("<br>", $asoc[$targetKey]);
    } else {
        echo "None";
    }
}
?>
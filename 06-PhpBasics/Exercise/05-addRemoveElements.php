<html>
<head>

</head>
<body>
<form>
    Delimiter: <input type="text" name="delimiter">
    Input: <textarea name="commands"></textarea>
    <input type="submit">
</form>
</body>
</html>
<?php
$resultArr = [];
if (isset($_GET['delimiter']) && isset($_GET['commands'])) {
    $commands = array_filter(array_map('trim', explode("\n", $_GET['commands'])));
    $delimiter = $_GET['delimiter'];

    foreach ($commands as $command) {
        $commandArgs = explode($delimiter, $command);
        if ($commandArgs[0] == "add") {
            //add
            $resultArr[] = $commandArgs[1];
        } else {
            //remove
            array_splice($resultArr, $commandArgs[1], 1);
        }
    }

    foreach ($resultArr as $item) {
        echo "$item<br>";
    }
}
?>

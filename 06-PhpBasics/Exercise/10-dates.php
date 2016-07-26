<html>
<head>

</head>
<body>
<form>
    Start Date:
    <br>
    <input type="text" name="date">

    <br>
    Output Format:
    <br>
    <input type="text" name="format">
    <br>
    Commands:
    <br>
    <textarea name="commands"></textarea>
    <br>
    <input type="submit">
</form>
</body>
</html>

<?php
if (isset($_GET['format']) && isset($_GET['commands']) && isset($_GET['date'])) {
    $format = $_GET['format'];
    $commands = array_filter(array_map('trim', explode("\n", $_GET['commands'])));
    $dateStr = $_GET['date'];

    $dateTime = DateTime::createFromFormat('d/m/Y', $dateStr);

    foreach ($commands as $command) {
        $cmdTokens = explode(" ", $command);
        if ($cmdTokens[0] == "add") {
            $amount = intval($cmdTokens[1]);
            $dateTime->modify('+' . $amount . 'day');
        } elseif ($cmdTokens[0] == "subtract") {
            $amount = intval($cmdTokens[1]);
            $dateTime->modify('-' . $amount . 'day');
        }
    }

    echo $dateTime->format($format);
}
?>
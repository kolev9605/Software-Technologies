<html>
<head>

</head>
<body>
<form>
    Input: <textarea name="lines"></textarea>
    <input type="submit">
</form>
</body>
</html>

<?php
if (isset($_GET['lines'])) {
    $commands = array_filter(
        array_map('trim', explode("\n", $_GET['lines'])));

    foreach ($commands as $command) {
        if ($command == "Stop") {
            break;
        }

        echo $command . "<br>";
    }
}
?>
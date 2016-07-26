<html>
<head>

</head>
<body>
<form>
    Delimiter: <input type="text" name="delimiter">
    Input: <textarea name="lines"></textarea>
    <input type="submit">
</form>

<?php
if (isset($_GET['delimiter']) && isset($_GET['lines'])) {
    $lines = array_map('trim', explode($_GET['delimiter'], $_GET['lines']));

    foreach ($lines as $line) {
        if ($line == "Stop") {
            break;
        }

        echo $line . "<br>";
    }
}
?>
</body>
</html>

<?php

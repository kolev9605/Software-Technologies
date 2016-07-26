</html>

<html>
<head>

</head>
<body>
<?php
if (isset($_GET['numbers']) && isset($_GET['delimiter'])) {
    $delimiter = $_GET['delimiter'];
    $lines = explode($delimiter, $_GET['numbers']);
    echo implode("<br>", array_reverse($lines)),"<br>";
}
?>
<form>
    Delimiter: <input type="text" name="delimiter">
    Input: <textarea name="numbers"></textarea>
    <input type="submit">
</form>
</body>
</html>

<?php
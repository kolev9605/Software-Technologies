<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
if(isset($_GET['person'])) {
    $person = htmlspecialchars($_GET['person']);
    echo "Hello, $person!";
} else {
?>
<form>
    <input type="text" name="person">
    <input type="submit" value="Submit">
</form>
<?php
}
?>
</body>
</html>
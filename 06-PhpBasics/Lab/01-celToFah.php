<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
$fahToCelMsg = '';
$celToFahMsg = '';
if (isset($_GET['fah'])) {
    $fahValue = $_GET['fah'];
    $converted = convertFahrenheitToCelsius($fahValue);
    $fahToCelMsg = "$fahValue &deg;F = $converted &deg;C";
}

if (isset($_GET['cel'])) {
    $celValue = $_GET['cel'];
    $converted = convertCelsiusToFahrenheit($celValue);
    $celToFahMsg = "$celValue &deg;C = $converted &deg;F";
}

function convertCelsiusToFahrenheit(float $celValue) : float
{
    return $celValue * 1.8 + 32;
}

function convertFahrenheitToCelsius(float $fahValue) : float
{
    return ($fahValue - 32) / 1.8;
}

?>

<form>
    Fahrenheit:
    <input type="text" name="fah">
    <input type="submit" value="Convert">
    <?= $fahToCelMsg ?>
</form>
<form>
    Celsius:
    <input type="text" name="cel">
    <input type="submit" value="Convert">
    <?= $celToFahMsg ?>
</form>
</body>
</html>
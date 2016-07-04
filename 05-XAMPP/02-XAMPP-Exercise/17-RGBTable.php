<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        td {
            width: 50px;
            height: 50px;;
        }
    </style>
</head>
<body>
<?php
echo "<table border='1'>";
echo "<tr>";
echo "<td>Red</td>";
echo "<td>Green</td>";
echo "<td>Blue</td>";
echo "</tr>";

for ($color = 51; $color <= 255; $color += 51) {
    echo "<tr>";


    $redColor = rgb($color, 0, 0);
    echo "<td style='background-color:$redColor'></td>";

    $greenColor = rgb(0, $color, 0);
    echo "<td style='background-color:$greenColor'></td>";

    $greenColor = rgb(0, 0, $color);
    echo "<td style='background-color:$greenColor'></td>";

    echo "<\tr>";
}

echo "</table>";

function rgb(int $r, int $g, int $b) : string
{
    $hexRed = str_pad(dechex($r), 2, "0", STR_PAD_LEFT);
    $hexGreen = str_pad(dechex($g), 2, "0", STR_PAD_LEFT);
    $hexBlue = str_pad(dechex($b), 2, "0", STR_PAD_LEFT);

    $colorToReturn = "#" . $hexRed . $hexGreen . $hexBlue;

    return $colorToReturn;
}

?>
</body>
</html>
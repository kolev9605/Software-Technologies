<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        div {
            width: 20px;
            height: 20px;
            display: inline-block;
            margin: 5px;
        }
    </style>
</head>
<body>
<?php

$color = 0;
for ($row = 0; $row < 5; $row++) {
    for ($col = 0; $col < 10; $col++) {
        $rgbColor = rgb($color, $color, $color);
        echo "<div style='background-color: $rgbColor'></div>";

        $color += 5;
    }

    $color += 1;
    echo "<br>";
}


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
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        div {
            display: inline-block;
            padding: 10px;
            margin: 5px;
            width: 200px;
        }
    </style>
</head>
<body>
<?php
for ($red = 0; $red <= 255; $red += 51)
    for ($green = 0; $green <= 255; $green += 51)
        for ($blue = 0; $blue <= 255; $blue += 51) {
            $color = "rgb($red, $green, $blue)";
            echo "<div style='background:$color'> $color</div>\n";
        }


?>
</body>
</html>
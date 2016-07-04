<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<ul>
    <?php
    for ($i = 1; $i <= 20; $i++) {
        if ($i % 2 == 0) {
            echo "<li><span style='color:green'>$i</span></li>";
        } else {
            echo "<li><span style='color:blue'>$i</span></li>";
        }
    }
    ?>
</ul>
</body>
</html>
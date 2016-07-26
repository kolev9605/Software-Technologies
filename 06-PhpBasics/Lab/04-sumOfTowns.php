<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_GET['towns-income'])) {
    $sums = [];
    $incomes = explode("\n", $_GET['towns-income']);
    $incomes = array_map('trim', $incomes);
    $incomes = array_filter($incomes);


    foreach ($incomes as $income) {
        $tokens = explode(":", $income);
        if (!isset($sums[$tokens[0]])) {
            $sums[$tokens[0]] = 0;
        }

        $sums[$tokens[0]] += $tokens[1];
    }

    ksort($sums);

    foreach ($sums as $town => $income) {
        echo "$town $income<br>";
    }
}
?>

<form>
    Incomes
    <textarea rows="10" name="towns-income"></textarea>
    <input type="submit" value="Exclude">
</form>

</body>
</html>
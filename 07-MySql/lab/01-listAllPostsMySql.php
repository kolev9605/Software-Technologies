<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
$mysqli = new mysqli('localhost', 'root', '', 'blog');
$mysqli->set_charset("utf8");

if ($mysqli->connect_errno) {
    die('Cannot connect to MySQL');
}

$result = $mysqli->query('SELECT * FROM posts');
if (!$result) {
    die('Cannot read `posts` table');
}

$tableData = '';

while ($row = $result->fetch_assoc()) {
    $title = $row['title'];
    $content = $row['content'];
    $date = $row['date'];
    $tableData .= "<tr>";
    $tableData .= "<td>$title</td>";
    $tableData .= "<td>$content</td>";
    $tableData .= "<td>$date</td>";
    $tableData .= "</tr>";
}
?>

<table border="1">
    <tr>
        <th>Title</th>
        <th>Content</th>
        <th>Date</th>
    </tr>
    <?= $tableData ?>
</table>

</body>
</html>
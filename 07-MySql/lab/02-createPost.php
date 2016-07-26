<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form>
    <div>
        Title:
    </div>
    <input type="text" name="title">
    <div>
        Content:
    </div>
    <textarea name="content" rows="10"></textarea>
    <input type="submit" value="Post">
</form>
</body>
<?php
if (isset($_GET['title']) && isset($_GET['content'])) {
    $mysqli = new mysqli('localhost', 'root', '', 'blog');
    $mysqli->set_charset("utf8");

    if ($mysqli->connect_errno) {
        die('Cannot connect to MySQL');
    }

    $result = $mysqli->query('SELECT * FROM posts');
    if (!$result) {
        die('Cannot read `posts` table');
    }

    $title = $_GET['title'];
    $content = $_GET['content'];

    $statement = $mysqli->prepare(
        "INSERT INTO POSTS(title, content) 
        VALUES (?,?)");
    $statement->bind_param('ss', $title, $content);
    $statement->execute();

    if ($statement->affected_rows == 1) {
        echo "Post created.";
    } else {
        die("Insert post failed.");
    }
}
?>
</html>
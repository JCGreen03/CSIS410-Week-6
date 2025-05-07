<?php
include("./Components/sqlconnect.php");
$name = $_POST['name'];
$title = $_POST['title'];
$comment = $_POST['comment'];

$query = "INSERT INTO comments (Name, Title, Comment) VALUES ('" . htmlspecialchars($name) . "',
 '" . htmlspecialchars($title) . "', '" . htmlspecialchars($comment) . "')";
$conn->query($query);
header("Location: http://www.krustywalrus.com/Week-6/Database/CommentsHome.php");
?>
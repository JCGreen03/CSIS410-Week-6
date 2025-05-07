<?php
include("./Components/sqlconnect.php");
$id= $_POST['id'];
$name = $_POST['name'];
$title = $_POST['title'];
$comment = $_POST['comment'];

$query = 'UPDATE comments SET Name="' . $name . '", Title="' . $title . '", Comment="' . $comment . '" WHERE ID=' . $id;
$conn->query($query);
header("Location: http://www.krustywalrus.com/Week-6/Database/CommentsHome.php");



?>
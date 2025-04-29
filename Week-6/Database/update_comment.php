<?php
include("./Components/sqlconnect.php");
$id= $_POST['id'];
$name = $_POST['name'];
$title = $_POST['title'];
$comment = $_POST['comment'];



$query = 'UPDATE comments SET Name="' . $name . '", Title="' . $title . '", Comments="' . $comment . '" WHERE ID=' . $id;

echo $query;

$conn->query($query);
header("Location: http://krustywalrus.com/Week-6/Database/CommentsHome.php");



?>
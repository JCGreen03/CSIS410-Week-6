<?php
include("./Components/sqlconnect.php");
$id= $_POST['id'];

$query = 'DELETE FROM comments WHERE ID=' . $id;
$conn->query($query);
header("Location: http://www.krustywalrus.com/Week-6/Database/CommentsHome.php");
?>
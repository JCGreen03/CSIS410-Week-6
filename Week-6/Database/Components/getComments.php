<?php
$query = "SELECT * FROM comments";
$comments = $conn->query($query);

if ($comments->num_rows > 0){
    while($row = $comments->fetch_assoc()) {
        echo "
        <br>Name: " . $row["Name"]. 
        "<br> Title: " . $row["Title"]. 
        "<br> Comment: <br>" . $row["Comment"]. 
        "<br> Date Published: ". $row["CommentDate"] . "<br>"
        ;

        echo "
        
        <form method='post' action='update.php'>
        <input type='hidden' name='id' value='" . $row["ID"] . "'>
        <button type='submit'>Update</button>
        </form>
        <form method='post' action='delete_Comment.php'>
        <input type='hidden' name='id' value='" . $row["ID"] . "'>
        <button type='submit'>Delete</button>
        </form>" . "<hr>"
        ;
}
}else {
    echo "no comments";
}
?>
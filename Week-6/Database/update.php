<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" type="text/css" href="./CSS/Database.css">
</head>

<body>
    <?php 
    $commentID = $_POST['id'];
    include("./Components/sqlconnect.php");
    include("./Components/NavBar.php");
    
    ?>

    <?php
    echo "<h1>Update comment $commentID</h1>";
    $query = "SELECT * FROM comments WHERE ID=$commentID";
    $comments = $conn->query($query);


    if ($comments->num_rows > 0){
        while($row = $comments->fetch_assoc()) {
            echo "<form action='update_comment.php' method='post'>
            <label for='name'>Name:</label><br>
            <input type='text' id='name' name='name' value='" . htmlspecialchars($row['Name']) . "' required><br><br>
    
            <label for='title'>Title:</label><br>
            <input type='text' id='title' size=30 name='title' value='" . htmlspecialchars($row['Title']) . "' required><br><br>
    
            <label for='comment'>Comment:</label><br>
            <textarea id='comment' name='comment' rows='4' cols='50' required>" . htmlspecialchars($row['Comment']) . "</textarea><br><br>
    
            <input type='hidden' name='id' value='" . htmlspecialchars($row['ID']) . "'>
            <button type='submit'>Submit</button>
        </form>
        ";
        }
    } else{
        echo "ERROR: Comment not found.";
    }
    
    ?>
    
</body>
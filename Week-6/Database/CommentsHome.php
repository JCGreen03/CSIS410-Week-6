<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments</title>
    <link rel="stylesheet" type="text/css" href="./CSS/Database.css">
</head>

<body>
    <!--SQL Connection test--> 
    <?php
    session_start();
     include("./Components/sqlconnect.php"); ?>

    <?php include("./Components/NavBar.php");?>

    <?php

if(isset($_SESSION['valid']) && $_SESSION['valid'] == TRUE) {


   echo' <h1>Submit a Comment</h1>';

    include("./Components/commentForm.php");

    echo '<h1>Comments</h1>';
    include("./Components/getComments.php");
} else{
    echo "Please log in to view and comment.";
}?>

    <?php include("./Components/Footer.php");?>


</body>
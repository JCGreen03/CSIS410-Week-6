<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments</title>
    <link rel="stylesheet" type="text/css" href="./CSS/Database.css">
</head>

<body>
    <!--SQL Connection test--> 
    <?php include("./Components/sqlconnect.php"); ?>

    <?php include("./Components/NavBar.php");?>

    <h1>Submit a Comment</h1>

    <?php include("./Components/commentForm.php");?>

    <h1>Comments</h1>
    <?php include("./Components/getComments.php");?>

    <?php include("./Components/Footer.php");?>


</body>
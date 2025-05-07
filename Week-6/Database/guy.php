<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guy Mann</title>
    <link rel="stylesheet" type="text/css" href="./CSS/Database.css">
</head>
<body>

<?php
session_start();
?>

<?php
include "./Components/Navbar.php";
?>

<?php
include("./Components/variables.php");
?>




<?php
if(isset($_SESSION['valid']) && $_SESSION['valid'] == TRUE) {
include "./Components/EmployeeGuy.php";
}
else{
    echo "Access denied. If you have credentials, please<a class='login' href='Login.php'>log in</a>.";
}
?>

<?php
include "./Components/Footer.php";
?>
</body>
</html>
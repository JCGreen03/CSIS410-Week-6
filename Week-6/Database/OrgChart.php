<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Employees</title>
    <link rel="stylesheet" type="text/css" href="./CSS/Database.css">
</head>

<body>

<?php 
session_start();
?>

<?php include("./Components/variables.php"); ?>
<?php include("./Components/Navbar.php"); ?>



<?php 
if(isset($_SESSION['valid']) && $_SESSION['valid'] == TRUE) {
    echo "<h1>welcome ";
    echo $_SESSION['username'];
    echo '</h1>';
    
    echo "<div class='heirarchybox'>";
    echo "<a class='bio' href='guy.php'>";
    include("./Components/EmployeeGuy.php");
    echo "</a>";
    echo "</div>";



    
    echo "<div class='heirarchybox'>";
    echo "<a class='bio' href='reggie.php'>";
    include("./Components/EmployeeReggie.php");
    echo "</a>";
    echo "</div>";


    
    echo "<div class='heirarchybox'>";
    echo "<a class='bio' href='vincent.php'>";
    include("./Components/EmployeeVincent.php");
    echo "</a>";
    echo "</div>";

} else{
    echo "Access denied. If you have credentials, please log in.";
}

?>

<?php include("./Components/Footer.php"); ?>

</body>
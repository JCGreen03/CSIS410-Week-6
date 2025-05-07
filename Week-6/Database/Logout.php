<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log out</title>
    <link rel="stylesheet" type="text/css" href="./CSS/Sessions.css">
</head>
<body></body>
<?php
session_start();
echo "Logging out...";
session_unset();
session_destroy();
header('Refresh: 3; URL=http://www.krustywalrus.com/Week-6/Database/Login.php');
?>
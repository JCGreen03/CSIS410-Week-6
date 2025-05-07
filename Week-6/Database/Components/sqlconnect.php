<?php 
    $servername = "localhost";
    $username = "xtermina";
    $password = "xiQt}]QC6])@";
    $password = "JCalebgreen03!";
    $database = "JohnCalebGreen";

    $conn = new mysqli($servername, $username, $password, $database);

    if (mysqli_error($conn)) {
        echo "Connection failed" . $conn -> connect_error;
      }
  
    ?>
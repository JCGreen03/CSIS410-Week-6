<?php 
include("./Components/variables.php");

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

function redirectLogin() {
    header('Refresh: 3; URL=http://www.krustywalrus.com/Week-6/Database/Login.php');
}

function redirectOrg() {  
    header('Refresh: 3; URL=http://www.krustywalrus.com/Week-6/Database/OrgChart.php');
}

if($username == $customerLogin[0] && $password == $customerLogin[1]){
$_SESSION['username'] = $customerLogin[0];
$_SESSION['password'] = $customerLogin[1];
$_SESSION['valid'] = TRUE;
echo "Log in successful. Redirecting to Organizational Chart...";
redirectOrg() ;
}

else{
    echo"Username or password incorrect, redirecting back to login";
    $_SESSION['valid'] = FALSE;
    session_destroy();
    redirectLogin();
}
?>
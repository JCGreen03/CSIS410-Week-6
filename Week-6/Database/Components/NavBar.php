<?php
    echo '<ul class="navbar">
    <li><a class="link" href="/HomeMenu.php">Back to Menu</a></li>
    <li><a class="link" href="OrgChart.php">Organization chart</a></li>
    <li><a class="link" href="CommentsHome.php">Comments</a></li>';

    if(!isset($_SESSION['valid'])){
    echo '<li><a class="link" href="Login.php">Log in</a></li>';
    }
    elseif(isset($_SESSION['valid']) && $_SESSION['valid']){
    echo '<li><a class="link" href="LogOut.php">Log out</a></li>';
    }
    echo '</ul>';
    ?>

            
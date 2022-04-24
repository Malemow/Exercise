<?php

session_start();
$username = $_SESSION['users_id'];

echo "<h1>妳好 " . $username . "</h1>";

echo "<a href = 'logout.php'>登出</a>";


?>
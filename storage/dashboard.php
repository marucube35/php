<?php
// Start the session to use session variables
session_start();

echo "<h1>Dashboard</h1>";
if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
    echo "Welcome " . $_SESSION['username'] . " to dashboard<br/>";
    echo "<a href='logout.php'>Logout</a>";
}

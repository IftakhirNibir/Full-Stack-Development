<?php
session_start();
if (!isset($_SESSION['user_id'])) { //if not set user_id in the session 
    header("Location: login.php");
    exit;
}

echo "Welcome, " . $_SESSION['username'] . "!";
?>
<form action="logout.php">
    <button type="submit">Logout</button>
</form>

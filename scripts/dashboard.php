<?php
session_start();

// Check if the user is logged in
if(!isset($_SESSION['userId'])){
    header("Location: login.php");
    exit();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome <?php echo $_SESSION['username']; ?>!</h1>
    <p>This is your dashboard.</p>
</body>
</html>

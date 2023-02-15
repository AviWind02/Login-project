<?php
session_start();

// Include the connection file
include 'conn.php';

// Get the values from the login form
$username = $_POST['username'];
$password = $_POST['password'];

// Check if the values are empty
if(empty($username) || empty($password)){
    header("Location: error.php?error=emptyfields");
    exit();
}else{
    // Prepare the query
    $stmt = $conn->prepare("SELECT * FROM users WHERE username=?;");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the query returned any rows
    if($result->num_rows === 0){
        header("Location: error.php?error=nouser");
        exit();
    }else{
        // Fetch the row
        $row = $result->fetch_assoc();

        // Check if the password is correct
        if(password_verify($password, $row['password'])){
            // Start a new session
            session_start();
            // Store the user's information in the session
            $_SESSION['userId'] = $row['id'];
            $_SESSION['username'] = $row['username'];

            // Redirect the user to the dashboard
            header("Location: https://monumental-starlight-dc3326.netlify.app/");
            exit();
        }else{
        header("Location: error.php?error=wrongpw");
            exit();
        }
    }
}
?>
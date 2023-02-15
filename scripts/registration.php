<?php
  //connect to database
    include 'conn.php';
  
  //check connection
  if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
  }


  // Check if required fields are filled
  if (empty($_POST["username"])) {
        header("Location: error.php?error=usermissing");
        $errors = 1;

  }
  else if (empty($_POST["password"])) {
        header("Location: error.php?error=pwmissing");
        $errors = 1;
  }
  else if (empty($_POST["number"])) {
        header("Location: error.php?error=nummissing");
        $errors = 1;
  }

  // Continue only if there are no errors
  if (count($errors) == 0) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $password = password_hash($password, PASSWORD_DEFAULT);
    $phone = mysqli_real_escape_string($conn, $_POST['number']);
    
    //check if user already exists
    $user_check_query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { // if user exists
        if ($user['username'] === $username) {
                header("Location: error.php?error=accountfound");

        }
    }

    // register user if there are no errors
    if (count($errors) == 0) {
        $query = "INSERT INTO users (username, password, phone_number) 
                  VALUES('$username', '$password', '$phone')";
        mysqli_query($conn, $query);
        header("Location: ../login.php");
    }
  }
?>

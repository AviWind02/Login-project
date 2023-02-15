<!DOCTYPE html>
<html>
  <head>
    <title>Group one | Error</title>
    <style>
     body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
  text-align: center;
  background-image: url(https://images.pexels.com/photos/373912/pexels-photo-373912.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
  background-size: cover;
}

      .container {
        width: 500px;
        margin: 100px auto;
        background-color: white;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      }
      h1 {
        margin-bottom: 30px;
      }
      p {
        margin-bottom: 30px;
        font-size: 18px;
        color: #666;
      }
      a {
        background-color: #333;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Error</h1>
      <p>
        <?php
          if ($_GET["error"] == "emptyfields") {
            echo "Empty fields.";
          } else if ($_GET["error"] == "nouser") {
            echo "User not found.";
          }
           else if ($_GET["error"] == "usermissing") {
            echo "Username is required.";
          }
           else if ($_GET["error"] == "pwmissing") {
            echo "Password is required.";
          }
           else if ($_GET["error"] == "nummissing") {
            echo "Phone number is required.";
          }
             else if ($_GET["error"] == "accountfound") {
            echo "Username already exists.";
          }
             else if ($_GET["error"] == "wrongpw") {
            echo "Password does not match our database.";
          }
          else {
            echo "An error occurred.";
          }
        ?>
      </p>
      <a href="../login.php">Return</a>
    </div>
  </body>
</html>

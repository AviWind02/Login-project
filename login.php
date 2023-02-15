<!DOCTYPE html>
<html>
<head>
  <title>Group one | Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <style>
    body {
      background-image: url('https://images.pexels.com/photos/373912/pexels-photo-373912.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
      background-size: cover;
    }
    .form-container {
      background: rgba(255, 255, 255, 0.8);
      padding: 30px;
      border-radius: 10px;
    }
    .form-down {
        margin-top: 150px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3 form-container form-down">
        <form action="scripts/login.php" method="post">
          <h1 class="text-center">Login</h1>
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form> 
        <div class="text-center" style="margin-top: 10px;">
          <a href="registration.php">Don't have an account? Register here</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
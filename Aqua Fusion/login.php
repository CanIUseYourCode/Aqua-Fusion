<?php
session_start();
include ('config.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  // get username and password from form submission
  $username = $_POST['username'];
  $password = $_POST['password'];

  // check if username and password are correct
  if($username === 'admin' && $password === 'admin123') {
    // set session variables
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;

    header("Location: dashboard.php");
    exit;
  } else {
    $error = "Incorrect username or password";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="login-style.css">
  <title>AFR Management System</title>
</head>
<body>
  <div class="login-container">
    <div class="login-background"></div>
    <div class="container">
      <div class="login-container">
        <form class="login-form" method="POST" action="login.php">
          <h2>Login</h2>
          <div class="form-group">
            <input type="text" class="username" name="username" placeholder="Enter Username">
          </div>
          <div class="form-group">
            <input type="password" class="password" name="password" placeholder="Enter Password">
          </div>
          <button type="submit">Login</button><br>
        </form>
      </div>
    </div>
  </div>
</body>
</html>

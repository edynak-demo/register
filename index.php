<?php 
  include_once 'core/database.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>
</head>
<body>
  <h2>User Authentication System </h2><hr>

  <P>You are currently not signed in <a href="login.php">Login</a> Not yet a member? <a href="signup.php">Sign up</a> </P>

  <p>You are logged in as {username} <a href="logout.php">Logout</a> </p>
</body>
</html>
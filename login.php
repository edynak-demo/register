<?php 
  include_once 'core/database.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
</head>
<body>
  <h2>User Authentication System </h2><hr>

<h3>Login Form</h3>

<form method="post" action="">
    <table>
        <tr><td>Username:</td> <td><input type="text" value=""></td></tr>
        <tr><td>Password:</td> <td><input type="password" value=""></td></tr>
        <tr><td></td><td><input style="float: right;" type="submit" value="Sign in"></td></tr>
    </table>
</form>
<p><a href="index.php">Back</a> </p>
</body>
</html>
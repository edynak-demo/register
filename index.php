<?php 
  include_once 'core/session.php';
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

<?php if(!isset($_SESSION['username'])): ?>
<P>You are currently not signed in <a href="login.php">Log in</a> Not yet a member? <a href="signup.php">Sign up</a> </P>
<?php else: ?>
<p>You are currently logged in as <?php if(isset($_SESSION['username'])) echo $_SESSION['username']; ?> <a href="logout.php">Log out</a> </p>
<?php endif ?>


</body>
</html>
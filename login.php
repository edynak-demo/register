<?php 
  include_once 'core/session.php';
  include_once 'core/database.php';
  include_once 'core/utilities.php';

  if(isset($_POST['loginBtn'])){
    // array to hold errors
    $form_errors = array();

    // validate the form
    $required_fields = array('username', 'password');
    $form_errors = array_merge($form_errors, check_empty_fields($required_fields));

    if(empty($form_errors)){

        // collect form data
        $user = $_POST['username'];
        $password = $_POST['password'];

        // check if user exist in the database
        $sqlQuery = "SELECT * FROM users WHERE username = :username";
        $statement = $db->prepare($sqlQuery);
        $statement->execute(array(':username' => $user));

       while($row = $statement->fetch()){
           $id = $row['id'];
           $username = $row['username'];
           $hashed_password = $row['password'];

           if(password_verify($password, $hashed_password)){
               $_SESSION['id'] = $id;
               $_SESSION['username'] = $username;
               redirectTo('index');
           }else{
               $result = flashMessage("Invalid username or password");
           }
       }

    }else{
        if(count($form_errors) == 1){
            $result = flashMessage("There was one error in the form");
        }else{
            $result = flashMessage("There were " .count($form_errors). " errors in the form");
        }
    }
}
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

<?php if(isset($result)) echo $result; ?>
<?php if(!empty($form_errors)) echo show_errors($form_errors); ?>

<form method="post" action="">
    <table>
        <tr><td>Username:</td> <td><input type="text" value="" name="username"></td></tr>
        <tr><td>Password:</td> <td><input type="password" value="" name="password"></td></tr>
        <tr><td><a href="forgot_password.php">Forgot Password?</a></td><td><input style="float: right;" type="submit" name="loginBtn" value="Sign in"></td></tr>
    </table>
</form>
<p><a href="index.php">Back</a> </p>
</body>
</html>
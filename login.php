<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>

  <h1>Login</h1>
  <p>Login to have more experience with us!</p>
  <form action="" method="post">
    <ul>
      <li>
        <label for="username">Username</label>
        <input type="text" name="username">
      </li>
      <li>
        <label for="password">Your Password</label>
        <input type="password" name="password">
      </li>
      <li>
        <button type="submit" name="login">Login Now!</button>
      </li>
    </ul>

    Don't have an account?<a href="register.php">Sign Up</a>
  </form>

</body>

</html>
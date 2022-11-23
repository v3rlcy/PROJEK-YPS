<?php

session_start();
require 'function.php';

if (isset($_POST['login'])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $res = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");
  
  if (mysqli_num_rows($res) === 1) {
    $row = mysqli_fetch_assoc($res);
   // var_dump($row); die;
    if (password_verify($password, $row["password"])) {
      header("Location: index.php");
    }
  }

  $error = true;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <h1>Login</h1>
  <p>Login to have more experience with us!</p>
  <?php if (isset($error)) : ?>
    <p class="alert danger">Username / Password Salah</p>
  <?php endif; ?>
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
<?php

session_start();
require 'function.php';

if (isset($_POST['login'])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $res = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");

  if (mysqli_num_rows($res) === 1) {
    $row = mysqli_fetch_assoc($res);
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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<body>

  <!-- <h1>Login</h1>
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
  </form> -->
  <?php if (isset($error)) : ?>
    <p class="alert alert-danger">Username / Password Salah</p>
  <?php endif; ?>

  <div class="container pt-3 mt-5">
    <h1 style="text-align:center;" >YPS Hospital</h1>
  
    <form action="" method="post">

  <div class="form-outline mb-4">
    <label class="form-label" for="nama">Username</label>
    <input type="text" name="username" class="form-control" />
  </div>

  <div class="form-outline mb-4">
    <label class="form-label" for="nama">Password</label>
    <input type="password" name="password" class="form-control" />
  </div>

  <!-- login button -->
  <div class="mb-4">
  <button type="submit" class="btn btn-success btn-block mb-4 w-100 " name="login">Log in</button>
  </div>

  <p>Don't have an account? <a href="register.php">Sign Up now! </a></p>
  </form>

</body>
</html>
<?php
require 'function.php';

if (isset($_POST["register"])) {
  if (registrasi($_POST) > 0) {
    $_SESSION['registerSuccess'] = 'Registrasi Berhasil';
    header('Location: login.php');
  } else {
    echo mysqli_error($conn);
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
</head>

<body>

  <h1>Sign Up</h1>
  <p>Sign Up to have more experience with us!</p>

  <?php
  if (isset($_SESSION['registerSuccess'])) {
  ?>
    <div class="alert alert-success"><?= $_SESSION['registerSuccess'] ?></div>
  <?php
  } else if (isset($_SESSION['alreadyExist'])) {
  ?>
    <div class="alert alert-danger"><?= $_SESSION['alreadyExist'] ?></div>
  <?php
  } else if (isset($_SESSION['notMatch'])) {

  ?>
    <div class="alert alert-danger"><?= $_SESSION['notMatch'] ?></div>
  <?php
  }
  ?>

  <form action="" method="post">
    <ul>
      <li>
        <label for="nama">Nama</label>
        <input type="text" name="nama_user">
      </li>
      <li>
        <label for="username">Username</label>
        <input type="text" name="username">
      </li>
      <li>
        <label for="password">Your password</label>
        <input type="password" name="password">
      </li>
      <li>
        <label for="password">Confirm your password</label>
        <input type="password" name="password2">
      </li>
      <li>
        <button type="submit" name="register">Sign Up Now!</button>
      </li>
    </ul>
  </form>

</body>

</html>
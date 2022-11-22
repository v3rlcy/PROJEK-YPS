<?php
<<<<<<< HEAD

require 'header.php';

if(isset($_POST["register"])){
    if(registrasi($_POST) > 0 ){
    echo "<script> alert ('user baru berhasil di tambahkan'); </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>

=======
session_start();
require 'function.php';

if (isset($_POST["register"])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
            alert('Registrasi Berhasil');
            document.location.href = 'login.php';
          </script>";
  } else {
    echo mysqli_error($conn);
  }
}
?>
>>>>>>> db40d23e83bea79e41755603eb7117e2f8a1c564
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <h1>Sign Up</h1>
  <p>Sign Up to have more experience with us!</p>
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

    Already have an account?<a href="login.php">Login</a>

  </form>

</body>

</html>
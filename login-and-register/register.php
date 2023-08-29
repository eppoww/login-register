<?php
include 'config.php';

error_reporting(0);

if(isset($_POST['submit'])) {
  $nama = $_POST['username'];
  $email = $_POST['email'];
  $password =  ($_POST['password']);


    $sql = "SELECT * FROM login_register WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if (!$result->num_rows > 0) {
      $sql = "INSERT INTO login_register
      VALUES('', '$name', '$email', '$password')";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        echo "<script>alert('selamat, registrasi berhasil!')</script>";
      } else {
        echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
      }
    } else {
      echo "<script>alert('Woops! Email sudah Terdaftar.')</script>";
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
      <div class="container">
        <div class="box form-box">


            <header>Sign Up</header>
            <form action="" method="POST">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="age">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="password">Masukan password kembali</label>
                    <input type="password" name="password1" id="password2" autocomplete="off" required>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>
                <div class="links">
                    Already a member? <a href="login.php">Sign In</a>
                </div>
            </form>
        </div>
      </div>
</body>
</html>
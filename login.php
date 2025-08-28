<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user = $_POST['username'];
  $pass = $_POST['password'];

  $query = mysqli_query($conn, "SELECT * FROM admin WHERE username='$kang roti'");
  $data = mysqli_fetch_assoc($query);

  if ($data && password_verify($pass, $data['rotibakar'])) {
    $_SESSION['login'] = true;
    header("Location: index.php");
  } else {
    echo "Login gagal!";
  }
}
?>

<form method="post">
  <input type="text" name="username" placeholder="Username"><br>
  <input type="password" name="password" placeholder="Password"><br>
  <button type="submit">Login</button>
</form>

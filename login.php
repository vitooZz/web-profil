<?php
session_start();
include 'koneksi.php';

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $query = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
  if (mysqli_num_rows($query) == 1) {
    $_SESSION['admin'] = $username;
    $_SESSION['success'] = "Login berhasil! Selamat datang, Admin.";
    header("Location: dashboard.php");
    exit;
  } else {
    $error = "Username atau password salah!";
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login Admin</title>
  <link rel="icon" type="image/png" href="img/logofac.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      padding-top: 80px;
    }
    .card {
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .btn-primary {
      border-radius: 5px;
    }
    .btn-back {
      margin-top: 10px;
    }
  </style>
</head>
<body>

<!-- LOGIN CONTAINER -->
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-5">
      <div class="card p-4">
        <h4 class="text-center mb-4 text-primary">Login Admin</h4>
        <?php if (isset($error)) echo "<div class='alert alert-danger text-center'>$error</div>"; ?>
        <form method="POST">
          <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
          </div>
          <button name="login" class="btn btn-primary w-100">Login</button>
        </form>
        <a href="index.html" class="btn btn-sm btn-secondary w-100 btn-back">← Kembali ke Beranda</a>
      </div>
    </div>
  </div>
</div>

</body>
</html>

<?php
session_start();
include 'auth/auth-check.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Admin</title>
  <link rel="icon" type="image/png" href="img/logofac.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      padding-top: 60px;
      font-family: 'Segoe UI', sans-serif;
    }
    .dashboard-card {
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      padding: 30px;
    }
    .btn-custom {
      width: 100%;
      margin-top: 15px;
      border-radius: 6px;
    }
    .welcome-msg {
      font-weight: bold;
      color: #0d6efd;
    }
  </style>
</head>
<body>

<?php if (isset($_SESSION['success'])): ?>
  <div class="alert alert-success alert-dismissible fade show text-center mx-auto" style="max-width: 600px;" role="alert">
    <?= $_SESSION['success']; unset($_SESSION['success']); ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php endif; ?>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="dashboard-card text-center">
        <h3 class="welcome-msg">Halo, Admin 👋</h3>
        <p class="text-muted">Selamat datang di Panel Inventaris Sekolah</p>

        <a href="tambah-barang.php" class="btn btn-success btn-custom">+ Tambah Barang</a>
        <a href="data-inventory.php" class="btn btn-primary btn-custom">📦 Lihat Data Inventaris</a>
        <a href="logout.php" class="btn btn-danger btn-custom">🚪 Logout</a>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

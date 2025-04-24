<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
<link rel="stylesheet" href="styles.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Inventory - SMK Teuku Umar</title>
  <link rel="icon" type="image/png" href="img/logofac.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      padding-top: 70px;
      background-color: #f8f9fa;
    }
    .hero {
      background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('img/sekolah1.jpg') center/cover no-repeat;
      height: 300px;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }
    .section-title {
      margin-bottom: 30px;
    }
    table th, table td {
      vertical-align: middle;
    }
  </style>
</head>
<body>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
  <img src="img/logofac.png" alt="SMK TEUKU UMAR" height="40">
  <span class="brand-text">SMK TEUKU UMAR</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="visi.html">Visi & Misi</a></li>
        <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
        <li class="nav-item"><a class="nav-link active" href="data-inventory.php">Data Inventory</a></li>
        <li class="nav-item"><a class="btn btn-danger ms-2" href="login.php">Admin</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="hero" style="margin-top: -20px;">
  <div class="container">
    <h1 class="display-4 fw-bold">Data Inventory</h1>
    <p class="lead">Daftar Inventaris Barang SMK Teuku Umar</p>
  </div>
</div>

<div class="container py-5">
  <h2 class="text-primary section-title">Daftar Inventaris</h2>

  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Kategori</th>
        <th>Kuantitas</th>
        <th>Status</th>
        <th>Tanggal Pembelian</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      $query = mysqli_query($conn, "SELECT * FROM inventaris ORDER BY tanggal_pembelian DESC");
      while ($row = mysqli_fetch_assoc($query)) {
        echo "<tr>
                <td>{$no}</td>
                <td>{$row['nama_barang']}</td>
                <td>{$row['kategori']}</td>
                <td>{$row['kuantitas']}</td>
                <td>{$row['status']}</td>
                <td>{$row['tanggal_pembelian']}</td>
              </tr>";
        $no++;
      }
      ?>
    </tbody>
  </table>
</div>

<footer class="bg-primary text-white text-center py-3">
  &copy; 2025 SMK Teuku Umar. All rights reserved.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
include 'auth/auth-check.php';
include 'koneksi.php';

if (isset($_POST['simpan'])) {
  $nama = $_POST['nama_barang'];
  $kategori = $_POST['kategori'];
  $kuantitas = $_POST['kuantitas'];
  $status = $_POST['status'];
  $tanggal = $_POST['tanggal_pembelian'];

  $insert = mysqli_query($conn, "INSERT INTO inventaris (nama_barang, kategori, kuantitas, status, tanggal_pembelian)
                                  VALUES ('$nama', '$kategori', '$kuantitas', '$status', '$tanggal')");
  if ($insert) {
    $_SESSION['success'] = "Barang berhasil ditambahkan!";
    header("Location: dashboard.php");
    exit;
  } else {
    echo "Gagal menambahkan barang!";
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Barang</title>
  <link rel="icon" type="image/png" href="img/logofac.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      padding-top: 10px;
    }
    .form-container {
      background-color: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }
    .form-title {
      color: #0d6efd;
      font-weight: 600;
    }
    .btn-rounded {
      border-radius: 8px;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-7">
      <div class="form-container">
        <h4 class="form-title text-center mb-4">📝 Tambah Barang Baru</h4>
        <form method="POST">
          <div class="mb-3">
            <label class="form-label">Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Kategori</label>
            <input type="text" name="kategori" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Kuantitas</label>
            <input type="number" name="kuantitas" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Status</label>
            <select name="status" class="form-select" required>
              <option value="Baik">Baik</option>
              <option value="Rusak">Rusak</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Tanggal Pembelian</label>
            <input type="date" name="tanggal_pembelian" class="form-control" required>
          </div>
          <div class="d-grid gap-2">
            <button name="simpan" class="btn btn-primary btn-rounded">💾 Simpan</button>
            <a href="dashboard.php" class="btn btn-secondary btn-rounded">← Kembali</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>

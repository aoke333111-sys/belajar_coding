<?php 
include 'koneksi.php';
if (isset($_POST['submit'])) {
    $kode  = $_POST['kode'];
    $nama  = $_POST['nama'];
    $stok  = $_POST['stok'];
    $harga = $_POST['harga'];

    $query = "INSERT INTO produk (kode_barang, nama_barang, stok, harga) VALUES ('$kode', '$nama', '$stok', '$harga')";
    if (mysqli_query($conn, $query)) {
        header("Location: index.php");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">
    <div class="container" style="max-width: 500px;">
        <h3>Tambah Barang Baru</h3>
        <form method="POST">
            <input type="text" name="kode" class="form-control mb-2" placeholder="Kode Barang" required>
            <input type="text" name="nama" class="form-control mb-2" placeholder="Nama Barang" required>
            <input type="number" name="stok" class="form-control mb-2" placeholder="Jumlah Stok" required>
            <input type="number" name="harga" class="form-control mb-2" placeholder="Harga" required>
            <button type="submit" name="submit" class="btn btn-success">Simpan</button>
            <a href="index.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>
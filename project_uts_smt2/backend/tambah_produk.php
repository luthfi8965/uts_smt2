<?php

include "../database/dbkoneksi.php";

if(isset($_POST['submit'])){
    // Ambil data dari form
    $nama = $_POST['nama'];
    $merk_id = $_POST['merk_id'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $berat = $_POST['berat'];
    $jenis_produk_id = $_POST['jenis_produk_id'];

    // Query untuk menambahkan data ke tabel produk
    $query = "INSERT INTO produk (nama, merk_id, stok, harga, berat, jenis_produk_id) VALUES ('$nama', '$merk_id', '$stok', '$harga', '$berat', '$jenis_produk_id')";
    $result = mysqli_query($koneksi, $query);
    
    // Periksa apakah query berhasil dijalankan
    if($result) {
        // Redirect ke halaman yang diinginkan jika sukses
        header('Location: view_produk.php');
        exit();
    } else {
        // Tampilkan pesan error jika query gagal
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
</head>
<body>
    <h1>Tambah Produk</h1>
    <form method="POST" action="table.php">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required><br><br>
        
        <label for="merk_id">Merk ID:</label>
        <input type="number" name="merk_id" id="merk_id" required><br><br>
        
        <label for="stok">Stok:</label>
        <input type="number" name="stok" id="stok" required><br><br>
        
        <label for="harga">Harga:</label>
        <input type="number" name="harga" id="harga" required><br><br>
        
        <label for="berat">Berat:</label>
        <input type="number" name="berat" id="berat" required><br><br>
        
        <label for="jenis_produk_id">Jenis Produk ID:</label>
        <input type="number" name="jenis_produk_id" id="jenis_produk_id" required><br><br>
        
        <input type="submit" name="submit" value="Tambah">
    </form>
</body>
</html>
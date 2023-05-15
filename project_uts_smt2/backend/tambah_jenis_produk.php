<?php

include "../database/dbkoneksi.php";

if(isset($_POST['submit'])){
    // Ambil data dari form
    $nama = $_POST['nama'];
    
    // Query untuk menambahkan data ke tabel jenis_produk
    $query = "INSERT INTO jenis_produk (nama) VALUES ('$nama')";
    
    // Eksekusi query
    $result = mysqli_query($koneksi, $query);
    
    // Periksa apakah query berhasil dijalankan
    if($result) {
        // Redirect ke halaman yang diinginkan jika sukses
        header('Location: view_jenis_produk.php');
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
    <title>Tambah Jenis Produk</title>
</head>
<body>
    <h1>Tambah Jenis Produk</h1>
    <form method="POST" action="table.php">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required><br><br>
        
        <input type="submit" name="submit" value="Tambah">
    </form>
</body>
</html>

<?php

include "../database/dbkoneksi.php";



// Mendapatkan ID jenis_produk dari parameter URL
$id = $_GET['id'];

// Query untuk menghapus data jenis_produk berdasarkan ID
$query = "DELETE FROM jenis_produk WHERE id = '$id'";
mysqli_query($koneksi, $query);

// Redirect ke halaman view jenis_produk setelah berhasil menghapus data
header("Location: view_jenis_produk.php");
exit();
?>
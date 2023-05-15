
<?php

include "../database/dbkoneksi.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Hapus data merk berdasarkan ID
    $query = "DELETE FROM merk WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        // Redirect ke halaman daftar merk
        header("Location: table.php");
        exit();
    } else {
        echo "Gagal menghapus data merk: " . mysqli_error($koneksi);
    }
}

// Tutup koneksi database
mysqli_close($koneksi);
?>
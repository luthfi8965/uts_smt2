<?php

include "../database/dbkoneksi.php";

// Query untuk mendapatkan data dari tabel jenis_produk
$query = "SELECT * FROM jenis_produk";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Jenis Produk</title>
</head>
<body>
    <h1>Daftar Jenis Produk</h1>
    <a href="tambah_jenis_produk.php">Tambah Jenis Produk</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
        <?php
        // Perulangan untuk menampilkan data jenis_produk
        while($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td>
                    <a href="edit_jenis_produk.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <a href="hapus_jenis_produk.php?id=<?php echo $row['id']; ?>">Hapus</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>

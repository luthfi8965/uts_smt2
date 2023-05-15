
<?php
include "../database/dbkoneksi.php";
// Query untuk mengambil data merk
$query = "SELECT * FROM merk";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    echo "Error: " . mysqli_error($koneksi);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Merk</title>
</head>
<body>
    <h1>Daftar Merk</h1>
    <a href="tambah_merk.php">Tambah Merk</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama Merk</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nama_merk']; ?></td>
                <td>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
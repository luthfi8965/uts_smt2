<?php

include "../database/dbkoneksi.php"; 


// Mendapatkan ID jenis_produk dari parameter URL
$id = $_GET['id'];

// Query untuk mendapatkan data jenis_produk berdasarkan ID
$query = "SELECT * FROM jenis_produk WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);

// Mengupdate data jenis_produk
if(isset($_POST['update'])) {
    $nama = $_POST['nama'];

    // Query untuk mengupdate data jenis_produk
    $updateQuery = "UPDATE jenis_produk SET nama = '$nama' WHERE id = '$id'";
    mysqli_query($koneksi, $updateQuery);

    // Redirect ke halaman view jenis_produk setelah berhasil mengupdate data
    header("Location: view_jenis_produk.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jenis Produk</title>
</head>
<body>
    <h1>Edit Jenis Produk</h1>
    <form method="POST">
        <label for="nama">Nama Jenis:</label>
        <input type="text" id="nama" name="nama" value="<?php echo $row['nama']; ?>"><br><br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>

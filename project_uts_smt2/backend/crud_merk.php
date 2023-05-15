
<?php

include "../database/dbkoneksi.php";

// Tangkap data yang dikirimkan melalui form

if (isset($_POST['submit'])) {
    $nama_merk = $_POST['nama_merk'];

    // Query untuk menambah data ke tabel merk
    $query = "INSERT INTO merk (nama_merk) VALUES ('$nama_merk')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        // Redirect ke halaman daftar merk
        header("Location: table.php");
        exit();
    } else {
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
    <title>Tambah Merk</title>
</head>
<body>
    <h1>Tambah Merk</h1>
    <form method="POST" action="table.php">
        <label for="nama_merk">Nama Merk:</label>
        <input type="text" name="nama_merk" required><br><br>
        <input type="submit" name="submit" value="Tambah">
    </form>
</body>
</html>
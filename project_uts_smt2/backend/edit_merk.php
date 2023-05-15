
<?php
include "../database/dbkoneksi.php";

if (!isset($_GET['id'])) {
    echo "ID Merk tidak ditemukan.";
    exit;
}

// Ambil ID Merk dari parameter URL
$id = $_GET['id'];

// Query untuk mengambil data merk berdasarkan ID
$query = "SELECT * FROM merk WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    echo "Error: " . mysqli_error($koneksi);
}

// Periksa apakah data merk ditemukan
if (mysqli_num_rows($result) === 0) {
    echo "Merk tidak ditemukan.";
    exit;
}

// Ambil data merk dari hasil query
$row = mysqli_fetch_assoc($result);

// Proses update data merk
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_merk = $_POST['nama_merk'];

    // Query untuk update data merk
    $query_update = "UPDATE merk SET nama_merk = '$nama_merk' WHERE id = '$id'";
    $result_update = mysqli_query($koneksi, $query_update);

    if ($result_update) {
        // Redirect ke halaman view merk setelah berhasil update
        header("Location: view_merk.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}

// Tutup koneksi database
mysqli_close($koneksi);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Merk</title>
</head>
<body>
    <h1>Edit Merk</h1>
    <form method="POST">
        <label for="nama_merk">Nama Merk:</label>
        <input type="text" name="nama_merk" value="<?php echo $row['nama_merk']; ?>">
        <button type="submit">Update</button>
    </form>
</body>
</html>
<?php 
include "../database/dbkoneksi.php";

?>
<?php 
  $merk = $_POST['merk'];
  $pesanan = $_POST['pesanan'];
  $produk = $_POST['produk'];
  $jenis_produk = $_POST['jenis_produk'];
  $_proses = $_POST['proses'];

  // array data
  $ar_data[]=$merk; // ? 1
  $ar_data[]=$pesanan; // ? 2
  $ar_data[]=$produk;// 3
  $ar_data[]=$jenis_produk;
  
   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO merk (id,nama_merk) VALUES (?,?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE merk SET id=?,nama_merk=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }
   if(isset($_GET['id'])){
      $id = $_GET['id'];
      $sql = "SELECT * FROM merk WHERE id=?";
      $st = $dbh->prepare($sql);
      $st->execute([$id]);
      $row = $st->fetch();
      
   }else{
      $row['id'] = "";
      $row['nama_merk'] = "";
   }

      $id = $_GET['id'];
      $sql = "DELETE FROM merk WHERE id=?";
      $st = $dbh->prepare($sql);
      $st->execute(array($id));
      header('location:tables.php');
   
?>
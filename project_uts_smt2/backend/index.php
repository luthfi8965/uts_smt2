<?php
include "../database/dbkoneksi.php";

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
                           
                          
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table class="table" >
                                    <thead>
                                        <tbody>
                                    <th>jenis_produk
                                        
                                    </th>
                             
                                    <tr>
                                            <th>id</th>
                                            <th>jenis_produk</th>
                                            
</tr>    

<?php
                            $js_produk = mysqli_query($koneksi, "SELECT * from jenis_produk");
                            $id=1;
                            foreach ($js_produk as $row){
                                echo "<tr>
                                    <td>".$row['id']."</td>
                                    <td>".$row['jenis_produk']."</br></td>
                                    </tr>";
                                $id++;
                            }
                            
                            ?>
                            jenis_produk
                            <a class="btn btn-success" href="tambah_jenis_produk.php" role="button">tambah</a>
                            <a class="btn btn-primary" href="view_jenis_produk.php<?=$row['id']?>">View</a>

<a class="btn btn-primary" href="edit_jenis_produk.php?id=<?php echo $row['id'];?>">Edit</a>
<a class="btn btn-primary" href="delete_jenis_produk.php?id=<?php echo $row['id']; ?>" 
   onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                            
</thead>
                        </tbody>
<table class="table" >
    <thead>
        <tbody>
                                    <th>merk<th>
                                    
                                      <tr>
                                            <th>id</th>
                                            <th>nama_merk</th>

                        </tr>
                                      
                                    

                        <?php
                            $merk = mysqli_query($koneksi, "SELECT * from merk");
                            $id=1;
                            foreach ($merk as $row){
                                echo "<tr>
                                    
                                    <td>".$row['id']."</td>
                                    <td>".$row['nama_merk']."</br></td>
                                    </tr>";
                                $id++;
                            }
                            ?>
                            merk
                            <a class="btn btn-success" href="crud_merk.php" role="button">tambah</a>
                            <a class="btn btn-primary" href="view_merk.php?id=<?=$row['id']?>">View</a>
<a class="btn btn-primary" href="edit_merk.php?id=<?php echo $row['id'];?>">Edit</a>
<a class="btn btn-primary" href="delete_merk.php?id=<?php echo $row['id']; ?>" 
   onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                            </thead>
                        </tbody>
                        <table class="table" >
                            <thead>
                                <tbody>
                            <th>Produk</th>
                            
                                        <tr>
                                            <th>id</th>
                                            <th>nama</th>
                                            <th>merk_id</th>
                                            <th>stok</th>
                                            <th>harga</th>
                                            <th>berat</th>
                                            <th>jenis_produk_id</th>
                                          
</tr>    
                            
                                    <?php
                                    $produk = mysqli_query($koneksi, "SELECT * from produk");
                                    $id=1;
                                    foreach ($produk as $prdk){
                                        echo "<tr>
                                            <td>".$prdk['id']."</td>
                                            <td>".$prdk['nama']."</td>
                                            <td>".$prdk['merk_id']."</td>
                                            <td>".$prdk['stok']."</td>
                                            <td>".$prdk['harga']."</td>
                                            <td>".$prdk['berat']."</td>
                                            <td>".$prdk['jenis_produk_id']."</td>
                                            </tr>";
                                        $id++;
                                    }

                                    ?>
                                    produk
                                    <a class="btn btn-success" href="tambah_produk.php" role="button">tambah</a>
                                    <a class="btn btn-primary" href="view_pelanggan.php?id=<?=$row['id']?>">View</a>
<a class="btn btn-primary" href="edit_pelanggan.php?id=<?php echo $row['id'];?>">Edit</a>
<a class="btn btn-primary" href="proses_pelanggan.php?proses=Delete&id=<?php echo $row['id']; ?>" 
   onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                                    </thead>
                                </tbody>
                                <table class="table" >
                                    <thead>
                                        <tbody>
                                     <th>pesanan</th>
                                    
                                    <tr>
                                            <th>id</th>
                                            <th>produk_id</th>
                                            <th>tanggal</th>
                                            <th>quantity</th>
                                            
</tr>    

<?php
                                    $pesanan = mysqli_query($koneksi, "SELECT * from pesanan");
                                    $id=1;
                                    foreach ($pesanan as $prdk){
                                        echo "<tr>
                                            <td>".$prdk['id']."</td>
                                            <td>".$prdk['produk_id']."</td>
                                            <td>".$prdk['tanggal']."</td>
                                            <td>".$prdk['quantity']."</td>   
                                            </tr>";
                                        $id++;
                                    }

                                    ?>
pesanan
<a class="btn btn-success" href="form_pelanggan.php" role="button">tambah</a>
<a class="btn btn-primary" href="view_pelanggan.php?id=<?=$row['id']?>">View</a>
<a class="btn btn-primary" href="edit_pelanggan.php?id=<?php echo $row['id'];?>">Edit</a>
<a class="btn btn-primary" href="proses_pelanggan.php?proses=Delete&id=<?php echo $row['id']; ?>" 
   onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                                </thead>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
<?php
session_start();

if( !isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

require 'function.php';
$rekam_medis = query("SELECT * FROM rekam_medis");


if(isset($_POST["cari"])){
    $rekam_medis = cari($_POST["keyword"]);
} 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    
</head>
<body>

<div class="container mt-5 bg-outline-">

    <h1 class="fw-bold d-flex justify-content-center">Daftar Dokter</h1>
    
    <a class="btn btn-primary fw-bold" href="tambah.php">Tambahkan data</a>

    <form action="" method="post">
    <div class="d-flex justify-content-end input-group mb-3 mt-3">
    <input class="form control" type="text" name="keyword" size="50" autofocus 
    placeholder="search here">
    <button class="btn btn-outline-dark" type="submit" name="cari">Cari!!</button>
    </div>
    </form>

<br>
    <table class="table table-bordered" border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>id_rm</th>
            <th>id_pasien</th>
            <th>keluhan</th>
            <th>id_dokter</th>
            <th>diagnosa</th>
            <th>id_poli</th>
            <th>tgl_periksa</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach( $rekam_medis as $row): ?>
        <tr> 
            <td><?= $i; ?></td>
            <td>
                <a class="btn btn-outline-primary" href="ubah.php?id=<?= $row["id"];?>">ubah</a> 
                <a class="btn btn-outline-danger" href="hapus.php?id=<?= $row["id"];?>" onclick = "return confirm ('yakin?')">hapus</a>
            </td>
            <td><?php echo $row["id_rm"]; ?></td>
            <td><?php echo $row["id_pasien"]; ?></td>
            <td><?php echo $row["keluhan"]; ?></td>
            <td><?php echo $row["id_dokter"]; ?></td>
            <td><?php echo $row["dignosa"]; ?></td>
            <td><?php echo $row["id_poli"]; ?></td>
            <td><?php echo $row["tgl_periksa"]; ?></td>
        </tr>
       
        <?php $i++; ?>
        <?php endforeach; ?>
        </div>
    </table>

    <a class="btn btn-danger fw-bold" href="logout.php">Log out</a>
</div>
</body>
</html>
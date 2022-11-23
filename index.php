<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rumah Sakit</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Rumah Sakit</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
          <a class="nav-link" href="register.php">Sign Up</a>
          <a class="nav-link" href="login.php">Login</a>
        </div>
      </div>
    </div>

  </nav>
  <div class="mt-4 container">
    <h3 class="fw-semibold">Project Tercinta</h3>
    <p>Team YPS</p>
    <div class="d-flex gap-3 align-items-center">
      <a class="text-black text-decoration-none" href="login.php">Login</a>
      <a class="btn btn-primary" href="register.php">Register</a>
    </div>
  </div>
</body>

<div class="container mt-5 bg-outline-">

    <h1 class="fw-bold d-flex justify-content-center">RUMAH SAKIT</h1>
    
    <a class="btn btn-primary fw-bold" href="tambah.php">Tambahkan data</a>

    <form action="" method="post">
    <div class="d-flex justify-content-end input-group mb-3 mt-3">
    <input class="form control" type="text" name="keyword" size="50" autofocus 
    placeholder="search here">
    <button class="btn btn-outline-dark" type="submit" name="cari">Cari!</button>
    </div>
    </form>

<br>
    <table class="table table-bordered" border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Pasien</th>
            <th>Keluhan</th>
            <th>Dokter</th>
            <th>Diagnosa</th>
            <th>Poli</th>
            <th>Tanggal Periksa</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach( $rekam_medis as $row): ?>
        <tr> 
            <td><?= $i; ?></td>
            <td>
                <a class="btn btn-outline-primary" href="ubah.php?id=<?= $row["id"];?>">ubah</a> 
                <a class="btn btn-outline-danger" href="hapus.php?id=<?= $row["id"];?>" onclick = "return confirm ('yakin?')">hapus</a>
        </td>
            <td><?php echo $row["Pasien"]; ?></td>
            <td><?php echo $row["Keluhan"]; ?></td>
            <td><?php echo $row["Dokter"]; ?></td>
            <td><?php echo $row["Diagnosa"]; ?></td>
            <td><?php echo $row["Poli"]; ?></td>
            <td><?php echo $row["Tanggal Periksa"]; ?></td>
        </tr>
       
        <?php $i++; ?>
        <?php endforeach; ?>
        </div>
    </table>

    <a class="btn btn-danger fw-bold" href="logout.php">Log out</a>
</div>

</html>
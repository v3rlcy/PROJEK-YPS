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
<style>
body{
  background-color: #d9d9d9;
}

.wrapper {
  display: flex;
  width: 100%;
  align-items: stretch;
}
  
</style>
<body>

<div class="wrapper">
  <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-light" style="height: 1080px; width: 280px;">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4 text-dark fw-bold">YPS Hospital</span>
      </a>
      <hr>
      
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
        <li>
          <a href="#" class="nav-link active text-light aria-current="page">Dashboard</a>
        </li>
        <li>
          <a href="dataObat/dataobat.php" class="nav-link text-dark">Data Dokter
          </a>
        </li>

        <li>
          <a href="dataObat/dataobat.php" class="nav-link text-dark">Data Pasien
          </a>
        </li>
        
        <li>
          <a href="dataObat/dataobat.php" class="nav-link text-dark">Poli Klinik
          </a>
        </li>

        <li>
          <a href="dataObat/dataobat.php" class="nav-link text-dark">Rekam Medis
          </a>
        </li>

        <li>
          <a href="dataObat/dataobat.php" class="nav-link text-dark">Data Obat
          </a>
        </li>  

        <li>
          <a href="dataObat/dataobat.php" class="nav-link text-dark">Rm obat ni tulis ape cok
          </a>
        </li>  

      </ul>
      <hr>
    </div>

    
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <h2 class="navbar-brand" href="#">YPS Hospital</h2>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
            <a class="nav-link" href="dashboard.php">Dashboard</a>
            <a class="nav-link" href="register.php">Register</a>
            <a class="nav-link" href="login.php">Login</a>
          </div>
        </div>
      </div>
    </nav>

    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">YPS Hospital</h1>
        <p class="fs-5 text-muted">"Kepala sakit namun PHP tetaplah asik 🔥👍"</p>
    </div>

<!-- crudnya -->
    <div class="container">
      <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm border-success">
                <div class="card-header py-3 text-bg-success border-success">
                  <h4 class="my-0 fw-normal">Data Dokter</h4>
                </div>
                <div class="card-body">
                <p>Berisikan data - data dokter di YPS Hospital</p>
                  <a class="w-100 btn btn-primary" href="dokter/datadokter.php">Masuk</a>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm border-info">
                <div class="card-header py-3 text-bg-info border-info">
                  <h4 class="my-0 fw-normal text-light">Data Pasien</h4>
                </div>
                <div class="card-body">
                <p>Berisi data - data tentang pasien yang dirawat di YPS Hospital</p>
                  <a class="w-100 btn btn-primary" href="pasien/datapasien.php">Masuk</a>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm border-warning">
                <div class="card-header py-3 text-bg-warning border-warning">
                  <h4 class="my-0 fw-normal text-light">PoliKlinik</h4>
                </div>
                <div class="card-body">
                <p>Anda dapat melihat informasi mengenai Poliklinik yang ada</p>
                  <a class="w-100 btn btn-primary" href="poliklinik/datapoli.php">Masuk</a>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm border-danger">
                <div class="card-header py-3 text-bg-danger border-danger">
                  <h4 class="my-0 fw-normal">Rekam Medis</h4>
                </div>
                <div class="card-body">
                <p>Anda dapat melihat riwayat atau rekam medis pasien</p>
                  <a class="w-100 btn btn-primary" href="rekammedis/datarekammedis.php">Masuk</a>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm border-primary">
                <div class="card-header py-3 text-bg-primary border-primary">
                  <h4 class="my-0 fw-normal">Data Obat</h4>
                </div>
                <div class="card-body">
                <p>Berisikan data mengenai obat yang ada</p>
                  <a class="w-100 btn btn-primary" href="dataObat/dataobat.php">Masuk</a>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm border-primary">
                <div class="card-header py-3 text-bg-primary border-primary">
                  <h4 class="my-0 fw-normal">Rm obat ni tulis ape cok</h4>
                </div>
                <div class="card-body">
                <p>Bantu pikir rm obat cok</p>
                  <a class="w-100 btn btn-primary" href="dataObat/dataobat.php">Masuk</a>
                </div>
              </div>
            </div>
      </div>
      </div>
    </div>
</div>

</body>

</html>
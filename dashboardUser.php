<?php
    session_start();

    if (!isset($_SESSION["member"]) && !isset($_SESSION["admin"])) {
      header("Location: masuk.php");
    }

    if(isset($_SESSION["admin"])) {
      header("Location: dashboardAdmin.php");
      exit;
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | Jasa Amanah Berkah</title>
    <link rel="stylesheet" href="css/custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
      
          <img src="https://placehold.co/75x75" alt="Bootstrap" width="75" height="75">
      
      
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item md-justify-content-right md-border-bottom">
                <a class="nav-link active" aria-current="page" href="index.html">Beranda</a>
              </li>
              <li class="nav-item md-justify-content-right md-border-bottom">
                <a class="nav-link" href="layanan.html">Layanan</a>
              </li>
              <li class="nav-item md-justify-content-right md-border-bottom">
                <a class="nav-link" href="dashboard.php">Dashboard</a>
              </li>
              <li class="nav-item md-justify-content-right md-border-bottom">
                <a class="nav-link" href="kontak.html">Kontak & Dukungan</a>
              </li>
              <li class="nav-item md-justify-content-right md-border-bottom">
                <a class="nav-link" href="daftar.php">Daftar</a>
              </li>
              <li class="nav-item md-justify-content-right md-border-bottom">
                <a class="nav-link" href="masuk.php">Masuk</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <section class="mt-3">
        <div class="w-auto px-5 mt-5">
            <span class="h2">User45343</span>
        </div>
  
    </section>
  
    <section class="container-fluid full-height mt-3 md-border-custom-2 btn-jab">      
  
      <div class="container mt-4">
          <div class="container d-flex flex-column gap-3 cards">
              <div class="container-fluid d-flex flex-column align-items-center py-2 border-custom-white text-white">
                  <span class="h4">Kode Referal</span>
  
                  <div class="mt-2 p-1">
                      <span class="h3">12345</span>
                  </div>
              </div>
              
              <div class="container-fluid d-flex flex-column align-items-center py-2 border-custom-white text-white">
                  <span class="h4">Kode Referal</span>
  
                  <div class="mt-2 p-1">
                      <span class="h3">12345</span>
                  </div>
              </div>
          </div>
      </div>
  
      <table class="table table-striped mt-4">
        <tr>
          <th>Nama paket</th>
          <th>Harga paket</th>
          <th>Persentase referal</th>
          <th>Referal fee</th>
        </tr>
  
        <tr>
          <td>Platinum</td>
          <td>Rp 1.500.000</td>
          <td>15%</td>
          <td>Rp 135.000</td>
        </tr>
      </table>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
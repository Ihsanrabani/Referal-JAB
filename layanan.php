<?php
    if (!isset($_SESSION["masuk"])) {
      header("Location: masuk.php");
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Layanan Kami | Jasa Amanah Berkah</title>

    <link rel="stylesheet" href="css/custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg  border-bottom">
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
                <a class="nav-link" href="#">Dashboard</a>
              </li>
              <li class="nav-item md-justify-content-right md-border-bottom">
                <a class="nav-link" href="#">Kontak & Dukungan</a>
              </li>
              <li class="nav-item md-justify-content-right md-border-bottom">
                <a class="nav-link" href="#">Daftar</a>
              </li>
              <li class="nav-item md-justify-content-right md-border-bottom">
                <a class="nav-link" href="#">Masuk</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <section class="container-fluid full-height d-flex align-items-center">
        <div class="container">
          <div class="container text-center pt-3">
            <h1 class="">Layanan Kami</h1>
            <hr>
          </div>
        
          <div class="container text-center mt-5">
            <div class="row">
        
              <div class="col">
                <div class="container d-flex flex-column">
                  <img src="https://placehold.co/85x85" alt="">
                  <h4 class="mt-2">Termurah</h4>
                </div>
              </div>
        
              <div class="col">
                <div class="container d-flex flex-column">
                  <img src="https://placehold.co/85x85" alt="">
                  <h4 class="mt-2">Proses Cepat</h4>
                </div>
              </div>
        
            </div>
            <div class="row mt-3">
        
              <div class="col">
                <div class="container d-flex flex-column">
                  <img src="https://placehold.co/85x85" alt="">
                  <h3 class="mt-2">Privasi Data Terjamin</h3>
                </div>
              </div>
        
              <div class="col">
                <div class="container d-flex flex-column">
                  <img src="https://placehold.co/85x85" alt="">
                  <h4 class="mt-2">Konsultasi Gratis</h4>
                </div>
              </div>
        
            </div>
          </div>
        </div>
    </section>

    <footer class="md-footer-height bg-secondary py-3 gap-3">
      <div class="container">
        <img src="https://placehold.co/80x80" alt="">
      </div>
    
      <div class="container mt-4">
        <div class="container text-white">
          <h3>Office</h3>
          <p>Jl. Ibu Apipah No.6c, Kahuripan, Kec. <br>
            Tawang, Kab. Tasikmalaya, Jawa Barat <br>
            46115
          </p>
      
          <a href="#" class="text-decoration-none text-white">Lihat Peta</a>
          <img src="https://placehold.co/40x40" alt="" class="round-img">
      </div>
      
        <div class="container text-white mt-5">
          <h3>Ikuti Sosial Media kami</h3>
      
          <div class="container">
            <img src="https://placehold.co/50x50" alt="">
            <img src="https://placehold.co/50x50" alt="">
            <img src="https://placehold.co/50x50" alt="">
            <img src="https://placehold.co/50x50" alt="">
          </div>
        </div>
      
        <div class="container text-white mt-5">
          <h3>Hubungi kami</h3>
          <p>
            Punya pertanyaan tentang perizinan?<br>
            Hubungi kami.
          </p>
      
          <a href="#" class="text-decoration-none text-white">Contact Us</a>
          <img src="https://placehold.co/40x40" alt="" class="round-img">
        </div>
      
      </div>
    
      <div class="container text-white md-d-flex justify-content-center mt-3">
        <span>&copy; Jasa Amanah Berkah 2024</h3>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
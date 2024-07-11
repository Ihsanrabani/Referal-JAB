<?php
    if (!isset($_SESSION["masuk"])) {
      header("Location: masuk.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | Jasa Amanah Berkah</title>

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

    <section class="container-fluid">
      <div class="container text-center mt-4">
        <h1>Kontak & Dukungan</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, dolorem.</p>
      </div>

      <div class="container d-flex flex-column align-items-center gap-5 mt-4">

        <div class="card text-center" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Admin 1</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <hr>

            <a href="#" class="">Kontak admin1</a>
          </div>
        </div>

        <div class="card text-center" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Admin 2</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <hr>

            <a href="#" class="">Kontak admin2</a>
          </div>
        </div>

        <div class="card text-center" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Admin 3</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <hr>

            <a href="#" class="">Kontak admin3</a>
          </div>
        </div>

      </div>
    </section>

    <section class="container-fluid full-height mt-4">
      <div class="contianer d-flex flex-column align-items-center mt-3">
        <h2>FAQ</h2>
        <p>pertanyaan yang sering ditanyakan</p>
      </div>
      <hr>
    
      <div class="container mt-4">
        <div class="accordion custom-accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Kenapa harus jasa Amanah berkah
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, magnam eligendi inventore, fuga ea dolorem eius ad autem, optio voluptates fugit dignissimos voluptate facilis ab provident odit eos incidunt impedit.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Bla bla bla
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos perferendis, eum odit accusantium ratione a natus asperiores assumenda! Maiores repudiandae quos in voluptate, dignissimos perspiciatis.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                lorem ipsum dolor
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, facere quod magni provident ratione esse.
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
    
      <div class="container text-white md-d-flex justify-content-center mt-3 justify-self-end">
        <span>&copy; Jasa Amanah Berkah 2024</h3>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
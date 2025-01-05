<?php
include "koneksi.php"; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WebKu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" href="img/logo.png" />
</head>


<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container">
          <a class="navbar-brand" href="#">WebKu</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0" class="text-dark">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#hero">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#profile">Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#article">Article</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#jadwal">Jadwal</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#gallery">Gallery</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                  </li>
            </ul>
          </div>
        </div>
  </nav>
  
  <!-- HERO -->
  <section id="hero" class="text-center p-5 bg-success-subtle text-sm-start">
    <div class="container">
      <div class="d-sm-flex flex-sm-row-reverse align-items-center">
        <a href="https://day6.jype.com/Default/Schedule" target="_blank">
          <img src="img/poster.jpg" class="img-fluid p-4" width="400">
        </a>
        <div>
          <h1 class="fw-bold display-4">My Timeless-favourite K-Rock Songs</h1>
          <h4 class="lead display-6">Website ini berisi lagu-lagu favorite saya!</h4>
        </div>
      </div>
    </div>
  </section>

  <!-- Profile -->
  <section id="profile" class="text-start p-5">
    <div class="container">
      <h1 class="fw-bold display-4 pb-3 text-center">Profile</h1>
      <div class="row align-items-center">
        <div class="col-md-4 d-flex justify-content-center">
          <img src="img/profile.jpg" class="img-fluid rounded-circle" alt="profile" style="max-width: 100%; height: auto;">
        </div>

        <div class="col-md-8">
          <div class="text-center text-md-start mb-3">
            <h5 class="fw-bold mt-3 mt-md-0 mb-2">Annisa Angelica Nugraha</h5>
          </div>

          <table class="table">
            <tbody>
              <tr>
                <td class="ps-0">NIM</td>
                <td>: A11.2023.15345</td>
              </tr>
              <tr>
                <td class="ps-0">Program Studi</td>
                <td>: Teknik Informatika</td>
              </tr>
              <tr>
                <td class="ps-0">Email</td>
                <td>: 111202315345@mhs.dinus.ac.id</td>
              </tr>
              <tr>
                <td class="ps-0">Telephone</td>
                <td>: +62 812 2699 9615</td>
              </tr>
              <tr>
                <td class="ps-0">Alamat</td>
                <td>: Krapyak Wetan Rt 05 RW 08 Kartasura, Sukoharjo</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

  <!-- ARTICLE -->
  <section id="article" class="text-center p-5">
    <div class="container">
      <h1 class="fw-bold display-4 pb-3">Article</h1>
      <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
        <?php
        $sql = "SELECT * FROM article ORDER BY tanggal DESC";
        $hasil = $conn->query($sql); 

        while($row = $hasil->fetch_assoc()){
        ?>
          <div class="col">
            <div class="card h-100">
              <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title"><?= $row["judul"]?></h5>
                <p class="card-text">
                  <?= $row["isi"]?>
                </p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary">
                  <?= $row["tanggal"]?>
                </small>
              </div>
            </div>
          </div>
          <?php
        }
        ?> 
      </div>
    </div>
  </section>


    <!-- JADWAL -->
    <section id="jadwal" class="text-center p-5">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">Jadwal</h1>
        <div class="row row-cols-1 row-cols-md-4 g-1 justify-content-center">

        <div class="col">
          <div class="card h-100 justify-content-center">
            <div class="card-header text-white bg-success mb-3">
              Senin
            </div>
            <div class="card-body">
              <div>
                <p><b>12.30 - 15.00</b></p>
                <p>Probabilitas dan Statistik</p>
                <p>Ruang H.4.8</p>
              </div>
              <div>
                <p><b>15.30 - 18.00</b></p>
                <p>Sistem Operasi</p>
                <p>Ruang H.4.9</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100 justify-content-center">
            <div class="card-header text-white bg-primary mb-3">
              Selasa
            </div>
            <div class="card-body">
              <div>
                <p><b>09.30 - 12.00</b></p>
                <p>Rekayasa Perangkat Lunak</p>
                <p>Ruang H.4.10</p>
              </div>
              <div>
                <p><b>15.30 - 18.00</b></p>
                <p>Penambangan Data</p>
                <p>Ruang H.3.11</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100 justify-content-center">
            <div class="card-header text-white bg-danger mb-3">
              Rabu
            </div>
            <div class="card-body">
              <div>
                <p><b>09.30 - 12.00</b></p>
                <p>Kriptografi</p>
                <p>Ruang H.4.11</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100 justify-content-center">
            <div class="card-header text-white bg-warning mb-3">
              Kamis
            </div>
            <div class="card-body">
              <div>
                <p><b>09.30 - 12.00</b></p>
                <p>Logika Informatika</p>
                <p>Ruang H.4.10</p>
              </div>
              <div>
                <p><b>14.10 - 15.50</b></p>
                <p>Basis Data</p>
                <p>Ruang H.5.2</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100 justify-content-center">
            <div class="card-header text-white bg-info mb-3">
              Jumat
            </div>
            <div class="card-body">
              <div>
                <p><b>12.20 - 12.00</b></p>
                <p>Pemrograman Berbasis Web</p>
                <p>Ruang D.2.J</p>
              </div>
              <div>
                <p><b>14.10 - 15.50</b></p>
                <p>Basis Data</p>
                <p>Ruang H.3.M</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100 justify-content-center">
            <div class="card-header text-white bg-secondary mb-3">
              Sabtu
            </div>
            <div class="card-body">
              <div>
                <p><b>Tidak ada jadwal</b></p>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100 justify-content-center">
            <div class="card-header text-white bg-dark mb-3">
              Minggu
            </div>
            <div class="card-body">
              <div>
                <p><b>Tidak ada jadwal</b></p>
              </div>
            </div>
          </div>
        </div>
    
      </div>
    </section>

    <!-- Carousel -->
    <?php
    $sql = "SELECT gambar, link, judul FROM gallery";
    $result = $conn->query($sql);
    ?>
    <section id="gallery" class="text-center p-5 bg-success-subtle">
      <h1 align="center" class="fw-bold display-4 pb-3">Gallery</h1>
      <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">
        <div class="carousel-indicators">
          <?php
          $i = 0;
          while ($row = $result->fetch_assoc()) {
              $active = $i === 0 ? "active" : "";
              echo "<button type='button' data-bs-target='#carouselExample' data-bs-slide-to='$i' class='$active' aria-label='Slide " . ($i + 1) . "'></button>";
              $i++;
          }
          ?>
        </div>

        <div class="carousel-inner">
          <?php
          $result->data_seek(0);
          $i = 0;
          while ($row = $result->fetch_assoc()) {
              $active = $i === 0 ? "active" : "";
              echo "<div class='carousel-item $active'>";
              echo "<a href='" . $row['link'] . "' target='_blank'>";
              echo "<img src='img/" . $row["gambar"] . "' class='d-block w-100' alt='Gallery Image' />";
              echo "</a>";
              echo "<div class='carousel-caption d-none d-md-block'>";
              echo "<h5>" . htmlspecialchars($row['judul']) . "</h5>";
              echo "</div>";
              echo "</div>";
              $i++;
          }
          ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <!-- FOOTER -->
    <footer class="text-center p-5">
      <div>
        <a href="https://www.instagram.com" target="_blank" class="text-dark text-decoration-none mx-2">
          <i class="bi bi-instagram h5 p-0"></i>
        </a>
        <a href="https://x.com/" target="_blank" class="text-dark text-decoration-none mx-2">
          <i class="bi bi-twitter-x h5 p-0"></i>
        </a>
        <a href="https://www.whatsapp.com" target="_blank" class="text-dark text-decoration-none mx-2">
          <i class="bi bi-whatsapp h5 p-0"></i>
        </a>
      </div>
      <div class="mt-2">
        <p>Annisa Angelica Nugraha © 2024</p>
      </div>
    </footer>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
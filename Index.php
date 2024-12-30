<?php
include "koneksi.php"; 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Goat Agribusiness</title>
    <link rel="icon" href="logo1.png" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <style>
      #light {
        background-color: #FCDC94; 
        border-color: #FCDC94; 
    }

    #light:hover {
        background-color: #E4B772; 
        border-color: #E4B772;
    }

    #dark {
        background-color: #000000; 
        border-color: #000000; 
    }

    #dark:hover {
        background-color: #333333; 
        border-color: #333333;
    }
       /* Dark Mode */
      body.dark-mode {
        background-color: #333; 
        color: white; 
    }
    body {
      background-color: #fff;
      color: #000;
    }
    .navbar {
      background-color: #ef9c66;
    }
    .navbar-nav .nav-link {
      color: #000;
    }
    .navbar-brand {
      color: #000; 
    }

    /* Dark Mode */
    body.dark-mode {
      background-color: #121212;
      color: #fff;
    }
    body.dark-mode .navbar {
      background-color: #333;
    }
    body.dark-mode .navbar-nav .nav-link {
      color: #fff;
    }
    body.dark-mode .navbar-brand {
      color: #fff; 
    }
    .dark-mode .btn-dark {
      background-color: #444;
    }
    .dark-mode .btn-dark:hover {
      background-color: #666;
    }

    .social-icon {
      color: #e4f0a3; 
    }

    .social-icon:hover {
      color: #AAB182; 
    }

    #article {
      background-color: #C8CFA0; 
      color: #000; 
    }
  
    #article .card {
      background-color: #f1f7d3; 
      color: #000; 
    }
  
    /* Dark mode styles */
    .dark-mode #article {
      background-color: #343a40; 
      color: #fff; 
    }
  
    .dark-mode #article .card {
      background-color: #6c757d; 
      color: #fff; 
    }
  
    .dark-mode #article .card-footer {
      color: #fff; 
    }
  
    .dark-mode #article .card .card-body {
      background-color: #495057; 
    }
    </style>

  </head>
  <body>
    <!-- nav begin -->
    <nav class="navbar navbar-expand-sm sticky-top" style="background-color: #EF9C66">
      <div class="container">
        <a class="navbar-brand" href="#">Goat Agribusiness</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#article">Article</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#schedule">Schedule</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#aboutme">About Me</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php" target="_blank">Login</a>
            </li>
            <button
              type="button"
              class="btn btn-dark theme"
              id="dark"
              title="dark"
            >
              <i class="bi bi-moon-stars-fill"></i>
            </button>
            <button
              type="button"
              class="btn btn-danger theme"
              id="light"
              title="light"
            >
              <i class="bi bi-brightness-high"></i>
            </button>
          </ul>
        </div>
      </div>
    </nav>
    <!-- nav end -->
    <!-- hero begin -->
    <section id="home" class="text-center p-5 text-sm-start" style="background-color: #FCDC94;">
      <div class="container">
        <div class="d-sm-flex flex-sm-row-reverse align-items-center">
          <img src="https://media.istockphoto.com/id/478130148/id/foto/potret-kambing-lucu.jpg?s=1024x1024&w=is&k=20&c=nQoiTUBq73veghtDjgeGkVE_DxzVD1MQrIRbWSO9DyQ=" class="img-fluid" width="300" />
          <div>
            <h1 class="fw-bold display-4">
            GoatAgribusiness: Informasi dan Strategi Ternak Kambing yang Sukses
            </h1>
            <h4 class="lead display-6">
            Selamat datang di GoatAgribusiness, sumber utama untuk riset, tips, dan peluang di dunia agribisnis kambing
            </h4>
            <h6>
              <span id="tanggal"></span>
              <span id="jam"></span>
            </h6>
          </div>
        </div>
      </div>
    </section>
    <!-- hero end -->
    <!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">article</h1>
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
<!-- article end -->
    <!-- gallery begin -->
    <section id="gallery" class="text-center p-5" style="background-color: #FCDC94;">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">gallery</h1>
        <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://www.agroindustri.id/wp-content/uploads/2022/05/kambing-boer.jpeg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="https://live.staticflickr.com/6236/6304148506_9baf359c39_b.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="https://www.posbagus.com/wp-content/uploads/2018/12/000082-03-gambar-dp-lucu-banget-bikin-ngakak_kambing-menjulurkan-lidah_800x450_ccpdm-min.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiD9TjJEgVQo51Ncc1pzNuiLqGjimAFyjQ5A7KV0f1wieaV8sMMifdc4g4aTA3nksy4W4jZ2dOhYWY6ynpvTAkoErfY2ctHywJyc6PSctmboCPmfN7T_PRV2a5H5691hyphenhyphenKcSAE3qC3vo30/s1600/bm-image-722766.jpeg" class="d-block w-100" alt="..." />
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>
    <!-- gallery end -->
    <!-- schedule begin -->
    <section id="schedule" class="text-center p-5" style="background-color: #C8CFA0;">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">Schedule</h1>
        <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
          <div class="col">
            <div class="card h-100">
              <div class="card-header bg-danger text-white">SENIN</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Etika Profesi<br />16.20-18.00 | H.4.4
                </li>
                <li class="list-group-item">
                  Sistem Operasi<br />18.30-21.00 | H.4.8
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-header bg-danger text-white">SELASA</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Pendidikan Kewarganegaraan<br />12.30-13.10 | Kulino
                </li>
                <li class="list-group-item">
                  Probabilitas dan Statistik<br />15.30-18.00 | H.4.9
                </li>
                <li class="list-group-item">
                  Kecerdasan Buatan<br />18.30-21.00 | H.4.11
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-header bg-danger text-white">RABU</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Manajemen Proyek Teknologi Informasi<br />15.30-18.00 | H.4.6
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-header bg-danger text-white">KAMIS</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Bahasa Indonesia<br />12.30-14.10 | Kulino
                </li>
                <li class="list-group-item">
                  Pendidikan Agama Islam<br />16.20-18.00 | Kulino
                </li>
                <li class="list-group-item">
                  Penambangan Data<br />18.30-21.00 | H.4.9
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-header bg-danger text-white">JUMAT</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Pemrograman Web Lanjut<br />10.20-12.00 | D.2.K
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-header bg-danger text-white">SABTU</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">FREE</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- schedule end -->
    <!-- about me begin -->
    <section id="aboutme" class="text-center p-5" style="background-color: #FCDC94;">
      <div class="container">
        <div class="d-sm-flex align-items-center justify-content-center">
          <div class="p-3">
            <img
              src="saya.jpg"
              class="rounded-circle border shadow"
              width="300"
            />
          </div>
          <div class="p-md-5 text-sm-start">
            <h3 class="lead">A11.2023.14904</h3>
            <h1 class="fw-bold">Hafizh Naufal Nuha Kusuma</h1>
            Program Studi Teknik Informatika<br />
            <a href="https://dinus.ac.id/" class="fw-bold text-decoration-none"
              >Universitas Dian Nuswantoro</a
            >
          </div>
        </div>
      </div>
    </section>
    <!-- about me end -->
    <!-- footer begin -->
    <footer id="footer" class="text-center p-5" style="background-color: #EF9C66;">
      <div>
        <a href="https://www.instagram.com/hafizhnaufal_"
          ><i class="bi bi-instagram h2 p-2 social-icon"></i
        ></a>
        <a href="https://twitter.com/udinusofficial"
          ><i class="bi bi-twitter h2 p-2 social-icon"></i
        ></a>
        <a href="https://wa.me/+6281229927588"
          ><i class="bi bi-whatsapp h2 p-2 social-icon"></i
        ></a>
      </div>
      <div>Hafizh Naufal Nuha Kusuma &copy; 2024</div>
    </footer>
    <!-- footer end -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <script type="text/javascript">
      window.setTimeout("tampilWaktu()", 1000);

      function tampilWaktu() {
        var waktu = new Date();
        var bulan = waktu.getMonth() + 1;

        setTimeout("tampilWaktu()", 1000);
        document.getElementById("tanggal").innerHTML =
          waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
        document.getElementById("jam").innerHTML =
          waktu.getHours() +
          ":" +
          waktu.getMinutes() +
          ":" +
          waktu.getSeconds();
      }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript">
      document.getElementById("dark").onclick = function () {
        // Aktifkan Dark Mode
        document.body.classList.add("dark-mode");
        document.body.classList.remove("light-mode");
      
        // Navbar dan Footer
        document.querySelector(".navbar").style.backgroundColor = "#474343";
        document.getElementById("footer").style.backgroundColor = "#474343";
      
        // Section: home, article, gallery, schedule, aboutme
        document.getElementById("home").style.backgroundColor = "#646262";
        document.getElementById("article").style.backgroundColor = "#646262";
        document.getElementById("gallery").style.backgroundColor = "#646262";
        document.getElementById("schedule").style.backgroundColor = "#646262";
        document.getElementById("aboutme").style.backgroundColor = "#646262";
      
        // Update classes for text and background colors
        document.getElementById("hero").classList.remove("bg-danger-subtle", "text-black");
        document.getElementById("hero").classList.add("bg-secondary", "text-white");
      
        document.getElementById("gallery").classList.remove("bg-danger-subtle", "text-black");
        document.getElementById("gallery").classList.add("bg-secondary", "text-white");
      
        document.getElementById("aboutme").classList.remove("bg-danger-subtle", "text-black");
        document.getElementById("aboutme").classList.add("bg-secondary", "text-white");
      
        document.getElementById("footer").classList.remove("text-black");
        document.getElementById("footer").classList.add("text-white");
      
        document.getElementById("article").classList.remove("text-black");
        document.getElementById("article").classList.add("text-white");
      
        document.getElementById("schedule").classList.remove("text-black");
        document.getElementById("schedule").classList.add("text-white");
      
        // Make all text white
        document.body.style.color = "white";
      
        // Apply styles to cards and list items
        const collection = document.getElementsByClassName("card");
        for (let i = 0; i < collection.length; i++) {
          collection[i].classList.add("bg-secondary", "text-white");
        }
      
        const collection2 = document.getElementsByClassName("list-group-item");
        for (let i = 0; i < collection2.length; i++) {
          collection2[i].classList.add("bg-secondary", "text-white");
        }
      };
      
      document.getElementById("light").onclick = function () {
        // Aktifkan Light Mode
        document.body.classList.add("light-mode");
        document.body.classList.remove("dark-mode");
      
        // Navbar dan Footer
        document.querySelector(".navbar").style.backgroundColor = "#EF9C66";
        document.getElementById("footer").style.backgroundColor = "#EF9C66";
      
        // Section: home, article, gallery, schedule, aboutme
        document.getElementById("home").style.backgroundColor = "#FCDC94";
        document.getElementById("article").style.backgroundColor = "#C8CFA0";
        document.getElementById("gallery").style.backgroundColor = "#FCDC94";
        document.getElementById("schedule").style.backgroundColor = "#C8CFA0";
        document.getElementById("aboutme").style.backgroundColor = "#FCDC94";
      
        // Update classes for text and background colors
        document.getElementById("hero").classList.remove("bg-secondary", "text-white");
        document.getElementById("hero").classList.add("bg-danger-subtle", "text-black");
      
        document.getElementById("gallery").classList.remove("bg-secondary", "text-white");
        document.getElementById("gallery").classList.add("bg-danger-subtle", "text-black");
      
        document.getElementById("aboutme").classList.remove("bg-secondary", "text-white");
        document.getElementById("aboutme").classList.add("bg-danger-subtle", "text-black");
      
        document.getElementById("footer").classList.remove("text-white");
        document.getElementById("footer").classList.add("text-black");
      
        document.getElementById("article").classList.remove("text-white");
        document.getElementById("article").classList.add("text-black");
      
        document.getElementById("schedule").classList.remove("text-white");
        document.getElementById("schedule").classList.add("text-black");
      
        // Reset text color to black in light mode
        document.body.style.color = "black";
      
        // Apply styles to cards and list items
        const collection = document.getElementsByClassName("card");
        for (let i = 0; i < collection.length; i++) {
          collection[i].classList.remove("bg-secondary", "text-white");
        }
      
        const collection2 = document.getElementsByClassName("list-group-item");
        for (let i = 0; i < collection2.length; i++) {
          collection2[i].classList.remove("bg-secondary", "text-white");
        }
      };

      const toggleDarkMode = () => {
        document.body.classList.toggle('dark-mode');
      };
    </script>
    


  </body>
</html>

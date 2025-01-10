<?php
session_start();

include "koneksi.php";  

//check jika belum ada user yang login arahkan ke halaman login
if (!isset($_SESSION['username'])) { 
    header("location:login.php"); 
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin | Goat Agribusiness</title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
    .border-bottom {
        border-bottom: 3px solid #EF9C66 !important;
    }

    .bi-whatsapp, .bi-twitter, .bi-instagram {
        color: #C8CFA0;
    }

    .footer-container {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    .content {
        flex: 1; /* Membuat konten utama memenuhi ruang yang tersedia */
    }

    #footer {
        background-color: #EF9C66;
    }
    </style>
</head>
<body class="footer-container" style="background-color: #FCDC94;">
    <!-- nav begin -->
    <nav class="navbar navbar-expand-sm sticky-top" style="background-color: #EF9C66">
    <div class="container">
        <a class="navbar-brand" href=".">Goat Agribusiness</a>
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
                <a class="nav-link" href="admin.php?page=dashboard">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin.php?page=article">Article</a>
            <li class="nav-item">
                <a class="nav-link" href="admin.php?page=gallery">Gallery</a>
            </li> 
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-danger fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?= $_SESSION['username']?>
                </a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="admin.php?page=profile">Profile  <?= $_SESSION['username']?></a></li> 
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li> 
                </ul>
            </li> 
        </ul>
        </div>
    </div>
    </nav>
    <!-- nav end -->

    <!-- content begin -->
    <section id="content" class="content p-5">
        <div class="container">
            <?php
            if(isset($_GET['page'])){
            ?>
                <h4 class="lead display-6 pb-2 border-bottom border-danger-subtle"><?= ucfirst($_GET['page'])?></h4>
                <?php
                include($_GET['page'].".php");
            }else{
            ?>
                <h4 class="lead display-6 pb-2 border-bottom border-danger-subtle">Dashboard</h4>
                <?php
                include("dashboard.php");
            }
            ?>
        </div>
    </section>
    <!-- content end -->

    <!-- footer begin -->
    <footer id="footer" class="text-center p-5">
    <div>
        <a href="https://www.instagram.com/hafizhnaufal__"
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
</body>
</html>

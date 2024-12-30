<?php
// Memulai session atau melanjutkan session yang sudah ada
session_start();

// Menyertakan code dari file koneksi
include "koneksi.php";

// Variabel untuk notifikasi
$notifMessage = ""; // Variabel untuk menyimpan pesan notifikasi
$notifClass = ""; // Variabel untuk menyimpan kelas warna notifikasi
$inputUser = ""; // Variabel untuk menyimpan username inputan
$inputPass = ""; // Variabel untuk menyimpan password inputan

// Check jika sudah ada user yang login arahkan ke halaman admin
if (isset($_SESSION['username'])) { 
    header("location:admin.php"); 
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Simpan input ke variabel
  $inputUser = $_POST['user'];
  $inputPass = $_POST['pass'];
  
  $username = $inputUser;
  $password = md5($inputPass); 
  
  // Validasi dengan database
  $stmt = $conn->prepare("SELECT username FROM user WHERE username=? AND password=?");
  $stmt->bind_param("ss", $username, $password);
  $stmt->execute();
  $hasil = $stmt->get_result();
  $row = $hasil->fetch_array(MYSQLI_ASSOC);

  if (!empty($row)) {
      $_SESSION['username'] = $row['username'];
      header("location:admin.php");
  } else {
      $notifMessage = "Username dan Password salah!<br>Username: " . htmlspecialchars($inputUser) . "<br>Password: " . htmlspecialchars($inputPass);
      $notifClass = "alert-danger";
  }
  $stmt->close();
  $conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login | Goat Agribusiness</title>
    <link rel="icon" href="logo.png" />
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
        .btn-danger {
            background-color: #C8CFA0; 
            border-color: #C8CFA0; 
        }
        .btn-danger:hover {
            background-color: #AAB182; 
            border-color: #AAB182;
        }
        .card {
            background-color: #FCDC94; 
        }
        .notification {
            padding: 10px;
            margin-top: 10px;
            border-radius: 25px;
            text-align: center;
        }
    </style>
</head>
<body style="background-color: #EF9C66;">
<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-12 col-sm-8 col-md-6 m-auto">
            <div class="card border-0 shadow rounded-5">
                <div class="card-body">
                    <div class="text-center mb-3">
                        <img 
                            src="logo1.png" 
                            alt="Logo Ternak Berkah" 
                            class="img-fluid mb-3" 
                           style="width: 100px; height: 100px; object-fit: contain; border-radius: 50px;"
                        />
                        <p>Goat Agribusiness</p>
                        <hr />
                    </div>
                    <form action="" method="post">
                        <input
                          type="text"
                          name="user"
                          class="form-control my-4 py-2 rounded-4"
                          placeholder="Username"
                        />
                        <input
                          type="password"
                          name="pass"
                          class="form-control my-4 py-2 rounded-4"
                          placeholder="Password"
                        />
                        <div class="text-center my-3 d-grid">
                            <button class="btn btn-danger rounded-4">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Notifikasi di luar form login, ditampilkan setelah form login -->
<?php if (!empty($notifMessage)): ?>
    <div class="container mt-3">
    <div class="notification alert <?= htmlspecialchars($notifClass); ?> w-100 d-inline-block">
    <?= nl2br($notifMessage); ?>
</div>

    </div>
<?php endif; ?>

<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
  crossorigin="anonymous"
></script>
</body>
</html>
<?php
?>

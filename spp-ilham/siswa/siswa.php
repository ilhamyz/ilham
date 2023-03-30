<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Siswa - Aplikasi Pembayaran SPP</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container-mt-5 {
            margin-top: 50px;
        }

        .alert-info {
            background-color: #e2f3f5;
            color: #0c5460;
            border-color: #bee5eb;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h3 class="text-center mb-4">Aplikasi Pembayaran SPP</h3>
        <div class="alert alert-info text-center">
            Anda Login Sebagai Petugas <b><?= $_SESSION['nama'] ?></b> di Aplikasi Pembayaran SPP
        </div>
        <div class="text-center mt-4">
            <a href="siswa.php" class="btn btn-primary mx-2">Petugas</a>
            <a href="siswa.php?url=history-pembayaran" class="btn btn-primary mx-2">History</a>
            <a href="siswa.php?url=logout" class="btn btn-primary mx-2">Logout</a>
        </div>
        <div class="card mt-4">
            <div class="card-body">
                <?php
                $file = @$_GET['url'];
                if (empty($file)) {
                    echo "<h4>Selamat Datang di Halaman Petugas</h4>";
                    echo "Aplikasi Pembayaran SPP digunakan untuk mempermudah dalam mencatat pembayaran siswa / siswi di sekolah.";
                } else {
                    include $file . '.php';
                }
                ?>
            </div>
        </div>
    </div>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>
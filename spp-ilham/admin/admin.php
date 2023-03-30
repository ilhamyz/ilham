<!-- <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Aplikasi Pembayaran SPP</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="admin.php">Aplikasi Pembayaran SPP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Administrator</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php?url=spp">SPP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php?url=kelas">Kelas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php?url=siswa">Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php?url=petugas">Petugas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php?url=pembayaran">Pembayaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php?url=laporan">Laporan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="logout()">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="alert alert-secondary text-center" role="alert">
            Anda login sebagai <strong>Administrator</strong>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <?php
                        $file = @$_GET['url'];
                        if (empty($file)) {
                            echo "<h4>Selamat Datang Di Halaman Administrator</h4>";
                            echo "Aplikasi Pembayaran SPP digunakan untuk mempermudah dalam mencatat pembayaran siswa / siswi disekolah.";
                        } else {
                            include $file . '.php';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script>
        function logout() {
            if (confirm("Apakah Anda yakin ingin keluar?")) {
                window.location.href = "admin.php?url=logout";
            }
        }
    </script>
</body>

</html> -->


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Petugas - Aplikasi Pembayaran SPP</title>
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
            Anda Login Sebagai <strong>Administrator</strong> di Aplikasi Pembayaran SPP
        </div>
        <div class="text-center mt-4">
            <a href="admin.php" class="btn btn-primary mx-2">Admin</a>
            <a href="admin.php?url=kelas" class="btn btn-primary mx-2">Kelas</a>
            <a href="admin.php?url=siswa" class="btn btn-primary mx-2">Siswa</a>
            <a href="admin.php?url=petugas" class="btn btn-primary mx-2">Petugas</a>
            <a href="admin.php?url=pembayaran" class="btn btn-primary mx-2">Pembayaran</a>
            <a href="admin.php?url=laporan" class="btn btn-primary mx-2">Laporan</a>
            <a href="admin.php?url=logout" class="btn btn-primary mx-2">Logout</a>
        </div>
        <div class="card mt-4">
            <div class="card-body">
                <?php
                $file = @$_GET['url'];
                if (empty($file)) {
                    echo "<h4>Selamat Datang di Halaman Admin</h4>";
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
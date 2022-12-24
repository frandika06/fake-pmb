<?php
session_start();
// panggil konfigurasi
require_once('pages/config/koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIM PMB | Sistem Informasi Manajemen Pendafatarn Mahasiswa Baru</title>
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->
</head>
<body>
    <?php
    if (isset($_SESSION['username'])) {
        // sudah login
    }else{
        // belum login
        require_once("pages/portal/portal.php");
    }
    ?>
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>

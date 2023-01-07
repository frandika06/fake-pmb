<?php
session_start();
// panggil konfigurasi
require_once 'pages/config/koneksi.php';

// cek users login
if (isset($_SESSION['username'])) {
    // sudah login
    require_once "pages/dashboard/dashboard.php";
} else {
    // belum login
    require_once "pages/portal/portal.php";
}

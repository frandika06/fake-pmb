<?php
if ($_SESSION['username']) {
    session_start();
    session_destroy();
    echo '<script>alert("Anda Berhasil Sign Out!"); document.location="?menu=sign-in";</script>';
} else {
    echo '<script>document.location="?menu=sign-in";</script>';
}

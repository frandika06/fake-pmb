<div class="row justify-content-center">
    <div class="col-6">
        <div class="card mt-3">
            <div class="card-header">
                Form Pendaftaran Mahasiswa Baru
            </div>
            <form action="" method="POST">
                <div class="card-body">
                    <div class="row mb-3">
                        <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="fakultas" id="fakultas" required>
                                <option value="" selected disabled>Pilih Fakultas</option>
                                <option value="Teknik Kedirgantaraan">Teknik Kedirgantaraan</option>
                                <option value="Teknologi Industri">Teknologi Industri</option>
                                <option value="Hukum">Hukum</option>
                                <option value="Ekonomi">Ekonomi</option>
                                <option value="Manajemen">Manajemen</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Jurusan</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="jurusan" id="jurusan" required>
                                <option value="" selected disabled>Pilih Jurusan</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary" name="daftar">Daftar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
// ini adalah proses action/submit
if (isset($_POST['daftar'])) {
    // membuat variable dari inputan
    $id_pendaftar = $_SESSION['id_pendaftar'];
    $fakultas = $_POST['fakultas'];
    $jurusan = $_POST['jurusan'];
    if ($fakultas == "" && $jurusan == "") {
        echo '<script>alert("Lengkapi Form Fakultas dan Jurusan Terlebih Dahulu!"); document.location="?menu=dashboard";</script>';
    }
    // save calonmaba
    $tbl = "calonmaba";
    $col = "id_pendaftar, fakultas, jurusan";
    $val = "'" . $id_pendaftar . "','" . $fakultas . "', '" . $jurusan . "'";
    $save_1 = querySave($tbl, $col, $val);
    if ($save_1) {
        echo '<script>alert("Berhasil Disimpan!"); document.location="?menu=dashboard";</script>';
    } else {
        echo '<script>alert("Gagal Disimpan!"); document.location="?menu=dashboard";</script>';
    }
}
?>
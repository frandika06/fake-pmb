<!-- ini custom css -->
<style>
html,
body {
    height: 100%;
}

body {
    display: flex;
    align-items: center;
    padding-top: 40px;
    padding-bottom: 40px;
    background-color: #f5f5f5;
}

.form-signin {
    max-width: 330px;
    padding: 15px;
}

.form-signin .form-floating:focus-within {
    z-index: 2;
}

.form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
}

@media (min-width: 768px) {
    .bd-placeholder-img-lg {
        font-size: 3.5rem;
    }
}

.b-example-divider {
    height: 3rem;
    background-color: rgba(0, 0, 0, .1);
    border: solid rgba(0, 0, 0, .15);
    border-width: 1px 0;
    box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
}

.b-example-vr {
    flex-shrink: 0;
    width: 1.5rem;
    height: 100vh;
}

.bi {
    vertical-align: -.125em;
    fill: currentColor;
}

.nav-scroller {
    position: relative;
    z-index: 2;
    height: 2.75rem;
    overflow-y: hidden;
}

.nav-scroller .nav {
    display: flex;
    flex-wrap: nowrap;
    padding-bottom: 1rem;
    margin-top: -1px;
    overflow-x: auto;
    text-align: center;
    white-space: nowrap;
    -webkit-overflow-scrolling: touch;
}
</style>

<!-- ini page -->
<main class="form-signin w-100 m-auto">
    <form action="" method="POST">
        <img class="mb-4" src="assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
            <label for="email">Email address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            <label for="password">Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit" name="signin">Sign in</button>
        <div class="mt-3 text-right">
            Tidak Punya Akun? <a href="?menu=sign-up">Silahkan Daftar</a>
        </div>
        <p class="mt-5 mb-3 text-muted text-center">&copy; 2022</p>
    </form>
</main>

<?php
if (isset($_POST['signin'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    // cek data user
    $col = "*";
    $tbl = "users";
    $val = "WHERE email='" . $email . "' AND password='" . $password . "'";
    $ambil_users = querySelect($col, $tbl, $val);
    $count_user = mysqli_fetch_row($ambil_users);
    $ambil_users = querySelect($col, $tbl, $val);
    $data = mysqli_fetch_array($ambil_users);
    if($count_user > 0){
        // ada user
        $_SESSION['username'] = $email;
        $_SESSION['id_pendaftar'] = $data['id_pendaftar'];
        echo '<script>alert("Berhasil Sign In!"); document.location="?menu=dashboard";</script>';
    }else{
        // tidak ada user
        echo '<script>alert("Gagal Sign In!"); document.location="?menu=sign-in";</script>';
    }
}
?>
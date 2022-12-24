<?php
if (isset($_GET['menu'])) {
    $menu = $_GET['menu'];
    switch ($menu) {
        case 'sign-in':
            require_once 'signin.php';
            break;
        case 'sign-up':
            require_once 'signup.php';
            break;
        default:
            require_once 'signin.php';
            break;
    }
}else{
    require_once 'signin.php';
}

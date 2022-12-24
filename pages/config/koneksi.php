<?php

// koneksi
function koneksi()
{
    $DataBase['host'] = 'localhost';
    $DataBase['user'] = 'root';
    $DataBase['pass'] = '';
    $DataBase['dbName'] = "db_fakepmb";
    $host = $DataBase['host'];
    $user = $DataBase['user'];
    $pass = $DataBase['pass'];
    $dbName = $DataBase['dbName'];
    return mysqli_connect($host, $user, $pass, $dbName);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
}

function querySelect($col, $tbl, $val)
{
    $kon = koneksi();
    $query = "SELECT $col FROM $tbl $val";
    $sql = mysqli_query($kon, $query) or die(mysqli_error($kon));
    return $sql;
    mysqli_close($kon);
}

function querySave($tbl, $col, $val)
{
    $kon = koneksi();
    $query = "INSERT INTO $tbl ($col) VALUES ($val)";
    $sql = mysqli_query($kon, $query) or die(mysqli_error($kon));
    return $sql;
    mysqli_close($kon);
}

function queryEdit($tbl, $col, $val)
{
    $kon = koneksi();
    $query = "UPDATE $tbl SET $col WHERE $val";
    $sql = mysqli_query($kon, $query) or die(mysqli_error($kon));
    return $sql;
    mysqli_close($kon);
}

function queryHapus($tbl, $val)
{
    $kon = koneksi();
    $query = "DELETE FROM $tbl WHERE $val";
    $sql = mysqli_query($kon, $query) or die(mysqli_error($kon));
    return $sql;
    mysqli_close($kon);
}

<?php
$MY_HOST = "localhost";
$MY_USERNAME = "root";
$MY_PASSWORD = "";
$MY_DATABASE = "crud1";
$MY_PORT = '3306';

$koneksi = new mysqli($MY_HOST, $MY_USERNAME, $MY_PASSWORD,  $MY_DATABASE, $MY_PORT);

if($koneksi->connect_error) {
    die('Koneksi Gagal Tersambung silahkan anda periksa nama databasenya' .$koneksi->connect_error);
}
?>
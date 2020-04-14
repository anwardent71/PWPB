<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<?php 
include('koneksi.php');

$id = $_GET['id'];

$perintah = mysqli_query($koneksi, "DELETE FROM `datamartabak` WHERE `id_martabak` = $id");
if ($perintah==TRUE) {
    echo '<div class="alert alert-success" role="alert">
    Data berhasil di hapus dari table.
    <a href="tampildata.php" class="alert-link">Klik disini</a> jika anda ingin melihat Data Terbaru.</div>';;
}
else {
    echo 'Data gagal di hapus dari table';
}
?>

<!-- kelas untuk proses menghapus data yang dikirim dari tampil data (keluar Notifikasi)-->
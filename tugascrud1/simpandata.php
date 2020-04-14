<?php 
include('koneksi.php');

$nama = $_POST{'namamartabak'};
$harga = $_POST{'harga'};
$jenis = $_POST{'jenis'};
$kat = $_POST{'kategori'};
$satuan = $_POST{'satuan'};
$gambar = $_POST{'gambar'};
$stok = $_POST{'stok'};

$cari_id = mysqli_query($koneksi, "SELECT * from datamartabak order by id_martabak DESC LIMIT 0,1");
$id = mysqli_fetch_array($cari_id);
$id_awal = (int) ($id['id_martabak'])+1;

$perintahnya = mysqli_query($koneksi, "INSERT INTO `datamartabak` (`id_martabak`, `nama_martabak`, `harga`, `jenis`, `kategori`, `satuan`, `url_gambar`, `stok`) 
VALUES ('$id_awal', '$nama', '$harga', '$jenis', '$kat', '$satuan', '$gambar', '$stok');");

if ($perintahnya==TRUE) {
    header("Location:tampildata.php");
}
else {
    echo "Data Gagal Disimpan ke ";
}
?>

<!-- kelas untuk menyimpan proses yang dikirim dari form input ke tampil data-->
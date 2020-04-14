<?php 
    include('koneksi.php');
    
    $id = $_POST{'id_martabak'};
    $nama = $_POST{'namamartabak'};
    $harga = $_POST{'harga'};
    $jenis = $_POST{'jenis'};
    $kat = $_POST{'kategori'};
    $satuan = $_POST{'satuan'};
    $gambar = $_POST{'url_gambar'};
    $stok = $_POST{'stok'};
    
    $perintah = mysqli_query($koneksi, "UPDATE `datamartabak` SET `nama_martabak` = '$nama', `harga` = '$harga', `jenis` = '$jenis', `kategori` = '$kat', `satuan` = '$satuan', `url_gambar` = '$gambar', `stok` = '$stok' 
    WHERE `datamartabak`.`id_martabak` = $id;");

    if($perintah==TRUE){
        header("Location: tampildata.php");
    }else{
        echo "Terjadi Kesalahan Data Gagal Di Update";
    }
?>
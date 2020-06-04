<?php
session_start();
include 'koneksi.php';

$id = stripslashes(strip_tags(htmlspecialchars($_POST['id'] ,ENT_QUOTES)));
$nama_siswa = stripslashes(strip_tags(htmlspecialchars($_POST['nama_siswa'] ,ENT_QUOTES)));
$alamat = stripslashes(strip_tags(htmlspecialchars($_POST['alamat'] ,ENT_QUOTES)));
$jenkel = stripslashes(strip_tags(htmlspecialchars($_POST['jenkel'] ,ENT_QUOTES)));
$tanggal_masuk = stripslashes(strip_tags(htmlspecialchars($_POST['tanggal_masuk'] ,ENT_QUOTES)));
$jurusan = stripslashes(strip_tags(htmlspecialchars($_POST['jurusan'] ,ENT_QUOTES)));

if ($id == "") {
    $query = "INSERT into tbl_siswa (nama_siswa, alamat, jenis_kelamin, tgl_masuk, jurusan) VALUES (?, ?, ?, ?, ?)";
    $prepare1 = $db1->prepare($query);
    $prepare1->bind_param("sssss", $nama_siswa, $alamat, $jenkel, $tanggal_masuk, $jurusan,);
    $prepare1->execute();
}
else {
    $query = "UPDATE tbl_siswa SET nama_siswa=?, alamat=?, jenis_kelamin=?, tgl_masuk=?,  jurusan=? WHERE id=?";
    $prepare1 = $db1->prepare($query);
    $prepare1->bind_param("sssssi", $nama_siswa, $alamat, $jenkel, $tanggal_masuk, $jurusan, $id);
    $prepare1->execute();
}

echo json_execute(['success' => 'Sukses']);

$db1->close();
?>
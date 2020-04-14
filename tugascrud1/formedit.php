<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Form Edit Data</title>
</head>
<body>
<?php 
include('koneksi.php');
$id = $_GET['id'];

$query = mysqli_query($koneksi," SELECT * FROM `datamartabak` WHERE `id_martabak`= $id");

while($data=mysqli_fetch_array($query)) {
    $id = $data['id_martabak'];
    $nama = $data['nama_martabak'];
    $harga = $data['harga'];
    $jenis = $data['jenis'];
    $kat = $data['kategori'];
    $satuan = $data['satuan'];
    $gambar = $data['url_gambar'];
    $stok = $data['stok'];
}
?>
<div class="form">
    <form action="editdata.php" method="post">
            <table class="table" border="1" align="center" style="width: 55%">
                <tr class="table-warning">
                    <td><h2 style="text-align : center">Form Edit Master dan Stock Data Barang</h2></td>
                </tr>
    <tr>
        <td>
            <div>
                <label>ID Martabak</label>
                <input type="number" class="form-control" name="id_martabak" value=<?php echo $id ?> readonly>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div>
                <label>Nama Martabak</label>
                <input type="text" class="form-control" name="namamartabak" value=<?php echo $nama ?> required>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="form-group">
                <label>Harga</label>
                <input type="number" class="form-control" name="harga" value=<?php echo $harga ?> required>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="form-group">
                <label>Jenis</label>
                <select class="form-control" name="jenis" value=<?php echo $jenis ?> required>
                    <option value="none">Pilih Jenis</option>
                    <option value="Martabak Manis">Martabak Manis</option>
                    <option value="Martabak Telur">Martabak Telur</option>
                </select>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" name="kategori" value=<?php echo $kat ?>  required>
                    <option value="none">Pilih Kategori</option>
                    <option value="Kecil">Kecil</option>
                    <option value="Biasa">Biasa</option>
                    <option value="Besar">Besar</option>
                    <option value="Telur Ayam">Telur Ayam</option>
                    <option value="Telur Bebek">Telur Bebek</option>
                </select>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="form-group">
                <label>Satuan</label>
                <select class="form-control" name="satuan" value=<?php echo $satuan ?>  required>
                    <option value="none">Pilih Satuan</option>
                    <option value="PCS">Pcs</option>
                </select>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="form-group">
                <label>Url Gambar</label>
                <input type="url" class="form-control" name="url_gambar" value=<?php echo $gambar ?> >
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="form-group">
                <label>Stok</label>
                <input type="number" class="form-control" name="stok" value=<?php echo $stok ?> required>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <button type="submit" class="btn btn-outline-primary">Simpan</button>
            <button type="reset" class="btn btn-outline-danger">Reset</button>
        </td>
    </tr>
</table>
</body>
</html>
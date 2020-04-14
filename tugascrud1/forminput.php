<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Form Input Data</title>
</head>
<body>
<div class="form">
    <form action="simpandata.php" method="post">
            <table class="table" border="1" align="center" style="width: 55%">
                <tr class="table-warning">
                    <td><h2 style="text-align : center">Form Input Master dan Stock Data Barang</h2></td>
                </tr>
    <tr>
        <td>
            <div>
                <label>Nama Martabak</label>
                <input type="text" class="form-control" name="namamartabak" required>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="form-group">
                <label>Harga</label>
                <input type="number" class="form-control" name="harga" required>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="form-group">
                <label>Jenis</label>
                <select class="form-control" name="jenis" required>
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
                <select class="form-control" name="kategori" required>
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
                <select class="form-control" name="satuan" required>
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
                <input type="url" class="form-control" name="url_gambar">
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="form-group">
                <label>Stok</label>
                <input type="number" class="form-control" name="stok" required>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <button type="submit" class="btn btn-outline-primary">Submit</button>
            <button type="reset" class="btn btn-outline-danger">Reset</button>
        </td>
    </tr>
</table>
</body>
</html>
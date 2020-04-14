<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Tampil Data</title>
    <style>
        .stokwarna {
            background-color: red;
            color: white;
        }
        .edit, .hapus, .tambah{
            color: black;
        }
    </style>
</head>
<body>
    <?php 
        include("koneksi.php");
        $hasil=mysqli_query($koneksi,"SELECT * FROM datamartabak");
    ?>
    
    <table class="table" border="1">
            <thead class="thead-light">
                <tr>
                <th>Kode Martabak</th>
                <th>Nama Martabak</th>
                <th>Harga</th>
                <th>Jenis</th>
                <th>Kategori</th>
                <th>Satuan</th>
                <th>Gambar Martabak</th>
                <th>Stok</th>
                <th>Modify</th>
                </tr>
            </thead>
        <?php while($data = mysqli_fetch_array($hasil)){ ?>
            <tr>
                <td> <?php echo $data['id_martabak'] ?> </td>
                <td> <?php echo $data['nama_martabak'] ?> </td>
                <td> <?php echo $data['harga'] ?> </td>
                <td> <?php echo $data['jenis'] ?> </td>
                <td> <?php echo $data['kategori'] ?> </td>
                <td> <?php echo $data['satuan'] ?> </td>
                <td><img src=" <?php echo $data['url_gambar'] ?>"style='width: 100px; height: 100px;' alt='Image'></td>

                <?php if($data['stok'] <= 5) { ?>
                    <td class="stokwarna"><?php echo $data['stok'] ?> </td>
                <?php } else { ?>
                    <td><?php echo $data['stok'] ?> </td> 
                <?php } ?>

                <td>
                <button type="button" class="btn btn-outline-primary"><a href="formedit.php?id=<?php echo $data['id_martabak']?>" class="edit">Edit</a></button>
                <button type="button" class="btn btn-outline-danger"><a href="hapusdata.php?id=<?php echo $data['id_martabak']?>" class="hapus">Hapus</a></button>
                </td>
            </tr>
        <?php } ?>  
    </table>

    <center>
    <button type="button" class="btn btn-outline-success"><a href="forminput.php" class="tambah">Tambah Data</a></button>
    </center>
</body>
</html>
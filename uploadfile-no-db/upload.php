<?php
$fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
$fileName = $_FILES['uploadedFile']['name'];
$fileSize = $_FILES['uploadedFile']['size'];
$fileType = $_FILES['uploadedFile']['type'];
$fileNameCmps = explode(".", $fileName);
$fileExtension = strtolower(end($fileNameCmps));

$newFileName = md5(time(). $fileName) . '.' . $fileExtension;

if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Upload'){

    $allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc');

    if (in_array($fileExtension, $allowedfileExtensions)) {
        $uploadFileDir = './uploaded_files/';
        $dest_path = $uploadFileDir . $newFileName;

        $goUpload = move_uploaded_file($uploadFileDir, $dest_path);
        echo "File yang anda kirim berhasil di upload !";
    }
    else {
        echo "File yang anda kirim Gagal di upload ! <br> Silahkan anda periksa kembali";
    }
}
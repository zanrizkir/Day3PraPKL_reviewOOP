<?php
include '../database.php';
$guru = new Guru();

if(isset($_POST['save'])){
    $aksi = $_POST['aksi'];
    $no = $_POST['NO'];
    $nip = $_POST['NIP'];
    $nama = $_POST['NAMA'];
    $alamat = $_POST['ALAMAT'];

    if ($aksi == "create"){
        $guru->create($nip,$nama,$alamat);
        header("location:index.php");

    }
    else if ($aksi == "update") {
        $guru->update($no,$nip,$nama,$alamat);
        header("location:index.php");
    }
    else if ($aksi == "delete"){
        $guru->delete($no);
        header("location:index.php");
    }
}
?>
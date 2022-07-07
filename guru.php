<?php 
    // require "database.php";
    class Guru extends Database{
        // menampilkan data guru ke Index.php
        public function index(){
            $dataguru = mysqli_query($this->koneksi, "SELECT * FROM guru");

            return $dataguru;
        }

        public function create($nip,$nama,$alamat){
            mysqli_query($this->koneksi, "INSERT INTO guru VALUES (NULL, '$nip','$nama', '$alamat')");

            return $dataguru;
        }
        public function edit($no) {
            $dataguru = mysqli_query($this->koneksi, "SELECT * FROM guru WHERE NO='$no'");
            return $dataguru;
        }

        public function update($no, $nip, $nama, $alamat) {
            mysqli_query($this->koneksi, "UPDATE guru SET 
            NIP = '$nip',
            NAMA = '$nama', 
            ALAMAT = '$alamat' 
            WHERE NO = '$no'");
        }

        public function show ($no){
            $dataguru = mysqli_query($this->koneksi,"SELECT * FROM guru WHERE NO='$no'");

            return $dataguru;

        }

        public function delete ($no){
            mysqli_query($this->koneksi,"DELETE FROM guru WHERE NO ='$no'");
        }
    }

?>
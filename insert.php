<?php

// Include koneksi database
include('koneksi.php');

// Get data dari form
$nama_aset = $_POST['nama_aset'];
$deskripsi_aset = $_POST['deskripsi_aset'];
$jenis_aset = $_POST['jenis_aset'];
$status = $_POST['status'];
$lokasi = $_POST['lokasi'];

// Query insert data ke dalam database
$query = "INSERT INTO tbl_aset (nama_aset, deskripsi_aset, jenis_aset, status, lokasi) 
          VALUES ('$nama_aset', '$deskripsi_aset', '$jenis_aset', '$status', '$lokasi')";

// Kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($connection->query($query)) {
    // Redirect ke halaman index.php jika berhasil
    header("location: index.php");
} else {
    // Pesan error jika gagal insert data
    echo "Data Gagal Disimpan!";
}

?>
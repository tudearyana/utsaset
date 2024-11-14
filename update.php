<?php
// Include file koneksi
include('koneksi.php');

// Cek apakah data telah di-submit melalui form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $id_aset = $_POST['id_aset'];
    $nama_aset = mysqli_real_escape_string($connection, $_POST['nama_aset']);
    $deskripsi_aset = mysqli_real_escape_string($connection, $_POST['deskripsi_aset']);
    $jenis_aset = mysqli_real_escape_string($connection, $_POST['jenis_aset']);
    $status = mysqli_real_escape_string($connection, $_POST['status']);
    $lokasi = mysqli_real_escape_string($connection, $_POST['lokasi']);

    // Query update data ke tabel tbl_aset
    $query = "UPDATE tbl_aset 
              SET nama_aset = '$nama_aset', deskripsi_aset = '$deskripsi_aset', jenis_aset = '$jenis_aset', 
                  status = '$status', lokasi = '$lokasi' 
              WHERE id_aset = $id_aset";

    // Eksekusi query dan cek apakah berhasil
    if (mysqli_query($connection, $query)) {
        // Redirect ke halaman index jika berhasil
        header("Location: index.php");
    } else {
        // Tampilkan pesan error jika gagal
        echo "Data Gagal Diupdate: " . mysqli_error($connection);
    }
}

// Menutup koneksi
mysqli_close($connection);

?>
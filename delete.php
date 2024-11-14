<?php
// Include koneksi database
include('koneksi.php');

// Cek apakah id_aset ada dalam parameter URL
if (isset($_GET['id_aset'])) {
    // Mengambil id_aset dari URL
    $id_aset = $_GET['id_aset'];

    // Query untuk menghapus data berdasarkan id_aset
    $query = "DELETE FROM tbl_aset WHERE id_aset = $id_aset";

    // Eksekusi query dan cek apakah berhasil
    if (mysqli_query($connection, $query)) {
        // Redirect ke halaman index.php jika berhasil
        header("Location: index.php");
    } else {
        // Tampilkan pesan error jika gagal
        echo "Data Gagal Dihapus: " . mysqli_error($connection);
    }
} else {
    // Redirect ke index.php jika tidak ada id_aset di URL
    header("Location: index.php");
}

// Menutup koneksi
mysqli_close($connection);
?>
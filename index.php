<?php
// Include file koneksi
include('koneksi.php');

// Query untuk mengambil data dari tabel tbl_aset
$query = "SELECT * FROM tbl_aset";
$result = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Aset</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Daftar Aset</h2>
        <a href="tambah.php" class="btn btn-primary mb-3">Tambah Data Aset</a>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID Aset</th>
                    <th>Nama Aset</th>
                    <th>Deskripsi</th>
                    <th>Jenis Aset</th>
                    <th>Status</th>
                    <th>Lokasi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Loop untuk menampilkan setiap data aset dalam tabel
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id_aset'] . "</td>";
                    echo "<td>" . $row['nama_aset'] . "</td>";
                    echo "<td>" . $row['deskripsi_aset'] . "</td>";
                    echo "<td>" . $row['jenis_aset'] . "</td>";
                    echo "<td>" . $row['status'] . "</td>";
                    echo "<td>" . $row['lokasi'] . "</td>";
                    echo "<td>
                        <a href='edit.php?id_aset=" . $row['id_aset'] . "' class='btn btn-priamary btn-sm'>Edit</a>
                        <a href='delete.php?id_aset=" . $row['id_aset'] . "' class='btn btn-danger btn-sm' onclick=\"return confirm('Apakah Anda yakin ingin menghapus data ini?');\">Delete</a>
                      </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
// Menutup koneksi database
mysqli_close($connection);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Aset</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Form Tambah Data Aset</h2>
        <form action="insert.php" method="POST">
            <div class="mb-3">
                <label for="nama_aset" class="form-label">Nama Aset</label>
                <input type="text" class="form-control" id="nama_aset" name="nama_aset" required>
            </div>

            <div class="mb-3">
                <label for="deskripsi_aset" class="form-label">Deskripsi Aset</label>
                <textarea class="form-control" id="deskripsi_aset" name="deskripsi_aset" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="jenis_aset" class="form-label">Jenis Aset</label>
                <input type="text" class="form-control" id="jenis_aset" name="jenis_aset" required>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status Aset</label>
                <select class="form-select" id="status" name="status" required>
                    <option value="Baik">Baik</option>
                    <option value="Rusak">Rusak</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="lokasi" class="form-label">Lokasi</label>
                <input type="text" class="form-control" id="lokasi" name="lokasi" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
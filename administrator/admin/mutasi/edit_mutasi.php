<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Form Edit Mutasi
        </h3>
    </div>
    <div class="row">
        <div class="col-md-8">
            <?php
            if (isset($_GET['kode'])) {
                $id_mutasi = $_GET['kode'];

                // Query untuk mendapatkan data mutasi berdasarkan ID
                $query = "SELECT * FROM tb_mutasi_keluar WHERE id_mutasi = '$id_mutasi'";
                $result = $koneksi->query($query);

                // Periksa apakah data ditemukan
                if ($result->num_rows > 0) {
                    $data = $result->fetch_assoc();
            ?>
                    <!-- Formulir Edit -->
                    <form action="" method="post">
                        <input type="hidden" name="id_mutasi" value="<?= $data['id_mutasi']; ?>">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">NIK </label>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" name="nik" value="<?= $data['nik']; ?>" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Umat </label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="nama_umat" value="<?= $data['nama_umat']; ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Asal lingkungan </label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="asal_lingkungan" value="<?= $data['asal_lingkungan']; ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">KUB </label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="kub" value="<?= $data['kub']; ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Provinsi </label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="provinsi" value="<?= $data['provinsi']; ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kabupaten </label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="kabupaten" value="<?= $data['kabupaten']; ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kecamatan </label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="kecamatan" value="<?= $data['kecamatan']; ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kelurahan </label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="kelurahan" value="<?= $data['kelurahan']; ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alasan </label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" name="alasan" required><?= $data['alasan']; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal Keluar </label>
                                <div class="col-sm-6">
                                    <input type="date" class="form-control" name="tanggal" value="<?= $data['tanggal']; ?>" required>
                                </div>
                            </div>

                            <div class="card-footer">
                                <input type="submit" name="update" value="Simpan" class="btn btn-info">
                                <a href="?page=data-mutasi" title="Kembali" class="btn btn-secondary">Batal</a>
                            </div>
                        </div>

                    </form>
            <?php
                } else {
                    echo "Data tidak ditemukan.";
                }
            }
            ?>
        </div>
    </div>
</div>



<?php

// Proses Update
if (isset($_POST['update'])) {
    // Ambil data dari formulir
    $id_mutasi = $_POST['id_mutasi'];
    $nik = $_POST['nik'];
    $nama_umat = $_POST['nama_umat'];
    $asal_lingkungan = $_POST['asal_lingkungan'];
    $kub = $_POST['kub'];
    $provinsi = $_POST['provinsi'];
    $kabupaten = $_POST['kabupaten'];
    $kecamatan = $_POST['kecamatan'];
    $kelurahan = $_POST['kelurahan'];
    $alasan = $_POST['alasan'];
    $tanggal = $_POST['tanggal'];

    // Query untuk melakukan update data
    $update_query = "UPDATE tb_mutasi_keluar SET
nik = '$nik',
nama_umat = '$nama_umat',
asal_lingkungan = '$asal_lingkungan',
kub = '$kub',
provinsi = '$provinsi',
kabupaten = '$kabupaten',
kecamatan = '$kecamatan',
kelurahan = '$kelurahan',
alasan = '$alasan',
tanggal = '$tanggal'
WHERE id_mutasi = '$id_mutasi'";

    // Eksekusi query update
    $update_result = $koneksi->query($update_query);

    if ($update_result) {
        echo "<script>
    Swal.fire({
        title: 'Update Data Berhasil',
        text: '',
        icon: 'success',
        confirmButtonText: 'OK'
    }).then((result) => {
        if (result.value) {
            window.location = 'index.php?page=data-mutasi';
        }
    })
</script>";
    } else {
        echo "<script>
    Swal.fire({
        title: 'Update Data Gagal',
        text: '',
        icon: 'error',
        confirmButtonText: 'OK'
    }).then((result) => {
        if (result.value) {
            window.location = 'index.php?page=data-mutasi';
        }
    })
</script>";
    }
}
?>
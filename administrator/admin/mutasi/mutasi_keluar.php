<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Form Mutasi Keluar
        </h3>
    </div>
    <div class="row">
        <div class="col">

            <form action="" method="post">
                <div class="card-body">

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">NIK </label>
                        <div class="col-sm-6">
                            <input type="number" class="form-control" id="nik" name="nik" placeholder="Nomor Induk Kependudukan" required>
                        </div>
                        <!-- button search  -->
                        <div class="form-group row">
                            <div class="col-sm-6 offset-sm-2">
                                <button type="button" class="btn btn-primary" onclick="searchByName()">Cari</button>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nama" name="nama_umat" placeholder="Nama" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">lingkungan Asal</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="lingkungan" name="asal_lingkungan" placeholder="lingkungan" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">KUB </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="kub" name="kub" placeholder="kub" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Provinsi </label>
                        <div class="col-sm-6">
                            <select class="form-control" name="provinsi" id="" required>
                                <option disabled selected> -- Provinsi -- </option>
                                <?php
                                // ambil data dari database
                                $query = "SELECT * from tb_pengaturan";
                                $hasil = mysqli_query($koneksi, $query);
                                while ($row = mysqli_fetch_array($hasil)) {
                                ?>
                                    <option value="<?= $row['provinsi_gereja'] ?>">
                                        <?= $row['provinsi_gereja'] ?>
                                    </option>
                                <?php
                                }
                                ?>
                            </select>
                            <!-- <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="provinsi" required> -->
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Kabupaten </label>
                        <div class="col-sm-6">
                            <select class="form-control" name="kabupaten" id="" required>
                                <option disabled selected> -- Kabupaten -- </option>
                                <?php
                                // ambil data dari database
                                $query = "SELECT * from tb_pengaturan";
                                $hasil = mysqli_query($koneksi, $query);
                                while ($row = mysqli_fetch_array($hasil)) {
                                ?>
                                    <option value="<?= $row['kabupaten_gereja'] ?>">
                                        <?= $row['kabupaten_gereja'] ?>
                                    </option>
                                <?php
                                }
                                ?>
                            </select>
                            <!-- <input type="text" class="form-control" id="kabupaten" name="kabupaten" placeholder="kabupaten" required> -->
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">kecamatan </label>
                        <div class="col-sm-6">
                            <select class="form-control" name="kecamatan" id="" required>
                                <option disabled selected> -- Kecamatan -- </option>
                                <?php
                                // ambil data dari database
                                $query = "SELECT * from tb_pengaturan";
                                $hasil = mysqli_query($koneksi, $query);
                                while ($row = mysqli_fetch_array($hasil)) {
                                ?>
                                    <option value="<?= $row['kecamatan_gereja'] ?>">
                                        <?= $row['kecamatan_gereja'] ?>
                                    </option>
                                <?php
                                }
                                ?>
                            </select>
                            <!-- <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="kecamatan" required> -->
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Kelurahan </label>
                        <div class="col-sm-6">
                            <select class="form-control" name="kelurahan" id="" required>
                                <option disabled selected> -- Kelurahan -- </option>
                                <?php
                                // ambil data dari database
                                $query = "SELECT * from tb_pengaturan";
                                $hasil = mysqli_query($koneksi, $query);
                                while ($row = mysqli_fetch_array($hasil)) {
                                ?>
                                    <option value="<?= $row['kelurahan_gereja'] ?>">
                                        <?= $row['kelurahan_gereja'] ?>
                                    </option>
                                <?php
                                }
                                ?>
                            </select>
                            <!-- <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="kecamatan" required> -->
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Alasan Keluar </label>
                        <div class="col-sm-6">
                            <textarea type="text" class="form-control" id="alasan" name="alasan" placeholder="Alasan Mutasi" required></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tanggal Keluar</label>
                        <div class="col-sm-6">
                            <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="tanggal" required>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
                    <a href="?page=data-mutasi" title="Kembali" class="btn btn-secondary">Batal</a>
                </div>
            </form>

        </div>
        <!-- <div class="col-md-4 mt-4">
            <h1>Clock</h1>
            <h3 id="jam"></h3>
        </div> -->
    </div>
</div>


<?php
// if (isset($_POST['Simpan'])) {
//     $nik = $_POST["nik"];
//     $namaUmat = $_POST["nama_umat"];
//     $asalLingkungan = $_POST["asal_lingkungan"];
//     $kub = $_POST["kub"];
//     $provinsi = $_POST["provinsi"];
//     $kabupaten = $_POST["kabupaten"];
//     $kecamatan = $_POST["kecamatan"];
//     $kelurahan = $_POST["kelurahan"];
//     $alasan = $_POST["alasan"];
//     $tanggalKeluar = $_POST["tanggal"];

//     // Periksa koneksi
//     $koneksi = mysqli_connect("localhost", "root", "", "sigereja");
//     if (!$koneksi) {
//         die("Connection failed: " . mysqli_connect_error());
//     }

//     // Lakukan query untuk menyisipkan data ke dalam tabel
//     $query = "INSERT INTO tb_mutasi_keluar (nik, nama_umat, asal_lingkungan, kub, provinsi, kabupaten, kecamatan,kelurahan, alasan, tanggal)
//               VALUES ('$nik', '$namaUmat', '$asalLingkungan', '$kub', '$provinsi', '$kabupaten', '$kecamatan','$kelurahan', '$alasan', '$tanggalKeluar')";


//     // Eksekusi query
//     $save = mysqli_query($koneksi, $query);

//     // Periksa apakah query berhasil dijalankan
//     if ($save) {
//         echo "<script>
//                 Swal.fire({
//                     title: 'Tambah Data Berhasil',
//                     text: '',
//                     icon: 'success',
//                     confirmButtonText: 'OK'
//                 }).then((result) => {
//                     if (result.value){
//                         window.location = 'index.php?page=data-mutasi';
//                     }
//                 })
//             </script>";
//         // Lakukan operasi hapus dari tb_umat berdasarkan nik
//         $hapusQuery = "DELETE FROM tb_umat WHERE nik = '$nik'";
//         $hapusResult = mysqli_query($koneksi, $hapusQuery);

//         if ($hapusResult) {
//             $response['hapus_success'] = true;
//         } else {
//             $response['hapus_success'] = false;
//         }
//     } else {
//         // echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
//         echo "<script>
//                 Swal.fire({
//                     title: 'Tambah Data Gagal',
//                     text: '',
//                     icon: 'error',
//                     confirmButtonText: 'OK'
//                 }).then((result) => {
//                     if (result.value){
//                         window.location = 'index.php?page=mutasi-keluar';
//                     }
//                 })
//             </script>";
//     }
// }

if (isset($_POST['Simpan'])) {
    $nik = $_POST["nik"];
    $namaUmat = $_POST["nama_umat"];
    $asalLingkungan = $_POST["asal_lingkungan"];
    $kub = $_POST["kub"];
    $provinsi = $_POST["provinsi"];
    $kabupaten = $_POST["kabupaten"];
    $kecamatan = $_POST["kecamatan"];
    $kelurahan = $_POST["kelurahan"];
    $alasan = $_POST["alasan"];
    $tanggalKeluar = $_POST["tanggal"];

    // Periksa koneksi
    $koneksi = mysqli_connect("localhost", "root", "", "sigereja");
    if (!$koneksi) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Lakukan query untuk menyisipkan data ke dalam tabel
    $query = "INSERT INTO tb_mutasi_keluar (nik, nama_umat, asal_lingkungan, kub, provinsi, kabupaten, kecamatan,kelurahan, alasan, tanggal)
              VALUES ('$nik', '$namaUmat', '$asalLingkungan', '$kub', '$provinsi', '$kabupaten', '$kecamatan','$kelurahan', '$alasan', '$tanggalKeluar')";

    // Eksekusi query
    $save = mysqli_query(
        $koneksi,
        $query
    );

    // Periksa apakah query berhasil dijalankan
    if ($save) {
        // Lakukan operasi hapus dari tb_umat berdasarkan nik
        $hapusQuery = "DELETE FROM tb_umat WHERE nik = '$nik'";
        $hapusResult = mysqli_query($koneksi, $hapusQuery);

        if ($hapusResult) {
            $response['hapus_success'] = true;
            echo "<script>
                Swal.fire({
                    title: 'Tambah Data Berhasil',
                    text: '',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value){
                        window.location = 'index.php?page=data-mutasi';
                    }
                })
            </script>";
        } else {
            $response['hapus_success'] = false;
            echo "<script>
                Swal.fire({
                    title: 'Hapus Data Gagal',
                    text: '',
                    icon: 'error',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value){
                        window.location = 'index.php?page=mutasi-keluar';
                    }
                })
            </script>";
        }
    } else {
        // echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
        echo "<script>
            Swal.fire({
                title: 'Tambah Data Gagal',
                text: '',
                icon: 'error',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.value){
                    window.location = 'index.php?page=mutasi-keluar';
                }
            })
        </script>";
    }
}





?>
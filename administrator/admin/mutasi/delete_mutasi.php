<?php
if (isset($_GET['kode'])) {
    $sql = "DELETE FROM tb_mutasi_keluar WHERE id_mutasi='" . $_GET['kode'] . "'";
    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        echo "<script>
                Swal.fire({title: 'Hapus Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        window.location = 'index.php?page=data-mutasi';
                    }
                })</script>";
    } else {
        echo "<script>
                Swal.fire({title: 'Hapus Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        window.location = 'index.php?page=data-mutasi';
                    }
                })</script>";
    }
}

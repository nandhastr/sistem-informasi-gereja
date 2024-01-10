<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Form Edit Data Kategori
        </h3>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="card-body">

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama kategori</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nama_kategori" placeholder="Nama kategori" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Pilih ketua kategori</label>
                <div class="col-sm-6">
                    <select class="form-control" name="ketua_kategori" id="" required>
                        <option disabled selected>-- Pilih Ketua Kategori --</option>
                        <option value="">nama 1</option>
                        <option value="">nama 2</option>
                        <option value="">nama 3</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Pilih wakil ketua kategori</label>
                <div class="col-sm-6">
                    <select class="form-control" name="wakil_kategori" id="" required>
                        <option disabled selected>-- Pilih wakil Ketua Kategori --</option>
                        <option value="">nama 1</option>
                        <option value="">nama 2</option>
                        <option value="">nama 3</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">jumlah KK</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" name="jumlah_kk" placeholder="jumlah KK" required>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
            <a href="?page=data-kategori" title="Kembali" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>

<?php

if (isset($_POST['Simpan'])) {
    //mulai proses simpan data
    $sql_simpan = "INSERT INTO tb_kub (nama_kub, id_lingkungan, ketua, sekretaris, bendahara, jumlah_kk) VALUES (
            '" . $_POST['nama_kub'] . "',
             '" . $_POST['id_lingkungan'] . "',
			'" . $_POST['ketua'] . "',
			'" . $_POST['sekretaris'] . "',
			'" . $_POST['bendahara'] . "',
			'" . $_POST['jumlah_kk'] . "')";
    $query_simpan = mysqli_query($koneksi, $sql_simpan);
    mysqli_close($koneksi);

    if ($query_simpan) {
        echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-kub';
          }
      })</script>";
    } else {
        echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-kub';
          }
      })</script>";
    }
}
     //selesai proses simpan data

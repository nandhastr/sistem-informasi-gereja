<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-table"></i> Data Mutasi Keluar
        </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div>
            <a href="?page=data-umat" class="btn btn-warning">
                <i class="fa fa-book"></i> Tambah Mutasi</a>
        </div>
    </div>
    <div class="table-responsive">
        <br>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama Umat</th>
                    <th>Asal Lingkungan </th>
                    <th>KUB</th>
                    <th>Alamat</th>
                    <th>alasan</th>
                    <th>Tanggal Mutasi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $sql = $koneksi->query("SELECT * from tb_mutasi_keluar");
                while ($data = $sql->fetch_assoc()) {
                    // var_dump($data);

                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $data['nik']; ?></td>
                        <td><?= $data['nama_umat']; ?></td>

                        <td><?= $data['asal_lingkungan']; ?></td>
                        <td><?= $data['kub']; ?></td>
                        <td><?= 'Prov. ' . $data['provinsi'] . ', ' . ' kab. ' . $data['kabupaten'] . ', ' . ' kec. ' . $data['kecamatan'] . ', ' . ' kel. ' . $data['kelurahan']; ?></td>
                        <td><?= $data['alasan']; ?></td>
                        <td><?= date('d-m-Y', strtotime($data['tanggal'])); ?></td>
                        <td>
                            <a href="?page=edit-mutasi&kode=<?php echo $data['id_mutasi']; ?>" title="Ubah" class="btn btn-success btn-sm">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="?page=delete-mutasi&kode=<?php echo $data['id_mutasi']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- /.card-body -->
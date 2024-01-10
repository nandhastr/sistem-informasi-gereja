<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-file"></i> Cetak Mutasi Masuk dan Keluar Umat
        </h3>
    </div>
</div>

<div class="row">
    <div class="col border mr-2">
        <form action="./report/cetak_mutasi_In_out.php" method="post">
            <center><label class="text-center">Mutasi Masuk dan Keluar</label></center>

            <div class="card-body">
                <div class="form-group row">
                    <div class="col">
                        <h6 for="tanggal">Pilih tanggal </h6>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col">
                                <small> Jam masuk</small>
                                <input type="time" class="form-control" name="jam_masuk" placeholder="Pilih jam Masuk" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col">
                                <small> Jam keluar</small>
                                <input type="time" class="form-control" name="jam_keluar" placeholder="Pilih jam keluar" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <input type="submit" name="Cetak" value="Cetak" class="btn btn-info"></input>
            </div>
        </form>
    </div>
</div>
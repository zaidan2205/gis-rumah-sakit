<div class="col-lg-7">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Lokasi Rumah Sakit 
        </div>
        <div class="panel-body">
            <?= $map['html']; ?>
        </div>
    </div>
</div>

<div class="col-lg-5">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Input Data Rumah Sakit 
        </div>
        <div class="panel-body">
            <!--Form Input Data-->
            <?php echo form_open('rumkit/input'); ?>

            <div class="form-group">
                <label>Nama Rumah Sakit</label>
                <input class="form-control" name="nama_rumkit" placeholder="Masukkan Nama Rumah Sakit" required>
             </div>

             <div class="form-group">
                <label>Nomor Telpon Rumah Sakit</label>
                <input class="form-control" name="no_telpon" placeholder="Masukkan Nomor Telpon Rumah Sakit" required>
             </div>

             <div class="form-group">
                <label>Alamat Rumah Sakit</label>
                <input class="form-control" name="alamat" placeholder="Masukkan Alamat Rumah Sakit" required>
             </div>

             <div class="form-group">
                <label>Latitude</label>
                <input class="form-control" name="latitude" placeholder="Masukkan Latitude Rumah Sakit" required readonly>
             </div>

             <div class="form-group">
                <label>Longitude</label>
                <input class="form-control" name="longitude" placeholder="Masukkan Longitude Rumah Sakit" required readonly>
             </div>

             <div class="form-group">
                <label>Deskripsi Rumah Sakit</label>
                <textarea class="form-control" name="deskripsi" cols="50" placeholder="Masukkan Deskripsi Rumah Sakit" required></textarea>
             </div>

             <div class="form-group">
                <center>
                    <button class="btn btn-success btn-sm">Simpan</button>
                    <button class="btn btn-warning btn-sm">Reset</button>
                </center>
             </div>

            <?php echo form_close(); ?>
            <!--End Form Input Data-->
        </div>
    </div>
</div>
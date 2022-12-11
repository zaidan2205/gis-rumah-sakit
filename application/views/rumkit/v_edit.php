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
            Edit Data Rumah Sakit 
        </div>
        <div class="panel-body">
            <!--Form Edit Data-->
            <?php echo form_open('rumkit/edit/'.$rumkit->id_rumkit); ?>

            <div class="form-group">
                <label>Nama Rumah Sakit</label>
                <input class="form-control" value="<?= $rumkit->nama_rumkit ?>"; name="nama_rumkit" required>
             </div>

             <div class="form-group">
                <label>Nomor Telpon Rumah Sakit</label>
                <input class="form-control" name="no_telpon" value="<?= $rumkit->no_telpon ?>"; required>
             </div>

             <div class="form-group">
                <label>Alamat Rumah Sakit</label>
                <input class="form-control" name="alamat" value="<?= $rumkit->alamat ?>"; required>
             </div>

             <div class="form-group">
                <label>Latitude</label>
                <input class="form-control" name="latitude" value="<?= $rumkit->latitude ?>"; required readonly>
             </div>

             <div class="form-group">
                <label>Longitude</label>
                <input class="form-control" name="longitude" value="<?= $rumkit->longitude ?>"; required readonly>
             </div>

             <div class="form-group">
                <label>Deskripsi Rumah Sakit</label>
                <textarea class="form-control" name="deskripsi" cols="50" required><?= $rumkit->deskripsi ?></textarea>
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
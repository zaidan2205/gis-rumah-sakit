<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <?= $title ?>
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <?php if ($this->session->userdata('username')<>"") { ?>
            <a href="<?= base_url('rumkit/input') ?>" class='btn btn-primary btn-sm'><i class='fa fa-plus'></i>  Input Data</a>
            <?php } ?>
            <div><br></div>
            <!--
            <?php
                if ($this->session->flashdata('pesan')) {
                    echo '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                    echo $this->session->flashdata('pesan');
                    echo '<a href="#" class="alert-link"></a>.</div>';
                    
                }
            ?>
            -->
        
            <div class="table-responsive">  
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Rumah Sakit</th>
                            <th>Alamat</th>
                            <th>No Telpon</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <?php if ($this->session->userdata('username')<>"") { ?>
                            <th>Action</th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $num=1; foreach ($rumkit as $key => $value) { ?>
                        <tr>
                            <td align='center'><?= $num++; ?></td>
                            <td><?= $value->nama_rumkit ?></td>
                            <td><?= $value->alamat ?></td>
                            <td><?= $value->no_telpon ?></td>
                            <td><?= $value->latitude ?></td>
                            <td><?= $value->longitude ?></td>
                            <?php if ($this->session->userdata('username')<>"") { ?>
                            <td>
                                <a href="<?= base_url('rumkit/edit/'.$value->id_rumkit); ?>" class='btn btn-success btn-sm'><i class='fa fa-pencil'></i>  Edit</a>
                                <a href="<?= base_url('rumkit/delete/'.$value->id_rumkit); ?>" class='btn btn-danger btn-sm' onclick="return confirm('Apakah Ingin Hapus Data?')"><i class='fa fa-trash'></i>  Delete</a>
                            </td>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</siv>
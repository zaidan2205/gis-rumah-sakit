<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <?= $title ?>
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
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
                            <th>Nama User</th>
                            <th>Username</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $num=1; foreach ($user as $key => $value) { ?>
                        <tr>
                            <td align='center'><?= $num++; ?></td>
                            <td><?= $value->nama_user ?></td>
                            <td><?= $value->username ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</siv>
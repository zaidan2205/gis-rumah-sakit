<div class='col-sm-4'></div>
<div class='col-sm-4'>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <?= $title ?>
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">

            <!--
            <?php
                if ($this->session->flashdata('pesan')) {
                    echo '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                    echo $this->session->flashdata('pesan');
                    echo '<a href="#" class="alert-link"></a>.</div>';
                    
                }
            ?>
            -->

            <?php echo form_open('user/login'); ?>
            <div class="form-group">
                <label>Username</label>
                <input class="form-control" name="username" placeholder="Masukkan Username" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required>
            </div>

            <div class="form-group">
                <center>
                    <button class="btn btn-primary btn-block">Login</button>
                </center>
             </div>




            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<div class='col-sm-4'></div>

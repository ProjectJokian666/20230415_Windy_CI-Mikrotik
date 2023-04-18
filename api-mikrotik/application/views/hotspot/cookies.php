<div class="content-wrapper mt 1">
    <div class="content-header">
        <div class="container-fluid">
            <center>
                <h3>Hotspot Users Cookies</h3>
            </center>
            <div class="card-body">
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-borderes" id="dataTable" width="100%" collspacing="0">
                            <thead>
                                <tr>
                                    <th><?= $totalhotspotcookies ?></th>
                                    <th>User</th>
                                    <th>Mac Address</th>
                                    <th>Expires-In</th>
                                    <th>Mac-Cookie</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($hotspotcookies as $data) { ?>
                                    <tr>
                                        <?php $id = str_replace('*','', $data['.id']) ?>
                                        <th><a href="<?= site_url('hotspot/delcookies/' . $id) ?>" onclick="return confirm('Apakah yakin akan hapus cookies user <?= $data['user']; ?> ?')"><i class="fa fa-trash" style="color:red"></i></a></th>
                                        <th><?= $data['user']; ?></th>
                                        <th><?= $data['mac-address']; ?></th>
                                        <th><?= $data['expires-in']; ?></th>
                                        <th><?= $data['mac-cookie']; ?></th>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
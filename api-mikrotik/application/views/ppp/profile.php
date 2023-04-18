<div class="content-wrapper mt 1">
    <div class="content-header">
        <div class="container-fluid">
            <center>
                <h3><?= $title; ?></h3>
            </center>
            <div class="card-body">
                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal-add-profile">
                    Add <?= $title; ?>
                </button>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-borderes" id="dataTable" width="100%" collspacing="0">
                            <thead>
                                <tr>
                                    <th><?= $totalprofile ?></th>
                                    <th>Name</th>
                                    <th>Local-Address</th>
                                    <th>Remote-Address</th>
                                    <th>Rate-Limit</th>
                                    <th>Parent-Queue</th>
                                    <th>On-Up</th>
                                    <th>On-Down</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($profile as $data) { ?>
                                    <tr>
                                        <?php $id = str_replace('*', '', $data['.id']) ?>
                                        <th>
                                            <!-- Delete -->
                                            <!-- <a href="<?= site_url('ppp/delSecret/' . $id) ?>" onclick="return confirm('Apakah yakin akan hapus PPP Profile <?= $data['name']; ?> ?')"><i class="fa fa-trash" style="color:red"></i></a> -->
                                            <!-- Edit -->
                                            <!-- <a href="#" id="edit" data-id=<?= $data['.id']; ?> data-name=<?= $data['name']; ?> data-password=<?= $data['password']; ?> data-service=<?= $data['service']; ?> data-profile=<?= $data['profile']; ?> data-comment=<?= $data['comment']; ?> data-localaddress=<?= $data['local-address']; ?> data-remoteaddress=<?= $data['remote-address']; ?> data-toggle="modal" data-target="#modal-edit" title="Edit"><i class="fa fa-edit" style="font-size:15px"></i></a> -->
                                            <!-- End Edit -->
                                        </th>
                                        <th><?= $data['name']; ?></th>
                                        <th><?= $data['local-address']; ?></th>
                                        <th><?= $data['remote-address']; ?></th>
                                        <th><?= $data['rate-limit']; ?></th>
                                        <th><?= $data['parent-queue']; ?></th>
                                        <th><?= $data['on-up']; ?></th>
                                        <th><?= $data['on-down']; ?></th>
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
<!-- <div class=" modal fade" id="modal-add-secret" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-secondary">
            <div class="modal-header">
                <h4 class="modal-title">Add <?= $title; ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="<?= site_url('ppp/addpppsecret') ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="user">User</label>
                        <input type="text" name="user" class="form-control" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="service">Service</label>
                        <select name="service" class="form-control" required>
                            <option>all</option>
                            <option value="">-Pilih-</option>
                            <option value="pppoe">pppoe</option>
                            <option value="l2tp">l2tp</option>
                            <option value="ovpn">opvn</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="profile">Profile</label>
                        <select name="profile" class="form-control">
                            <?php foreach ($profile as $data) { ?>
                                <option><?= $data['name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="localaddress">Local Address</label>
                        <input type="text" name="localaddress" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="remoteaddress">Remote Address</label>
                        <input type="text" name="remoteaddress" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="comment">Comment</label>
                        <input type="text" name="comment" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-light">Save</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div> -->
<!-- <div class=" modal fade" id="modal-edit" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-secondary">
            <div class="modal-header">
                <h4 class="modal-title">Edit <?= $title; ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="<?= site_url('ppp/editpppsecret') ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="user">User</label>
                        <input type="hidden" name="id" id="id">
                        <input type="text" name="user" class="form-control" id="user" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="service">Service</label>
                        <select name="service" id="service" class="form-control" required>
                            <option>all</option>
                            <option value="">-Pilih-</option>
                            <option value="pppoe">pppoe</option>
                            <option value="l2tp">l2tp</option>
                            <option value="ovpn">opvn</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="profile">Profile</label>
                        <select name="profile" id="profile" class="form-control">
                            <?php foreach ($profile as $data) { ?>
                                <option><?= $data['name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="localaddress">Local Address</label>
                        <input type="text" name="localaddress" class="form-control" id="localaddress" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="remoteaddress">Remote Address</label>
                        <input type="text" name="remoteaddress" class="form-control" id="remoteaddress" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="comment">Comment</label>
                        <input type="text" name="comment" class="form-control" id="comment" placeholder="">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-light">Save</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div> -->

<!-- <script>
    $(document).on('click', '#edit', function() {
        $('#id').val($(this).data('id'))
        $('#user').val($(this).data('name'))
        $('#password').val($(this).data('password'))
        $('#service').val($(this).data('service'))
        $('#profile').val($(this).data('profile'))
        $('#localaddress').val($(this).data('localaddress'))
        $('#remoteaddress').val($(this).data('remoteaddress'))
        $('#comment').val($(this).data('comment'))
    })
</script> -->
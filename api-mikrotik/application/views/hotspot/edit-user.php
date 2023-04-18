<div class="content-wrapper mt 1">
    <div class="content-header">
        <div class="container-fluid">
            <center>
                <h3>Form Edit Hotspot Users</h3>
            </center>
            <div class="col-lg-12">
                <form action="<?= site_url('hotspot/saveEditUser') ?>" method="POST">
                    <div class="card-modal-body">
                        <div class="form-group row">
                            <label for="id" class="col-sm-1 col-form-label">ID</label>
                            <div class="col-sm-10">
                                <input type="text" name="id" readonly class="form-control" autocomplete="off" value="<?= $user['.id'] ?>" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="user" class="col-sm-1 col-form-label">User</label>
                            <div class="col-sm-10">
                                <input type="text" name="user" class="form-control" autocomplete="off" value="<?php echo $user['name'] ?>" id="user" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-1 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="text" name="password" class="form-control" value="<?php echo $user['password'] ?>" id="password" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="server" class="col-sm-1 col-form-label">Server</label>
                            <div class="col-sm-10">
                                <select name="server" id="server" class="form-control">
                                    <option><?= $user['server'] ?></option>
                                    <?php foreach ($server as $data) { ?>
                                        <option><?= $data['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class=" form-group row">
                            <label for="profile" class="col-sm-1 col-form-label">Profile</label>
                            <div class="col-sm-10">
                                <select name="profile" id="profile" class="form-control">
                                    <option><?= $user['profile'] ?></option>
                                    <?php foreach ($profile as $data) { ?>
                                        <option><?= $data['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="timelimit" class="col-sm-1 col-form-label">Time Limit</label>
                            <div class="col-sm-10">
                                <input type="text" name="timelimit" class="form-control" value="<?php echo $user['limit-uptime'] ?>" id="timelimit" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="comment" class="col-sm-1 col-form-label">Comment</label>
                            <div class="col-sm-10">
                                <input type="number" name="comment" class="form-control" value="<?php echo $user['comment'] ?>" id="comment" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <!-- <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button> -->
                        <button type="submit" class="btn btn-outline-light">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
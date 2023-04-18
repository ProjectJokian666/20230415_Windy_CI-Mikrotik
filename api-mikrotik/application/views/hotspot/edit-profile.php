<div class="content-wrapper mt 1">
    <div class="content-header">
        <div class="container-fluid">
            <center>
                <h3>Form Edit Hotspot User Profile</h3>
            </center>
            <div class="col-lg-12">
                <form action="<?= site_url('hotspot/saveEditProfile') ?>" method="POST">
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
                            <label for="rate_limit" class="col-sm-1 col-form-label">Rate Limit</label>
                            <div class="col-sm-10">
                                <input type="text" name="rate_limit" class="form-control" autocomplete="off" value="<?php echo $user['rate-limit'] ?>" id="rate_limit" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="shared_user" class="col-sm-1 col-form-label">Shared Users</label>
                            <div class="col-sm-10">
                                <input type="number" name="shared_user" class="form-control" value="<?php echo $user['shared-users'] ?>" id="shared_user" placeholder="" required>
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
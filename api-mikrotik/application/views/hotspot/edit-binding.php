<div class="content-wrapper mt 1">
    <div class="content-header">
        <div class="container-fluid">
            <center>
                <h3>Form Edit Hotspot User Binding</h3>
            </center>
            <div class="col-lg-12">
                <form action="<?= site_url('hotspot/saveEditBinding') ?>" method="POST">
                    <div class="card-modal-body">
                        <div class="form-group row">
                            <label for="id" class="col-sm-1 col-form-label">ID</label>
                            <div class="col-sm-10">
                                <input type="text" name="id" readonly class="form-control" autocomplete="off" value="<?= $user['.id'] ?>" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mac-address" class="col-sm-1 col-form-label">Mac-Address</label>
                            <div class="col-sm-10">
                                <input type="text" name="mac-address" class="form-control" autocomplete="off" value="<?php echo $user['mac-address'] ?>" id="mac-address" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-sm-1 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <input type="text" name="address" class="form-control" autocomplete="off" value="<?php echo $user['address'] ?>" id="address" placeholder="" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="to-address" class="col-sm-1 col-form-label">To Address</label>
                            <div class="col-sm-10">
                                <input type="text" name="to-address" class="form-control" value="<?php echo $user['to-address'] ?>" id="to-address" placeholder="" >
                            </div>
                        </div>
                        <div class=" form-group row">
                            <label for="type" class="col-sm-1 col-form-label">Type</label>
                            <div class="col-sm-10">
                                <select name="type" id="type" class="form-control">
                                    <option><?= $user['type'] ?></option>
                                    <?php foreach ($type as $data) { ?>
                                        <option><?= $data['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="comment" class="col-sm-1 col-form-label">Comment</label>
                            <div class="col-sm-10">
                                <input type="text" name="comment" class="form-control" value="<?php echo $user['comment'] ?>" id="comment" placeholder="" required>
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
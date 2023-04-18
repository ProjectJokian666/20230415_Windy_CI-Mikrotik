<div class="content-wrapper mt 1">
    <div class="content-header">
        <div class="container-fluid">
            <center>
                <h3>Hotspot Users Binding</h3>
            </center>
            <div class="card-body">
                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal-add-binding">
                    Add Binding
                </button>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-borderes" id="dataTable" width="100%" collspacing="0">
                            <thead>
                                <tr>
                                    <th><?= $totalhotspotbinding ?></th>
                                    <th>Mac Address</th>
                                    <th>Address</th>
                                    <th>To Address</th>
                                    <th>Type</th>
                                    <th>Comment</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($hotspotbinding as $data) { ?>
                                    <tr>
                                        <?php $id = str_replace('*', '', $data['.id']) ?>
                                        <th>
                                            <a href="<?= site_url('hotspot/delBinding/' . $id) ?>" onclick="return confirm('Apakah yakin akan hapus Binding mac address <?= $data['mac-address']; ?> ?')"><i class="fa fa-trash" style="color:red"></i></a>
                                            <a href="<?= site_url('hotspot/editBinding/' . $id) ?>"><i class="fa fa-edit" class="btn btn-primary" "></i></a>
                                        </th>
                                        <th><?= $data['mac-address']; ?></th>
                                        <th><?= $data['address']; ?></th>
                                        <th><?= $data['to-address']; ?></th>
                                        <th><?= $data['type']; ?></th>
                                        <th><?= $data['comment']; ?></th>
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
<div class=" modal fade" id="modal-add-binding" style="display: none;" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content bg-secondary">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Add Hotspot Binding</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <form action="<?= site_url('hotspot/addBinding') ?>" method="POST">
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <label for="macaddress">Mac Address</label>
                                                                        <input type="text" name="macaddress" class="form-control" id="macaddress" placeholder="" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="address">Address</label>
                                                                        <input type="text" name="address" class="form-control" id="address" placeholder="">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="toaddress">To Address</label>
                                                                        <input type="text" name="toaddress" class="form-control" id="toaddress" placeholder="">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="type">Type</label>
                                                                        <select name="type" id="type" class="form-control">
                                                                            <option value="">-Pilih-</option>
                                                                            <option value="bypassed">Bypassed</option>
                                                                            <option value="blocked">Blocked</option>
                                                                            <option value="reguler">Reguler</option>
                                                                        </select>
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
                    </div>
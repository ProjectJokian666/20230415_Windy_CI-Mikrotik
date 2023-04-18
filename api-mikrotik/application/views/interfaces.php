<div class="content-wrapper mt 1">
    <div class="content-header">
        <div class="container-fluid">
            <center>
                <h3>Interfaces</h3>
            </center>
            <div class="card-body">
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-borderes" id="dataTable" width="100%" collspacing="0">
                            <thead>
                                <tr>
                                    <th><?= $totalinterface ?></th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Mac-Address</th>
                                    <th>Rx-Byte</th>
                                    <th>Tx-Byte</th>
                                    <th>Dynamic</th>
                                    <th>Running</th>
                                    <th>Disabled</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($interface as $data) { ?>
                                    <tr>
                                        <?php $id = str_replace('*', '', $data['.id']) ?>
                                        <th><?= $data['id']; ?></th>
                                        <th><?= $data['name']; ?></th>
                                        <th><?= $data['type']; ?></th>
                                        <th><?= $data['mac-address']; ?></th>
                                        <th><?= formatBytes($data['rx-byte'], 2); ?></th>
                                        <th><?= formatBytes($data['tx-byte'], 2); ?></th>
                                        <th><?= $data['dynamic']; ?></th>
                                        <th><?= $data['running']; ?></th>
                                        <th><?= $data['disabled']; ?></th>
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
<script>
    setInterval("reloadtraffic();", 1000);
</script>
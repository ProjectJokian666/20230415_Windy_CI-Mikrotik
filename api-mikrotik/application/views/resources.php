<div class="content-wrapper mt 1">
    <div class="content-header">
        <div class="container-fluid">
            <center>
                <h3>Resources</h3>
            </center>
            <div class="card-body">
            </div>
            <div class="row">
                <div class="callout callout-info col-7">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                <?php foreach ($resource as $data) { ?>
                                    <tr>
                                        <th style="width:50%">Uptime</th>
                                        <th>:</th>
                                        <th style="width:90%"><?= $data['uptime']; ?></th>
                                    </tr>
                                    <tr>
                                        <th style="width:50%">Version</th>
                                        <th>:</th>
                                        <th style="width:90%"><?= $data['version']; ?></th>
                                    </tr>
                                    <tr>
                                        <th style="width:50%">Build-time</th>
                                        <th>:</th>
                                        <th style="width:90%"><?= $data['build-time']; ?></th>
                                    </tr>
                                    <tr>
                                        <th style="width:50%">Free-Memory</th>
                                        <th>:</th>
                                        <th style="width:90%"><?= $data['free-memory']; ?></th>
                                    </tr>
                                    <tr>
                                        <th style="width:50%">Total-Memory</th>
                                        <th>:</th>
                                        <th style="width:90%"><?= $data['total-memory']; ?></th>
                                    </tr>
                                    <tr>
                                        <th style="width:50%">CPU</th>
                                        <th>:</th>
                                        <th style="width:90%"><?= $data['cpu']; ?></th>
                                    </tr>
                                    <tr>
                                        <th style="width:50%">CPU Count</th>
                                        <th>:</th>
                                        <th style="width:90%"><?= $data['cpu-count']; ?></th>
                                    </tr>
                                    <tr>
                                        <th style="width:50%">CPU-Frequency</th>
                                        <th>:</th>
                                        <th style="width:90%"><?= $data['cpu-frequency']; ?></th>
                                    </tr>
                                    <tr>
                                        <th style="width:50%">CPU-Load</th>
                                        <th>:</th>
                                        <th style="width:90%"><?= $data['cpu-load']; ?>%</th>
                                    </tr>
                                </span>
                                    <tr>
                                        <th style="width:50%">Free-HDD-Space</th>
                                        <th>:</th>
                                        <th style="width:90%"><?= $data['free-hdd-space']; ?></th>
                                    </tr>
                                    <tr>
                                        <th style="width:50%">Total-HDD-Space</th>
                                        <th>:</th>
                                        <th style="width:90%"><?= $data['total-hdd-space']; ?></th>
                                    </tr>
                                    <tr>
                                        <th style="width:50%">Write-Sect-Since-Reboot</th>
                                        <th>:</th>
                                        <th style="width:90%"><?= $data['write-sect-since-reboot']; ?></th>
                                    </tr>
                                    <tr>
                                        <th style="width:50%">Write-Sect-Total</th>
                                        <th>:</th>
                                        <th style="width:90%"><?= $data['write-sect-total']; ?></th>
                                    </tr>
                                    <tr>
                                        <th style="width:50%">Architecture-Name</th>
                                        <th>:</th>
                                        <th style="width:90%"><?= $data['architecture-name']; ?></th>
                                    </tr>
                                    <tr>
                                        <th style="width:50%">Board-Name</th>
                                        <th>:</th>
                                        <th style="width:90%"><?= $data['board-name']; ?></th>
                                    </tr>
                                </tbody>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
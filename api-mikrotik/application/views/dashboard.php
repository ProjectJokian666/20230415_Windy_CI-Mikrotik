<div class="content-wrapper mt1">
    <div class="content-header">
        <div class="content-fluid">
            <div>
                <center>
                    <h3>Dashboard</h3>
                </center>
            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <a href="<?= site_url('resources') ?>">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-clock"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Uptime</span>
                                <span class="info-box-number"><?= $uptime; ?></span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-3">
                    <a href="<?= site_url('resources') ?>">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">CPU</span>
                                <span class="info-box-number">
                                    <?= $cpu; ?>
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <a href="<?= site_url('resources') ?>">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">CPU Load</span>
                                <span class="info-box-number">
                                    <?= $cpuload; ?>
                                    <small>%</small>
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                    <!-- /.info-box -->
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-hdd"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total HDD</span>
                            <span class="info-box-number"><?= $totalhddspace; ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-hdd"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Free HDD</span>
                            <span class="info-box-number"><?= $freehddspace; ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-memory"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total Memory</span>
                            <span class="info-box-number"><?= $totalmemory; ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-memory"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Free Memory</span>
                            <span class="info-box-number"><?= $freememory; ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-clipboard"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Board Name</span>
                            <span class="info-box-number"><?= $boardname; ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <select name="interface" id="interface">
                <?php foreach ($interface as $interface) { ?>
                    <option value="<?= $interface['name'] ?>"><?= $interface['name'] ?></option>
                <?php } ?>
            </select>
            <div id="reloadtraffic"></div>
        </div>
    </div>
</div>

<script>
    setInterval('reloadtraffic();', 1000);

    function reloadtraffic() {
        var interface = $('#interface').val();
        console.log(interface);
        $('#reloadtraffic').load('<?= site_url('dashboard/traffic/') ?>' + interface);
    }
</script>
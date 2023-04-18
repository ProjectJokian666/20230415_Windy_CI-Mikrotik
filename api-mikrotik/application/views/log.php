<div class="content-wrapper mt 1">
    <div class="content-header">
        <div class="container-fluid">
            <center>
                <h3>Log</h3>
            </center>
            <div class="card-body">
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-borderes" id="dataTable" width="100%" collspacing="0">
                            <thead>
                                <tr>
                                    <th><?= $totallog ?></th>
                                    <!-- <th>#</th> -->
                                    <th>Times</th>
                                    <!-- <th>Buffer</th> -->
                                    <th>Topics</th>
                                    <th>Messages</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($log as $data) { ?>
                                    <tr>
                                        <?php $id = str_replace('*', '', $data['.id']) ?>
                                        <th></th>
                                        <!-- <th><?= $data['#']; ?></th> -->
                                        <th><?= $data['time']; ?></th>
                                        <!-- <th><?= $data['buffer']; ?></th> -->
                                        <th><?= $data['topics']; ?></th>
                                        <th><?= $data['message']; ?></th>
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
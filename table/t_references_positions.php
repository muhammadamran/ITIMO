<table id="dataTables" class="table table-striped table-bordered first">
    <thead>
        <tr style="text-align: center;">
            <th>#</th>
            <th>Business<font style="color:transparent">.</font>Unit<font style="color:transparent">.</font>&<font style="color:transparent">.</font>Functional</th>
            <th>Dept.<font style="color:transparent">.</font>&<font style="color:transparent">.</font>Positions<font style="color:transparent">.</font>&<font style="color:transparent">.</font>Code</th>
            <th>Desc.</th>
            <th class="no-sort">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $dataTable = $db->query("SELECT *,dp.id AS id_dp,bu.id AS id_bu,bu.bu_name,bu.bu_code 
                                 FROM references_positions AS dp
                                 LEFT OUTER JOIN references_bu AS bu ON bu.bu_name=dp.bu_name
                                 ORDER BY dp.id ASC", 0);
        if (mysqli_num_rows($dataTable) > 0) {
            $no = 0;
            while ($row = mysqli_fetch_array($dataTable)) {
                $no++;
        ?>
                <tr>
                    <td><?= $no ?>.</td>
                    <!-- Business Unit - KN Code & Functional Desc -->
                    <td>
                        <div style="display: flex;justify-content:flex-start;align-items: center;">
                            <div class="table-icon">
                                <i class="fas fa-info-circle"></i>
                            </div>
                            <div style="margin-left: 5px;">
                                <div style="font-size: 15px;font-weight: 500;">
                                    <?= $row['bu_name']; ?>
                                </div>
                                <div style="font-size: 12px;font-weight: 300;">
                                    <?= $row['bu_code']; ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <!-- Code - Dept. & Positions Name -->
                    <td>
                        <div style="display: flex;justify-content:flex-start;align-items: center;">
                            <div class="table-icon">
                                <i class="fas fa-info-circle"></i>
                            </div>
                            <div style="margin-left: 5px;">
                                <div style="font-size: 15px;font-weight: 500;">
                                    <?= $row['positions_name']; ?>
                                </div>
                                <div style="font-size: 12px;font-weight: 300;">
                                    <?= $row['positions_code']; ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <!-- Dept. & Positions Name Desc -->
                    <td>
                        <?php if ($row['positions_desc'] == NULL) { ?>
                            <font style="color: red;">-</font>
                        <?php } else { ?>
                            <?= $row['positions_desc']; ?>
                        <?php } ?>
                    </td>
                    <td>
                        <div style="display: flex;justify-content: center;align-items: center;">
                            <a href="#EditDeptPositions<?= $row['id_dp']; ?>" class="btn btn-sm btn-behind-green" data-toggle="modal" title="Edit Department" style="margin-left: 5px;">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a href="#DeleteDeptPositions<?= $row['id_dp']; ?>" class="btn btn-sm btn-behind-green" data-toggle="modal" title="Delete Department" style="margin-left: 5px;">
                                <i class="fas fa-trash"></i> Delete
                            </a>
                        </div>
                    </td>
                </tr>

                <!-- Edit -->
                <div class="modal fade" id="EditDeptPositions<?= $row['id_dp']; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">[Edit Data] Dept. & Positions</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form action="" method="POST">
                                <div class="modal-body">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="IdBusineesUnit">Business Unit & Functional</label>
                                                    <select class="form-control" data-live-search="true" name="NameBusineesUnit" id="EditIdBusineesUnit" placeholder="Business Unit & Functional ...">
                                                        <option value="<?= $row['bu_name']; ?>"><?= $row['bu_name']; ?></option>
                                                        <option value="">Choose Business Unit & Functional</option>
                                                        <?php
                                                        $dataBU = $db->query("SELECT * FROM references_bu ORDER BY id ASC");
                                                        foreach ($dataBU as $optionBU) {
                                                        ?>
                                                            <option value="<?= $optionBU['bu_name'] ?>"><?= $optionBU['bu_name'] ?></option>
                                                        <?php } ?>
                                                    </select>
                                                    <input type="hidden" name="ID" value="<?= $row['id_dp']; ?>" />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="IdDeptPositionsName">Dept. & Positions Name</label>
                                                    <input type="text" class="form-control" name="NameDeptPositionsName" id="IdDeptPositionsName" value="<?= $row['positions_name']; ?>" placeholder="Dept. & Positions Name ..." />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="IdDeptPositionsCode">Dept. & Positions Code</label>
                                                    <input type="text" class="form-control" name="NameDeptPositionsCode" id="IdDeptPositionsCode" value="<?= $row['positions_code']; ?>" placeholder="Dept. & Positions Code ..." />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="IdDeptPositionsDescritption">Dept. & Positions Descritption</label>
                                                    <input type="text" class="form-control" name="NameDeptPositionsDescritption" id="IdDeptPositionsDescritption" value="<?= $row['positions_desc']; ?>" placeholder="Dept. & Positions Descritption ..." />
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="modal-footer">
                                    <a href="javascript:;" class="btn btn-light" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</a>
                                    <button type="submit" name="edit_positions" class="btn btn-behind-green"><i class="fas fa-save"></i> Edit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Edit -->

                <!-- Delete -->
                <div class="modal fade" id="DeleteDeptPositions<?= $row['id_dp']; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">[Delete Data] Dept. & Positions</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form action="" method="POST">
                                <div class="modal-body">
                                    <fieldset>
                                        <div class="list-group">
                                            <a href="#" class="behind-list-group-item list-group-item-action flex-column align-items-start active">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h5 class="mb-1 text-white">Warning!</h5>
                                                    <small><?= date('d F Y') ?></small>
                                                </div>
                                                <p class="mb-1">Are you sure you want to delete this data?, please click <b>Yes</b> if you want to delete this data from the system?</p>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h5 class="mb-1">Data details to be deleted below:</h5>
                                                </div>
                                                <p class="mb-1" style="display: grid;">
                                                    <font><b>ID</b>: <?= $row['id']; ?></font>
                                                    <font><b>Business Unit & Functional</b>: <?= $row['bu_name']; ?></font>
                                                    <font><b>Dept. & Positions Name</b>: <?= $row['positions_name']; ?></font>
                                                    <font><b>Code</b>: <?= $row['positions_code']; ?></font>
                                                    <font><b>Desc.</b>: <?= $row['positions_desc']; ?></font>
                                                    <input type="hidden" name="ID" value="<?= $row['id_dp']; ?>" />
                                                </p>
                                            </a>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="modal-footer">
                                    <a href="javascript:;" class="btn btn-white" data-dismiss="modal"><i class="fas fa-times-circle"></i> No</a>
                                    <button type="submit" name="delete_positions" class="btn btn-danger"><i class="fas fa-check-circle"></i> Yes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Delete -->
            <?php } ?>
        <?php } else { ?>
            <tr>
                <td colspan="7">
                    <center>
                        <div style="display: grid;">
                            <i class="far fa-times-circle no-data"></i> Data not found
                        </div>
                    </center>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
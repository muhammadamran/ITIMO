<table id="dataTables" class="table table-striped table-bordered first">
    <thead>
        <tr style="text-align: center;">
            <th>#</th>
            <th>Business<font style="color:transparent">.</font>Unit (KN Code)<font style="color:transparent">.</font>&<font style="color:transparent">.</font>Functional<font style="color:transparent">.</font>Desc.</th>
            <th>Under</th>
            <th class="no-sort">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $dataTable = $db->query("SELECT * FROM references_bu ORDER BY id ASC", 0);
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
                                    <?= $row['bu_name']; ?> - <?= $row['bu_code']; ?>
                                </div>
                                <div style="font-size: 12px;font-weight: 300;">
                                    <?= $row['bu_desc']; ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <!-- Under -->
                    <td><?= $row['under']; ?></td>
                    <!-- Action -->
                    <td>
                        <div style="display: flex;justify-content: center;align-items: center;">
                            <a href="#EditBU<?= $row['id']; ?>" class="btn btn-sm btn-behind-green" data-toggle="modal" title="Edit Functional" style="margin-left: 5px;">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a href="#DeleteBU<?= $row['id']; ?>" class="btn btn-sm btn-behind-green" data-toggle="modal" title="Delete Functional" style="margin-left: 5px;">
                                <i class="fas fa-trash"></i> Delete
                            </a>
                        </div>
                    </td>
                </tr>

                <!-- Edit -->
                <div class="modal fade" id="EditBU<?= $row['id']; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">[Edit Data] Business Unit & Functional</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form action="" method="POST">
                                <div class="modal-body">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="IdBusinessUnitName">Business Unit & Functional Name </label>
                                                    <input type="text" class="form-control" name="NameBusinessUnitName" id="IdBusinessUnitName" value="<?= $row['bu_name']; ?>" placeholder="Business Unit & Functional Name ..." />
                                                    <input type="hidden" name="ID" value="<?= $row['id']; ?>" />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="IdBusinessUnitCode">Business Unit & Functional Code </label>
                                                    <input type="text" class="form-control" name="NameBusinessUnitCode" id="IdBusinessUnitCode" value="<?= $row['bu_code']; ?>" placeholder="Business Unit & Functional Code ..." />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="IdBusinessUnitDesc">Business Unit & Functional Desc </label>
                                                    <input type="text" class="form-control" name="NameBusinessUnitDesc" id="IdBusinessUnitDesc" value="<?= $row['bu_desc']; ?>" placeholder="Business Unit & Functional Desc ..." />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="IdUnder">Under </label>
                                                    <select type="text" class="form-control" name="NameUnder" id="IdUnder">
                                                        <option value="<?= $row['under']; ?>"><?= $row['under']; ?></option>
                                                        <option value="">Choose Under</option>
                                                        <option value="PT. Kuehne Nagel Indonesia">PT. Kuehne Nagel Indonesia</option>
                                                        <option value="Naku Logistics Indonesia">Naku Logistics Indonesia</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="modal-footer">
                                    <a href="javascript:;" class="btn btn-light" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</a>
                                    <button type="submit" name="edit_bu" class="btn btn-behind-green"><i class="fas fa-save"></i> Edit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Edit -->

                <!-- Delete -->
                <div class="modal fade" id="DeleteBU<?= $row['id']; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">[Delete Data] Business Unit & Functional</h4>
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
                                                    <font><b>Business Unit & Functional Name</b>: <?= $row['bu_name']; ?></font>
                                                    <font><b>Business Unit & Functional Code</b>: <?= $row['bu_code']; ?></font>
                                                    <font><b>Business Unit & Functional Desc</b>: <?= $row['bu_desc']; ?></font>
                                                    <font><b>Under</b>: <?= $row['under']; ?></font>
                                                    <input type="hidden" name="ID" value="<?= $row['id']; ?>" />
                                                </p>
                                            </a>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="modal-footer">
                                    <a href="javascript:;" class="btn btn-white" data-dismiss="modal"><i class="fas fa-times-circle"></i> No</a>
                                    <button type="submit" name="delete_bu" class="btn btn-danger"><i class="fas fa-check-circle"></i> Yes</button>
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
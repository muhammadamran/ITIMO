<table id="dataTables" class="table table-striped table-bordered first">
    <thead>
        <tr style="text-align: center;">
            <th>#</th>
            <th>Department<font style="color:transparent">.</font>Name</th>
            <th>Department<font style="color:transparent">.</font>Desc.</th>
            <th>General<font style="color:transparent">.</font>Manager</th>
            <th>PT</th>
            <th class="no-sort">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $dataTable = $db->query("SELECT * FROM references_department ORDER BY id ASC LIMIT 100", 0);
        if (mysqli_num_rows($dataTable) > 0) {
            $no = 0;
            while ($row = mysqli_fetch_array($dataTable)) {
                $no++;
        ?>
                <tr>
                    <td><?= $no ?>.</td>
                    <td><?= $row['department_name']; ?></td>
                    <td><?= $row['desc_department']; ?></td>
                    <td><?= $row['gm_department']; ?></td>
                    <td><?= $row['pt']; ?></td>
                    <td>
                        <div style="display: flex;justify-content: center;align-items: center;">
                            <a href="#EditDepartment<?= $row['id']; ?>" class="btn btn-sm btn-behind-green" data-toggle="modal" title="Edit Department" style="margin-left: 5px;">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a href="#DeleteDepartment<?= $row['id']; ?>" class="btn btn-sm btn-behind-green" data-toggle="modal" title="Delete Department" style="margin-left: 5px;">
                                <i class="fas fa-trash"></i> Delete
                            </a>
                        </div>
                    </td>
                </tr>

                <!-- Edit -->
                <div class="modal fade" id="EditDepartment<?= $row['id']; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">[Edit Data] Department</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form action="" method="POST">
                                <div class="modal-body">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="IdDepartment">Department</label>
                                                    <input type="text" class="form-control" name="NameDepartment" id="IdDepartment" value="<?= $row['department_name']; ?>" placeholder="Department ..." />
                                                    <input type="hidden" name="ID" value="<?= $row['id']; ?>" />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="IdDepartmentDescritption">Department Descritption</label>
                                                    <input type="text" class="form-control" name="NameDepartmentDescritption" id="IdDepartmentDescritption" value="<?= $row['desc_department']; ?>" placeholder="Department Descritption ..." />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="IdGeneralManager">General Manager</label>
                                                    <input type="text" class="form-control" name="NameGeneralManager" id="IdGeneralManager" value="<?= $row['gm_department']; ?>" placeholder="General Manager ..." />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="IdPT">PT</label>
                                                    <select type="text" class="form-control" name="NamePT" id="IdPT">
                                                        <option value="<?= $row['pt']; ?>"><?= $row['pt']; ?></option>
                                                        <option value="">Choose PT</option>
                                                        <option value="PT. Kuehne Nagel Indonesia">PT. Kuehne Nagel Indonesia</option>
                                                        <option value="Naku Logistics Indonesia">Naku Logistics Indonesia</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="modal-footer">
                                    <a href="javascript:;" class="btn btn-white" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</a>
                                    <button type="submit" name="edit_department" class="btn btn-behind-green"><i class="fas fa-save"></i> Edit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Edit -->

                <!-- Delete -->
                <div class="modal fade" id="DeleteDepartment<?= $row['id']; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">[Delete Data] Department</h4>
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
                                                    <font><b>Department Name</b>: <?= $row['department_name']; ?></font>
                                                    <font><b>Department Description</b>: <?= $row['desc_department']; ?></font>
                                                    <font><b>General Manager</b>: <?= $row['gm_department']; ?></font>
                                                    <font><b>Company</b>: <?= $row['pt']; ?></font>
                                                    <input type="hidden" name="ID" value="<?= $row['id']; ?>" />
                                                </p>
                                            </a>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="modal-footer">
                                    <a href="javascript:;" class="btn btn-white" data-dismiss="modal"><i class="fas fa-times-circle"></i> No</a>
                                    <button type="submit" name="delete_department" class="btn btn-danger"><i class="fas fa-check-circle"></i> Yes</button>
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
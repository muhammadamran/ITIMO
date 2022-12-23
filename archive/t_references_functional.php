<table id="dataTables" class="table table-striped table-bordered first">
    <thead>
        <tr style="text-align: center;">
            <th>#</th>
            <th>Functional<font style="color:transparent">.</font>Code</th>
            <th>Functional<font style="color:transparent">.</font>Name</th>
            <th>Name</th>
            <th>Email</th>
            <th>Under</th>
            <th class="no-sort">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $dataTable = $db->query("SELECT * FROM references_functional ORDER BY id ASC LIMIT 100", 0);
        if (mysqli_num_rows($dataTable) > 0) {
            $no = 0;
            while ($row = mysqli_fetch_array($dataTable)) {
                $no++;
        ?>
                <tr>
                    <td><?= $no ?>.</td>
                    <td><?= $row['functional_code']; ?></td>
                    <td><?= $row['functional_name']; ?></td>
                    <td><?= $row['functional_person']; ?></td>
                    <td><?= $row['functional_person_email']; ?></td>
                    <td><?= $row['functional_under']; ?></td>
                    <td>
                        <div style="display: flex;justify-content: center;align-items: center;">
                            <a href="#EditFunctional<?= $row['id']; ?>" class="btn btn-sm btn-behind-green" data-toggle="modal" title="Edit Functional" style="margin-left: 5px;">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a href="#DeleteFunctional<?= $row['id']; ?>" class="btn btn-sm btn-behind-green" data-toggle="modal" title="Delete Functional" style="margin-left: 5px;">
                                <i class="fas fa-trash"></i> Delete
                            </a>
                        </div>
                    </td>
                </tr>

                <!-- Edit -->
                <div class="modal fade" id="EditFunctional<?= $row['id']; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">[Edit Data] Functional</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form action="" method="POST">
                                <div class="modal-body">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="IdFunctionalCode">Functional Code</label>
                                                    <input type="text" class="form-control" name="NameFunctionalCode" id="IdFunctionalCode" value="<?= $row['functional_code']; ?>" placeholder="Functional Code ..." />
                                                    <input type="hidden" name="ID" value="<?= $row['id']; ?>" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="IdFunctionalName">Functional Name</label>
                                                    <input type="text" class="form-control" name="NameFunctionalName" id="IdFunctionalName" value="<?= $row['functional_name']; ?>" placeholder="Functional Name ..." />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="IdUnder">Under</label>
                                                    <select type="text" class="form-control" name="NameUnder" id="IdUnder">
                                                        <option value="<?= $row['functional_under']; ?>"><?= $row['functional_under']; ?></option>
                                                        <option value="">Choose Under</option>
                                                        <option value="PT. Kuehne Nagel Indonesia">PT. Kuehne Nagel Indonesia</option>
                                                        <option value="Naku Logistics Indonesia">Naku Logistics Indonesia</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="IdName">Name</label>
                                                    <input type="text" class="form-control" name="Name" id="IdName" value="<?= $row['functional_person']; ?>" placeholder="Name ..." />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="IdEmail">Email</label>
                                                    <input type="email" class="form-control" name="Email" id="IdEmail" value="<?= $row['functional_person_email']; ?>" placeholder="Email ..." />
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="modal-footer">
                                    <a href="javascript:;" class="btn btn-white" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</a>
                                    <button type="submit" name="edit_functional" class="btn btn-behind-green"><i class="fas fa-save"></i> Edit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Edit -->

                <!-- Delete -->
                <div class="modal fade" id="DeleteFunctional<?= $row['id']; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">[Delete Data] Functional</h4>
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
                                                    <font><b>Functional Code</b>: <?= $row['functional_code']; ?></font>
                                                    <font><b>Functional Name</b>: <?= $row['functional_name']; ?></font>
                                                    <font><b>Under</b>: <?= $row['functional_under']; ?></font>
                                                    <font><b>Name</b>: <?= $row['functional_person']; ?></font>
                                                    <font><b>Email</b>: <?= $row['functional_person_email']; ?></font>
                                                    <input type="hidden" name="ID" value="<?= $row['id']; ?>" />
                                                </p>
                                            </a>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="modal-footer">
                                    <a href="javascript:;" class="btn btn-white" data-dismiss="modal"><i class="fas fa-times-circle"></i> No</a>
                                    <button type="submit" name="delete_functional" class="btn btn-danger"><i class="fas fa-check-circle"></i> Yes</button>
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
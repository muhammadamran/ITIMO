<table id="dataTables" class="table table-striped table-bordered first">
    <thead>
        <tr style="text-align: center;">
            <th>#</th>
            <th>UserID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Role</th>
            <th>Branch</th>
            <th>Email</th>
            <th class="no-sort">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $dataTable = $db->query("SELECT * FROM tb_user ORDER BY user_id ASC", 0);
        if (mysqli_num_rows($dataTable) > 0) {
            $no = 0;
            while ($row = mysqli_fetch_array($dataTable)) {
                $no++;
        ?>
                <tr>
                    <td><?= $no ?>.</td>
                    <td>IDUSR-<?= $row['user_id']; ?></td>
                    <td><?= $row['user_name']; ?></td>
                    <td><?= $row['user_pass']; ?></td>
                    <td><?= $row['user_role']; ?></td>
                    <td><?= $row['user_branch']; ?></td>
                    <td>
                        <?php if ($row['user_email'] == NULL) { ?>
                            <center>-</center>
                        <?php } else { ?>
                            <?= $row['user_email']; ?>
                        <?php } ?>
                    </td>
                    <td>
                        <?php if ($row['user_name'] == $_SESSION['username']) { ?>
                            <div style="display: flex;justify-content: center;align-items: center;">
                                <a href="#" class="btn btn-sm btn-behind-gray" title="Edit Users" style="margin-left: 5px;">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <a href="#" class="btn btn-sm btn-behind-gray" title="Delete Users" style="margin-left: 5px;">
                                    <i class="fas fa-trash"></i> Delete
                                </a>
                                <a href="#" class="btn btn-sm btn-behind-gray" title="Reset Password Users" style="margin-left: 5px;">
                                    <i class="fas fa-lock"></i> Reset Password
                                </a>
                            </div>
                        <?php } else { ?>
                            <div style="display: flex;justify-content: center;align-items: center;">
                                <a href="#EditUser<?= $row['user_id']; ?>" class="btn btn-sm btn-behind-green" data-toggle="modal" title="Edit Users" style="margin-left: 5px;">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <a href="#DeleteUser<?= $row['user_id']; ?>" class="btn btn-sm btn-behind-green" data-toggle="modal" title="Delete Users" style="margin-left: 5px;">
                                    <i class="fas fa-trash"></i> Delete
                                </a>
                                <a href="#ResetPasswordUser<?= $row['user_id']; ?>" class="btn btn-sm btn-behind-green" data-toggle="modal" title="Reset Password Users" style="margin-left: 5px;">
                                    <i class="fas fa-lock"></i> Reset Password
                                </a>
                            </div>
                        <?php } ?>
                    </td>
                </tr>

                <!-- Edit -->
                <div class="modal fade" id="EditUser<?= $row['user_id']; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">[Edit Data] Users</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form action="" method="POST">
                                <div class="modal-body">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="IdUsername">Username</label>
                                                    <input type="text" class="form-control" name="NameUsername" id="IdUsername" value="<?= $row['user_name']; ?>" placeholder="Username ..." readonly />
                                                    <input type="hidden" name="ID" value="<?= $row['user_id']; ?>" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="IdEmail">Email</label>
                                                    <input type="email" class="form-control" name="NameEmail" id="IdEmail" value="<?= $row['user_email']; ?>" placeholder="Email ..." required />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="IdRole">Role</label>
                                                    <select class="form-control" name="NameRole" id="IdRole" placeholder="Role ..." required>
                                                        <option value="<?= $row['user_role'] ?>"><?= $row['user_role'] ?></option>
                                                        <option value="">Choose Role</option>
                                                        <option value="Admin">Admin</option>
                                                        <option value="User">User</option>
                                                        <option value="HRGA">HRGA</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="modal-footer">
                                    <a href="javascript:;" class="btn btn-light" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</a>
                                    <button type="submit" name="edit_user" class="btn btn-behind-green"><i class="fas fa-save"></i> Edit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Edit -->

                <!-- Delete -->
                <div class="modal fade" id="DeleteUser<?= $row['user_id']; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">[Delete Data] Users</h4>
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
                                                    <font><b>ID</b>: <?= $row['user_id']; ?></font>
                                                    <font><b>Username</b>: <?= $row['user_name']; ?></font>
                                                    <font><b>Email</b>: <?= $row['user_email']; ?></font>
                                                    <font><b>Role</b>: <?= $row['user_role']; ?></font>
                                                    <input type="hidden" name="ID" value="<?= $row['user_id']; ?>" />
                                                </p>
                                            </a>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="modal-footer">
                                    <a href="javascript:;" class="btn btn-white" data-dismiss="modal"><i class="fas fa-times-circle"></i> No</a>
                                    <button type="submit" name="delete_user" class="btn btn-danger"><i class="fas fa-check-circle"></i> Yes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Delete -->

                <!-- Reset Password -->
                <div class="modal fade" id="ResetPasswordUser<?= $row['user_id']; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">[Reset Password] Users</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form action="" method="POST">
                                <div class="modal-body">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="IdUsername">Username</label>
                                                    <input type="text" class="form-control" name="NameUsername" id="IdUsername" value="<?= $row['user_name']; ?>" placeholder="Username ..." readonly />
                                                    <input type="hidden" name="ID" value="<?= $row['user_id']; ?>" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="IdPassword">Password</label>
                                                    <input type="password" class="form-control" name="NamePassword" id="IdPassword" value="<?= $row['user_pass']; ?>" placeholder="Password ..." required />
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="modal-footer">
                                    <a href="javascript:;" class="btn btn-light" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</a>
                                    <button type="submit" name="edit_user" class="btn btn-behind-green"><i class="fas fa-save"></i> Edit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Reset Password -->
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
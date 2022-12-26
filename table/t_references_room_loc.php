<table id="dataTables" class="table table-striped table-bordered first">
    <thead>
        <tr style="text-align: center;">
            <th>#</th>
            <th>Room Location</th>
            <th>Remarks</th>
            <th class="no-sort">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $dataTable = $db->query("SELECT * FROM references_room_loc ORDER BY id ASC", 0);
        if (mysqli_num_rows($dataTable) > 0) {
            $no = 0;
            while ($row = mysqli_fetch_array($dataTable)) {
                $no++;
        ?>
                <tr>
                    <td><?= $no ?>.</td>
                    <td><?= $row['room']; ?></td>
                    <td><?= $row['remarks']; ?></td>
                    <td>
                        <div style="display: flex;justify-content: center;align-items: center;">
                            <a href="#EditRoomLocation<?= $row['id']; ?>" class="btn btn-sm btn-behind-green" data-toggle="modal" title="Edit Email Notif System" style="margin-left: 5px;">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a href="#DeleteRoomLocation<?= $row['id']; ?>" class="btn btn-sm btn-behind-green" data-toggle="modal" title="Delete Email Notif System" style="margin-left: 5px;">
                                <i class="fas fa-trash"></i> Delete
                            </a>
                        </div>
                    </td>
                </tr>

                <!-- Edit -->
                <div class="modal fade" id="EditRoomLocation<?= $row['id']; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">[Edit Data] Room Location</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form action="" method="POST">
                                <div class="modal-body">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="IdRoomLocation">Room Location</label>
                                                    <input type="text" class="form-control" name="RoomLocation" id="IdRoomLocation" value="<?= $row['room']; ?>" placeholder="Room Location ..." />
                                                    <input type="hidden" name="ID" value="<?= $row['id']; ?>" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="IdRemarks">Remarks</label>
                                                    <textarea type="text" class="form-control" name="Remarks" id="IdRemarks" placeholder="Remarks ..."><?= $row['remarks']; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="modal-footer">
                                    <a href="javascript:;" class="btn btn-white" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</a>
                                    <button type="submit" name="edit_room_loc" class="btn btn-behind-green"><i class="fas fa-save"></i> Edit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Edit -->

                <!-- Delete -->
                <div class="modal fade" id="DeleteRoomLocation<?= $row['id']; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">[Delete Data] Room Location</h4>
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
                                                    <font><b>Room Location</b>: <?= $row['room']; ?></font>
                                                    <font><b>Remarks</b>: <?= $row['remarks']; ?></font>
                                                    <input type="hidden" name="ID" value="<?= $row['id']; ?>" />
                                                </p>
                                            </a>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="modal-footer">
                                    <a href="javascript:;" class="btn btn-white" data-dismiss="modal"><i class="fas fa-times-circle"></i> No</a>
                                    <button type="submit" name="delete_room_loc" class="btn btn-danger"><i class="fas fa-check-circle"></i> Yes</button>
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
                                    <a href="javascript:;" class="btn btn-white" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</a>
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
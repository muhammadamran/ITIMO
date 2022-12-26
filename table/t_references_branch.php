<table id="dataTables" class="table table-striped table-bordered first">
    <thead>
        <tr style="text-align: center;">
            <th>#</th>
            <th>Details</th>
            <th>Branch<font style="color:transparent">.</font>Name</th>
            <th>Branch<font style="color:transparent">.</font>Desc.</th>
            <th>Province</th>
            <th class="no-sort">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $dataTable = $db->query("SELECT * FROM references_branch ORDER BY id ASC", 0);
        if (mysqli_num_rows($dataTable) > 0) {
            $no = 0;
            while ($row = mysqli_fetch_array($dataTable)) {
                $no++;
        ?>
                <tr>
                    <td><?= $no ?>.</td>
                    <td style="text-align: center;">
                        <a href="#DetailsBranch<?= $row['id']; ?>" class="btn btn-sm btn-behind-green" data-toggle="modal" title="Details Branch" style="margin-left: 5px;">
                            <i class="fas fa-info-circle"></i>
                        </a>
                    </td>
                    <td><?= $row['branch_name']; ?></td>
                    <td><?= $row['desc_branch']; ?></td>
                    <td><?= $row['province']; ?></td>
                    <td>
                        <div style="display: flex;justify-content: center;align-items: center;">
                            <a href="#EditBranch<?= $row['id']; ?>" class="btn btn-sm btn-behind-green" data-toggle="modal" title="Edit Branch" style="margin-left: 5px;">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a href="#DeleteBranch<?= $row['id']; ?>" class="btn btn-sm btn-behind-green" data-toggle="modal" title="Delete Branch" style="margin-left: 5px;">
                                <i class="fas fa-trash"></i> Delete
                            </a>
                        </div>
                    </td>
                </tr>
                <!-- Details -->
                <div class="modal fade" id="DetailsBranch<?= $row['id']; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">[Details Data] Branch</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form action="" method="POST">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3><u>Branch Information:</u></h3>
                                        </div>
                                        <div class="col-sm-6">
                                            <div style="display: flex;justify-content:flex-start;align-items: center;margin-bottom: 10px">
                                                <div class="table-icon">
                                                    <i class="fas fa-building"></i>
                                                </div>
                                                <div style="margin-left: 5px;">
                                                    <div style="font-size: 15px;font-weight: 500;">
                                                        <?= $row['branch_name']; ?>
                                                    </div>
                                                    <div style="font-size: 12px;font-weight: 300;">
                                                        <?= $row['desc_branch']; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="display: flex;justify-content:flex-start;align-items: center;margin-bottom: 10px">
                                                <div class="table-icon">
                                                    <i class="fas fa-tasks"></i>
                                                </div>
                                                <div style="margin-left: 5px;">
                                                    <div style="font-size: 15px;font-weight: 500;">
                                                        Telp.: <?= $row['telp']; ?> - Fax.: <?= $row['fax']; ?>
                                                    </div>
                                                    <div style="font-size: 12px;font-weight: 300;">
                                                        <?= $row['email']; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div style="display: flex;justify-content:flex-start;align-items: center;margin-bottom: 10px">
                                                <div class="table-icon">
                                                    <i class="fas fa-map"></i>
                                                </div>
                                                <div style="margin-left: 5px;">
                                                    <div style="font-size: 15px;font-weight: 500;">
                                                        Province: <?= $row['province']; ?> - Poscode: <?= $row['poscode']; ?>
                                                    </div>
                                                    <div style="font-size: 12px;font-weight: 300;">
                                                        <?= $row['address_branch']; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="javascript:;" class="btn btn-light" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Details -->

                <!-- Edit -->
                <div class="modal fade" id="EditBranch<?= $row['id']; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">[Edit Data] Branch</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form action="" method="POST">
                                <div class="modal-body">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="IdBranch">Branch </label>
                                                    <input type="text" class="form-control" name="NameBranch" id="EditIdBranch" onkeyup="EditmyFunction()" value="<?= $row['branch_name'] ?>" placeholder="Branch ..." readonly />
                                                    <input type="hidden" name="ID" value="<?= $row['id']; ?>" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="IdDescriptionBranch">Description Branch </label>
                                                    <input type="text" class="form-control" name="NameDescriptionBranch" id="EditIdDescriptionBranch" value="<?= $row['desc_branch'] ?>" placeholder="Description Branch ..." />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="IdTelepone">Telepone </label>
                                                    <input type="text" class="form-control" name="NameTelepone" id="EditIdTelepone" value="<?= $row['telp'] ?>" placeholder="Telepone ..." />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="IdFax">Fax </label>
                                                    <input type="text" class="form-control" name="NameFax" id="EditIdFax" value="<?= $row['fax'] ?>" placeholder="Fax ..." />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="IdEmail">Email </label>
                                                    <input type="email" class="form-control" name="NameEmail" id="EditIdEmail" value="<?= $row['email'] ?>" placeholder="Email ..." />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="IdAddress">Address </label>
                                                    <textarea type="text" class="form-control" name="NameAddress" id="EditIdAddress" placeholder="Address ..."><?= $row['address_branch'] ?></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="IdProvince">Province </label>
                                                    <select class="form-control" name="NameProvince" id="EditIdProvince" placeholder="Province ...">
                                                        <?php if ($row['province'] == NULL) { ?>
                                                            <option value="">Choose Province</option>
                                                        <?php } else { ?>
                                                            <option value="<?= $row['province'] ?>"><?= $row['province'] ?></option>
                                                            <option value="">Choose Province</option>
                                                        <?php } ?>
                                                        <option value="Nanggroe Aceh Darussalam"> Nanggroe Aceh Darussalam</option>
                                                        <option value="Sumatera Utara"> Sumatera Utara</option>
                                                        <option value="Sumatera Selatan"> Sumatera Selatan</option>
                                                        <option value="Sumatera Barat"> Sumatera Barat</option>
                                                        <option value="Bengkulu"> Bengkulu</option>
                                                        <option value="Riau"> Riau</option>
                                                        <option value="Kepulauan"> Kepulauan</option>
                                                        <option value="Jambi"> Jambi</option>
                                                        <option value="Lampung"> Lampung</option>
                                                        <option value="Bangka Belitung"> Bangka Belitung</option>
                                                        <option value="Kalimantan Barat"> Kalimantan Barat</option>
                                                        <option value="Kalimantan Timur"> Kalimantan Timur</option>
                                                        <option value="Kalimantan Selatan"> Kalimantan Selatan</option>
                                                        <option value="Kalimantan Tengah"> Kalimantan Tengah</option>
                                                        <option value="Kalimantan Utara"> Kalimantan Utara</option>
                                                        <option value="Banten"> Banten</option>
                                                        <option value="DKI Jakarta"> DKI Jakarta</option>
                                                        <option value="Jawa Barat"> Jawa Barat</option>
                                                        <option value="Jawa Tengah"> Jawa Tengah</option>
                                                        <option value="Daerah Istimewa Yogyakarta"> Daerah Istimewa Yogyakarta</option>
                                                        <option value="Jawa Timur"> Jawa Timur</option>
                                                        <option value="Bali"> Bali</option>
                                                        <option value="Nusa Tenggara Timur"> Nusa Tenggara Timur</option>
                                                        <option value="Nusa Tenggara Barat"> Nusa Tenggara Barat</option>
                                                        <option value="Gorontalo"> Gorontalo</option>
                                                        <option value="Sulawesi Barat"> Sulawesi Barat</option>
                                                        <option value="Sulawesi Tengah"> Sulawesi Tengah</option>
                                                        <option value="Sulawesi Utara"> Sulawesi Utara</option>
                                                        <option value="Sulawesi Tenggara"> Sulawesi Tenggara</option>
                                                        <option value="Sulawesi Selatan"> Sulawesi Selatan</option>
                                                        <option value="Maluku Utara"> Maluku Utara</option>
                                                        <option value="Maluku"> Maluku</option>
                                                        <option value="Papua Barat"> Papua Barat</option>
                                                        <option value="Papua"> Papua</option>
                                                        <option value="Papua Tengah"> Papua Tengah</option>
                                                        <option value="Papua Pegunungan"> Papua Pegunungan</option>
                                                        <option value="Papua Selatan"> Papua Selatan</option>
                                                        <option value="Papua Barat Daya"> Papua Barat Day</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="IdPoscode">Poscode </label>
                                                    <input type="text" class="form-control" name="NamePoscode" id="EditIdPoscode" value="<?= $row['poscode'] ?>" placeholder="Poscode ..." />
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="modal-footer">
                                    <a href="javascript:;" class="btn btn-light" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</a>
                                    <button type="submit" name="edit_branch" class="btn btn-behind-green"><i class="fas fa-save"></i> Edit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Edit -->

                <!-- Delete -->
                <div class="modal fade" id="DeleteBranch<?= $row['id']; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">[Delete Data] Branch</h4>
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
                                                    <font><b>Branch Name</b>: <?= $row['branch_name']; ?></font>
                                                    <font><b>Branch Description</b>: <?= $row['desc_branch']; ?></font>
                                                    <font><b>Province</b>: <?= $row['province']; ?></font>
                                                    <input type="hidden" name="ID" value="<?= $row['id']; ?>" />
                                                </p>
                                            </a>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="modal-footer">
                                    <a href="javascript:;" class="btn btn-white" data-dismiss="modal"><i class="fas fa-times-circle"></i> No</a>
                                    <button type="submit" name="delete_branch" class="btn btn-danger"><i class="fas fa-check-circle"></i> Yes</button>
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
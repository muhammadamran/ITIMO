<table id="dataTablesN" class="table table-striped table-bordered first">
    <thead>
        <tr style="text-align: center;">
            <th>#</th>
            <th class="no-sort">History<font style="color:transparent">.</font>&<font style="color:transparent">.</font>Asset<font style="color:transparent">.</font>File</th>
            <th>Status<font style="color:transparent">.</font>Device</th>
            <th>Description</th>
            <th>SN<font style="color:transparent">.</font>&<font style="color:transparent">.</font>Product<font style="color:transparent">.</font>Name/Brand</th>
            <th>Hostname<font style="color:transparent">.</font>&<font style="color:transparent">.</font>Username</th>
            <th>Usage<font style="color:transparent">.</font>State<font style="color:transparent">.</font>&<font style="color:transparent">.</font>Ownership<font style="color:transparent">.</font>Sta.</th>
            <th>Branch<font style="color:transparent">.</font>Loc.<font style="color:transparent">.</font>&<font style="color:transparent">.</font>Details</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (isset($_POST["find_filter"])) {
            function where_add($_wh, $_add)
            {
                $wh = '';
                if ($wh == '') {
                    return 'WHERE ' . $_add;
                } else {
                    return $_wh . ' AND ' . $_add;
                }
            }
            $i = 1;
            $_where = '';
            $i = 1;
            $_where = '';
            if ($FindSerialNumber == true) {
                $_where = where_add($_where, ' lap.serial_number=' . "'$FindSerialNumber'" . '');
            }
            if ($FindProductName == true) {
                $_where = where_add($_where, ' lap.product_name=' . "'$FindProductName'" . '');
            }
            if ($FindBrand == true) {
                $_where = where_add($_where, ' lap.brand=' . "'$FindBrand'" . '');
            }
            if ($FindHostname == true) {
                $_where = where_add($_where, ' lap.hostname=' . "'$FindHostname'" . '');
            }
            if ($FindUsername == true) {
                $_where = where_add($_where, ' lap.username=' . "'$FindUsername'" . '');
            }
            if ($FindUS == true) {
                $_where = where_add($_where, ' lap.status_use=' . "'$FindUS'" . '');
            }
            if ($FindOS == true) {
                $_where = where_add($_where, ' lap.status_available=' . "'$FindOS'" . '');
            }
            if ($FindBranchLoc == true) {
                $_where = where_add($_where, ' lap.location_branch=' . "'$FindBranchLoc'" . '');
            }
            $dataTable = $db->query("SELECT *,lap.id,emp.id AS idEmp,lap.username AS userLap,emp.username AS userEmp
            FROM tb_laptop_master AS lap
            LEFT OUTER JOIN tb_employee AS emp ON lap.username=emp.username
            $_where
            ORDER BY lap.id DESC", 0);
        } else {
            $dataTable = $db->query("SELECT *,lap.id,emp.id AS idEmp,lap.username AS userLap,emp.username AS userEmp
            FROM tb_laptop_master AS lap
            LEFT OUTER JOIN tb_employee AS emp ON lap.username=emp.username
            ORDER BY lap.id DESC", 0);
        }
        if (mysqli_num_rows($dataTable) > 0) {
            $no = 0;
            while ($row = mysqli_fetch_array($dataTable)) {
                $no++;
        ?>
                <tr>
                    <td><?= $no ?>.</td>
                    <!-- History & Asset File  -->
                    <td>
                        <div style="display: flex;justify-content: center;align-items: center;">
                            <div>
                                <a href="laptop_summary_history.php?SN=<?= $row['serial_number']; ?>" target="_blank" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="right" data-content="Detail Device History: <?= $row['serial_number']; ?>">
                                    <div class="table-icon-Assets-IT-Temp">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                </a>
                            </div>
                            <div style="margin-left:5px">
                                <a href="laptop_summary_asset.php?SN=<?= $row['serial_number']; ?>" target="_blank" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="right" data-content="Asset File Device: <?= $row['serial_number']; ?>">
                                    <div class="table-icon-Assets-IT-Temp">
                                        <i class="fas fa-file-invoice"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </td>
                    <!-- Status Device -->
                    <td>
                        <div style="display: flex;justify-content: center;align-items: center;">
                            <?php if ($row['status_use'] == 'In Use' && $row['status_available'] == 'PERMANENT') { ?>
                                <a href="#" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="right" data-content="Assets Users: <?= $row['serial_number']; ?>">
                                    <div class="table-icon-Assets-IT-Temp">
                                        <i class="fas fa-lock"></i>
                                    </div>
                                </a>
                            <?php } else if ($row['status_use'] == 'In Use' && $row['status_available'] == 'TEMP') { ?>
                                <a href="#" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="right" data-content="Assets Users Temp: <?= $row['serial_number']; ?>">
                                    <div class="table-icon-Assets-IT-Temp">
                                        <i class="fas fa-lock"></i>
                                    </div>
                                </a>
                            <?php } else if ($row['status_use'] == 'Not In Use' && $row['status_available'] == 'TEMP') { ?>
                                <a href="#" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="right" data-content="Assets IT Temp: <?= $row['serial_number']; ?>">
                                    <div class="table-icon-Assets-IT-Temp">
                                        <i class="fas fa-check-circle"></i>
                                    </div>
                                </a>
                            <?php } else if ($row['status_use'] == 'Not In Use' && $row['status_available'] == 'BROKEN') { ?>
                                <a href="#" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="right" data-content="Device Broken: <?= $row['serial_number']; ?>">
                                    <div class="table-icon-Assets-IT-Temp">
                                        <i class="fas fa-heart-broken"></i>
                                    </div>
                                </a>
                            <?php } else if ($row['status_use'] == 'Not In Use' && $row['status_available'] == 'AVAILABLE') { ?>
                                <a href="#" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="right" data-content="Device can use: <?= $row['serial_number']; ?>">
                                    <div class="table-icon-Assets-IT-Temp">
                                        <i class="fas fa-check-circle"></i>
                                    </div>
                                </a>
                            <?php } else if ($row['status_use'] == 'Not In Use' && $row['status_available'] == 'DISPOSED') { ?>
                                <a href="#" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="right" data-content="Device Disposed: <?= $row['serial_number']; ?>">
                                    <div class="table-icon-Assets-IT-Temp">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </div>
                                </a>
                            <?php } else { ?>
                                <a href="#" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="right" data-content="???: <?= $row['serial_number']; ?>">
                                    <div class="table-icon-Assets-IT-Temp">
                                        <i class="far fa-question-circle"></i>
                                    </div>
                                </a>
                            <?php } ?>
                        </div>
                    </td>
                    <!-- Description -->
                    <td style="font-size: 10px;">
                        <?php if ($row['status_use'] == 'In Use' && $row['status_available'] == 'PERMANENT') { ?>
                            <span class="badge-dot badge-success mr-1"></span> Assets Users
                        <?php } else if ($row['status_use'] == 'In Use' && $row['status_available'] == 'TEMP') { ?>
                            <span class="badge-dot badge-info mr-1"></span> Assets Users Temp
                        <?php } else if ($row['status_use'] == 'Not In Use' && $row['status_available'] == 'TEMP') { ?>
                            <span class="badge-dot badge-primary mr-1"></span> Assets IT Temp
                        <?php } else if ($row['status_use'] == 'Not In Use' && $row['status_available'] == 'BROKEN') { ?>
                            <span class="badge-dot badge-danger mr-1"></span> Device Broken
                        <?php } else if ($row['status_use'] == 'Not In Use' && $row['status_available'] == 'AVAILABLE') { ?>
                            <span class="badge-dot badge-brand mr-1"></span> Device can use
                        <?php } else if ($row['status_use'] == 'Not In Use' && $row['status_available'] == 'DISPOSED') { ?>
                            <span class="badge-dot badge-dark mr-1"></span> Device Disposed
                        <?php } else { ?>
                            <span class="badge-dot badge-light mr-1"></span> ???
                        <?php } ?>
                    </td>
                    <!-- SN & Product Name/Brand -->
                    <td>
                        <div style="display: flex;justify-content:flex-start;align-items: center;">
                            <div class="table-icon">
                                <i class="fas fa-info-circle"></i>
                            </div>
                            <div style="margin-left: 5px;">
                                <div style="font-size: 15px;font-weight: 500;">
                                    <?php if ($row['serial_number'] == NULL || $row['serial_number'] == '-' || $row['serial_number'] == 'NA' || $row['serial_number'] == 'N/A' || $row['serial_number'] == '#N/A') { ?>
                                        <font style="color: red;">Empty</font>
                                    <?php } else { ?>
                                        <?= $row['serial_number']; ?>
                                    <?php } ?>
                                </div>
                                <div style="font-size: 12px;font-weight: 300;">
                                    <?php if ($row['product_name'] == NULL || $row['product_name'] == '-' || $row['product_name'] == 'NA' || $row['product_name'] == 'N/A' || $row['product_name'] == '#N/A') { ?>
                                        <font style="color: red;">Empty</font>
                                    <?php } else { ?>
                                        <?= $row['product_name']; ?>/<?= $row['brand']; ?>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <!-- Hostname & Username -->
                    <td>
                        <div style="display: flex;justify-content:flex-start;align-items: center;">
                            <div class="table-icon">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                            <div style="margin-left: 5px;">
                                <div style="font-size: 15px;font-weight: 500;">
                                    <?php if ($row['hostname'] == NULL || $row['hostname'] == '-' || $row['hostname'] == 'NA' || $row['hostname'] == 'N/A' || $row['hostname'] == '#N/A') { ?>
                                        <font style="color: red;">Empty</font>
                                    <?php } else { ?>
                                        <?= $row['hostname']; ?>
                                    <?php } ?>
                                </div>
                                <div style="font-size: 12px;font-weight: 300;">
                                    <?php if ($row['userLap'] == NULL || $row['userLap'] == '-' || $row['userLap'] == 'NA' || $row['userLap'] == 'N/A' || $row['userLap'] == '#N/A') { ?>
                                        <font style="color: red;">Empty</font>
                                    <?php } else { ?>
                                        <?= $row['userLap']; ?>/<?= $row['type']; ?>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <!-- Usage State & Owenership Stat. -->
                    <td>
                        <div style="display: flex;justify-content:flex-start;align-items: center;">
                            <div class="table-icon">
                                <i class="fas fa-tags"></i>
                            </div>
                            <div style="margin-left: 5px;">
                                <div style="font-size: 15px;font-weight: 500;">
                                    <?php if ($row['status_use'] == NULL || $row['status_use'] == '-' || $row['status_use'] == 'NA' || $row['status_use'] == 'N/A' || $row['status_use'] == '#N/A') { ?>
                                        <font style="color: red;">Empty</font>
                                    <?php } else { ?>
                                        <?= $row['status_use']; ?>
                                    <?php } ?>
                                </div>
                                <div style="font-size: 12px;font-weight: 300;">
                                    <?php if ($row['status_available'] == NULL || $row['status_available'] == '-' || $row['status_available'] == 'NA' || $row['status_available'] == 'N/A' || $row['status_available'] == '#N/A') { ?>
                                        <font style="color: red;">Empty</font>
                                    <?php } else { ?>
                                        <?= $row['status_available']; ?>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <!-- Branch Loc. Details -->
                    <td>
                        <div style="display: flex;justify-content:flex-start;align-items: center;">
                            <div class="table-icon">
                                <i class="fas fa-search-location"></i>
                            </div>
                            <div style="margin-left: 5px;">
                                <div style="font-size: 15px;font-weight: 500;">
                                    <?php if ($row['location_branch'] == NULL || $row['location_branch'] == '-' || $row['location_branch'] == 'NA' || $row['location_branch'] == 'N/A' || $row['location_branch'] == '#N/A') { ?>
                                        <font style="color: red;">Empty</font>
                                    <?php } else { ?>
                                        <?= $row['location_branch']; ?>
                                    <?php } ?>
                                </div>
                                <div style="font-size: 12px;font-weight: 300;">
                                    <?php if ($row['location_room'] == NULL || $row['location_room'] == '-' || $row['location_room'] == 'NA' || $row['location_room'] == 'N/A' || $row['location_room'] == '#N/A') { ?>
                                        <font style="color: red;">Empty</font>
                                    <?php } else { ?>
                                        <?= $row['location_room']; ?>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div style="display: flex;justify-content: center;align-items: center;">
                            <a href="laptop_summary_edit.php?ID=<?= $row['id']; ?>" target="_blank" class="btn btn-sm btn-behind-green" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="left" data-content="Edit Device: <?= $row['serial_number']; ?>" style="margin-left: 5px;">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a href="#Delete<?= $row['id']; ?>" class="btn btn-sm btn-behind-green" data-toggle="modal" title="Delete Device: <?= $row['serial_number']; ?>" style="margin-left: 5px;">
                                <i class="fas fa-trash"></i> Delete
                            </a>
                        </div>
                    </td>
                </tr>

                <!-- Delete -->
                <div class="modal fade" id="Delete<?= $row['id']; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">[Delete Data] Laptop</h4>
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
                                            <input type="hidden" name="ID" value="<?= $row['id']; ?>" />
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="modal-footer">
                                    <a href="javascript:;" class="btn btn-white" data-dismiss="modal"><i class="fas fa-times-circle"></i> No</a>
                                    <button type="submit" name="delete_" class="btn btn-danger"><i class="fas fa-check-circle"></i> Yes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Delete -->
            <?php } ?>
        <?php } else { ?>
        <?php } ?>
    </tbody>
</table>
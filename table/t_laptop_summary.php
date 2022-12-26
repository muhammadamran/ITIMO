<table id="dataTablesN" class="table table-striped table-bordered first">
    <thead>
        <tr style="text-align: center;">
            <th>#</th>
            <th class="no-sort">History</th>
            <th>Description</th>
            <th>SN<font style="color:transparent">.</font>&<font style="color:transparent">.</font>Product<font style="color:transparent">.</font>Name/Brand</th>
            <th>Hostname<font style="color:transparent">.</font>&<font style="color:transparent">.</font>Username</th>
            <th>Usage<font style="color:transparent">.</font>State<font style="color:transparent">.</font>&<font style="color:transparent">.</font>Ownership<font style="color:transparent">.</font>Sta.</th>
            <th>Branch<font style="color:transparent">.</font>Loc.<font style="color:transparent">.</font>&<font style="color:transparent">.</font>Details</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $dataTable = $db->query("SELECT *,lap.username AS userLap,emp.username AS userEmp
        FROM tb_laptop_master AS lap
        LEFT OUTER JOIN tb_employee AS emp ON lap.username=emp.username
        ORDER BY lap.id DESC", 0);
        if (mysqli_num_rows($dataTable) > 0) {
            $no = 0;
            while ($row = mysqli_fetch_array($dataTable)) {
                $no++;
        ?>
                <tr>
                    <td><?= $no ?>.</td>
                    <!-- History -->
                    <td>
                        <div style="display: flex;justify-content: center;align-items: center;">
                            <a href="" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="right" data-content="Details Devices History: <?= $row['serial_number']; ?>">
                                <div class="table-icon-blue">
                                    <i class="fas fa-file-invoice"></i>
                                </div>
                            </a>
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
                </tr>
            <?php } ?>
        <?php } else { ?>
        <?php } ?>
    </tbody>
</table>
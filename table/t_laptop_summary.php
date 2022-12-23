<table id="dataTablesN" class="table table-striped table-bordered first">
    <thead>
        <tr style="text-align: center;">
            <th>#</th>
            <th class="no-sort">History</th>
            <th>Conclusion<font style="color:transparent">.</font>Device</th>
            <th class="no-sort">SN<font style="color:transparent">.</font>&<font style="color:transparent">.</font>Brand</th>
            <th class="no-sort">Hostname<font style="color:transparent">.</font>&<font style="color:transparent">.</font>Product<font style="color:transparent">.</font>Name/Type</th>
            <th>Username</th>
            <th>Status</th>
            <th>Remarks<font style="color:transparent">.</font>&<font style="color:transparent">.</font>Location</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $dataTable = $db->query("SELECT *,lp.user_name,usr.user_branch FROM tb_laptop_master AS lp
                                 LEFT OUTER JOIN tb_user AS usr ON lp.user_name=usr.user_name
                                 ORDER BY lp.rcd_id DESC", 0);
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
                            <a href="" title="Edit Users">
                                <div class="table-icon-blue">
                                    <i class="fas fa-history"></i>
                                </div>
                            </a>
                        </div>
                    </td>
                    <!-- Conslusion -->
                    <td style="font-size: 12px;">
                        <?php if ($row['status'] == 'In Use' && $row['remarks'] == 'PERMANENT') { ?>
                            <span class="badge-dot badge-success mr-1"></span> Assets Users
                        <?php } else if ($row['status'] == 'In Use' && $row['remarks'] == 'TEMP') { ?>
                            <span class="badge-dot badge-info mr-1"></span> Assets Users Temp
                        <?php } else if ($row['status'] == 'Not In Use' && $row['remarks'] == 'TEMP') { ?>
                            <span class="badge-dot badge-primary mr-1"></span> Assets IT Temp
                        <?php } else if ($row['status'] == 'Not In Use' && $row['remarks'] == 'BROKEN') { ?>
                            <span class="badge-dot badge-danger mr-1"></span> Device Broken
                        <?php } else if ($row['status'] == 'Not In Use' && $row['remarks'] == 'AVAILABLE') { ?>
                            <span class="badge-dot badge-brand mr-1"></span> Device can be used
                        <?php } else if ($row['status'] == 'Not In Use' && $row['remarks'] == 'DISPOSED') { ?>
                            <span class="badge-dot badge-dark mr-1"></span> Device Disposed
                        <?php } else { ?>
                            <span class="badge-dot badge-light mr-1"></span> ???
                        <?php } ?>
                    </td>
                    <!-- SN & Brand -->
                    <td>
                        <div style="display: flex;justify-content:flex-start;align-items: center;">
                            <div class="table-icon">
                                <i class="fas fa-info-circle"></i>
                            </div>
                            <div style="margin-left: 5px;">
                                <div style="font-size: 15px;font-weight: 500;">
                                    <?php if ($row['sn'] == NULL || $row['sn'] == '-' || $row['sn'] == 'NA' || $row['sn'] == 'N/A' || $row['sn'] == '#N/A') { ?>
                                        <font style="color: red;">Empty</font>
                                    <?php } else { ?>
                                        <?= $row['sn']; ?>
                                    <?php } ?>
                                </div>
                                <div style="font-size: 12px;font-weight: 300;">
                                    <?php if ($row['brand'] == NULL || $row['brand'] == '-' || $row['brand'] == 'NA' || $row['brand'] == 'N/A' || $row['brand'] == '#N/A') { ?>
                                        <font style="color: red;">Empty</font>
                                    <?php } else { ?>
                                        <?= $row['brand']; ?>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <!-- Hostname & Product Name -->
                    <td>
                        <div style="display: flex;justify-content:flex-start;align-items: center;">
                            <div class="table-icon">
                                <i class="fas fa-laptop"></i>
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
                                    <?php if ($row['product_name'] == NULL || $row['product_name'] == '-' || $row['product_name'] == 'NA' || $row['product_name'] == 'N/A' || $row['product_name'] == '#N/A') { ?>
                                        <font style="color: red;">Empty</font>
                                    <?php } else { ?>
                                        <?= $row['product_name']; ?>/<?= $row['type']; ?>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <!-- Username & Branch -->
                    <td>
                        <div style="display: flex;justify-content:flex-start;align-items: center;">
                            <div class="table-icon">
                                <i class="far fa-id-badge"></i>
                            </div>
                            <div style="margin-left: 5px;">
                                <div style="font-size: 15px;font-weight: 500;">
                                    <?php if ($row['user_name'] == NULL || $row['user_name'] == '-' || $row['user_name'] == 'NA' || $row['user_name'] == 'N/A' || $row['user_name'] == '#N/A') { ?>
                                        <font style="color: red;">Empty</font>
                                    <?php } else { ?>
                                        <?= $row['user_name']; ?>
                                    <?php } ?>
                                </div>
                                <div style="font-size: 12px;font-weight: 300;">
                                    <?php if ($row['user_branch'] == NULL || $row['user_branch'] == '-' || $row['user_branch'] == 'NA' || $row['user_branch'] == 'N/A' || $row['user_branch'] == '#N/A') { ?>
                                        <font style="color: red;">Empty</font>
                                    <?php } else { ?>
                                        <?= $row['user_branch']; ?>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <!-- Status -->
                    <td style="text-align: center;font-size: 12px;">
                        <?php if ($row['status'] == 'In Use') { ?>
                            <span class="badge-dot badge-success mr-1"></span> <?= $row['status']; ?>
                        <?php } else if ($row['status'] == 'Not In Use') { ?>
                            <span class="badge-dot badge-brand mr-1"></span> <?= $row['status']; ?>
                        <?php } else { ?>
                            <span class="badge-dot badge-light mr-1"></span> <?= $row['status']; ?>
                        <?php } ?>
                    </td>
                    <!-- Remarks & Location -->
                    <td>
                        <div style="display: flex;justify-content:flex-start;align-items: center;">
                            <div class="table-icon">
                                <i class="fas fa-street-view"></i>
                            </div>
                            <div style="margin-left: 5px;">
                                <div style="font-size: 15px;font-weight: 500;">
                                    <?php if ($row['remarks'] == NULL || $row['remarks'] == '-' || $row['remarks'] == 'NA' || $row['remarks'] == 'N/A' || $row['remarks'] == '#N/A') { ?>
                                        <font style="color: red;">Empty</font>
                                    <?php } else { ?>
                                        <?= $row['remarks']; ?>
                                    <?php } ?>
                                </div>
                                <div style="font-size: 12px;font-weight: 300;">
                                    <?php if ($row['location'] == NULL || $row['location'] == '-' || $row['location'] == 'NA' || $row['location'] == 'N/A' || $row['location'] == '#N/A') { ?>
                                        <font style="color: red;">Empty</font>
                                    <?php } else { ?>
                                        <?= $row['location']; ?>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
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
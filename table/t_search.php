<table id="dataTablesN" class="table table-striped table-bordered first">
    <thead>
        <tr style="text-align: center;">
            <th>#</th>
            <th>SN<font style="color:transparent">.</font>&<font style="color:transparent">.</font>Product<font style="color:transparent">.</font>Name/Brand</th>
            <th>Hostname<font style="color:transparent">.</font>&<font style="color:transparent">.</font>Username</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (isset($_POST["search_"])) {
            if ($SN == NULL) {
                $Condition = 'asset_no';
                $like      = $FA;
            } else {
                $Condition = 'serial_number';
                $like      = $SN;
            }

            // tb_laptop_master
            if ($Device == 'Laptop') {
                $Tables = 'tb_laptop_master';
                // tb_pc_master
            } else if ($Device == 'PC') {
                $Tables = 'tb_pc_master';
                // tb_monitor_master
            } else if ($Device == 'Monitor') {
                $Tables = 'tb_monitor_master';
                // tb_headphones_master
            } else if ($Device == 'Headphones') {
                $Tables = 'tb_headphones_master';
                // tb_phone_master
            } else if ($Device == 'Phone') {
                $Tables = 'tb_phone_master';
                // tb_ipad_master
            } else if ($Device == 'Ipad') {
                $Tables = 'tb_ipad_master';
                // tb_server_master
            } else if ($Device == 'Server') {
                $Tables = 'tb_server_master';
                // tb_tv_master
            } else if ($Device == 'TV') {
                $Tables = 'tb_tv_master';
                // tb_switch_master
            } else if ($Device == 'Switch') {
                $Tables = 'tb_switch_master';
                // tb_scanner_master
            } else if ($Device == 'Scanner') {
                $Tables = 'tb_scanner_master';
                // tb_etc_master
            } else if ($Device == 'ETC') {
                $Tables = 'tb_etc_master';
            }

            $dataTable = $db->query("SELECT * FROM $Tables WHERE $Condition LIKE '%$like%' ", 0);
            if (mysqli_num_rows($dataTable) > 0) {
                $no = 0;
                while ($row = mysqli_fetch_array($dataTable)) {
                    $no++;
        ?>
                    <tr>
                        <td><?= $no ?>.</td>
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
                                        <?php if ($row['username'] == NULL || $row['username'] == '-' || $row['username'] == 'NA' || $row['username'] == 'N/A' || $row['username'] == '#N/A') { ?>
                                            <font style="color: red;">Empty</font>
                                        <?php } else { ?>
                                            <?= $row['username']; ?>/<?= $row['type']; ?>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            <?php } else { ?>
            <?php } ?>
        <?php } ?>
    </tbody>
</table>
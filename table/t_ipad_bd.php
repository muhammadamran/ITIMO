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
        </tr>
    </thead>
    <tbody>
        <?php
        $dataTable = $db->query("SELECT *,lap.id,emp.id AS idEmp,lap.username AS userLap,emp.username AS userEmp,lap.cost_center AS CC
            FROM tb_ipad_master AS lap
            LEFT OUTER JOIN tb_employee AS emp ON lap.username=emp.username
            WHERE lap.status_available='BROKEN' OR lap.status_available='DISPOSED'
            ORDER BY lap.id DESC", 0);
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
                                <a href="ipad_summary_history.php?SN=<?= $row['serial_number']; ?>" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="right" data-content="Detail Device History: <?= $row['serial_number']; ?>">
                                    <div class="table-icon-Assets-IT-Temp">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                </a>
                            </div>
                            <div style="margin-left:5px">
                                <a href="#Asset<?= $row['id']; ?>" data-toggle="modal" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="right" data-content="Asset File Device: <?= $row['serial_number']; ?>">
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
                </tr>

                <!-- Asset -->
                <div class="modal fade" id="Asset<?= $row['id']; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">[Asset Data] Ipad</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form action="" method="POST">
                                <div class="modal-body">
                                    <fieldset>
                                        <div class="row" style="align-items: center;">
                                            <div class="col-sm-3">
                                                <div class="doc-asset">
                                                    <div style="display: grid;justify-content: center;">
                                                        <i class="fas fa-tablet-alt"></i>
                                                    </div>
                                                    <div style="margin-top: -110px;display: flex;justify-content: center;margin-bottom: 0px;">
                                                        <font style="font-size: 10px;text-align: center;text-transform:uppercase"><?= $row['brand']; ?></font>
                                                    </div>
                                                    <div style="display: flex;justify-content: center;margin-top: 5px;">
                                                        <font style="font-size: 18px;text-align: center;text-transform:uppercase"><?= $row['product_name']; ?></font>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div style="display: flex;justify-content:flex-start;align-items: center;margin-top: 12px;">
                                                            <div class="table-icon" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="top" data-content="Serial Number & Device Release Year">
                                                                <i class="fas fa-tablet-alt"></i>
                                                            </div>
                                                            <div style="margin-left: 5px;">
                                                                <div style="font-size: 15px;font-weight: 500;">
                                                                    <font><?= $row['serial_number']; ?></font>
                                                                </div>
                                                                <div style="font-size: 12px;font-weight: 300;">
                                                                    <font><?= $row['device_releases_years']; ?></font>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div style="display: flex;justify-content:flex-start;align-items: center;margin-top: 12px;">
                                                            <div class="table-icon" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="top" data-content="Hostname & Username">
                                                                <i class="fas fa-chalkboard-teacher"></i>
                                                            </div>
                                                            <div style="margin-left: 5px;">
                                                                <div style="font-size: 15px;font-weight: 500;">
                                                                    <font><?= $row['hostname']; ?></font>
                                                                </div>
                                                                <div style="font-size: 12px;font-weight: 300;">
                                                                    <font><?= $row['userLap']; ?></font>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div style="display: flex;justify-content:flex-start;align-items: center;margin-top: 12px;">
                                                            <div class="table-icon" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="top" data-content="RAM/Processor & Disk Space/Type">
                                                                <i class="fas fa-microchip"></i>
                                                            </div>
                                                            <div style="margin-left: 5px;">
                                                                <div style="font-size: 15px;font-weight: 500;">
                                                                    <font><?= $row['memory']; ?> GB / <?= $row['processor']; ?></font>
                                                                </div>
                                                                <div style="font-size: 12px;font-weight: 300;">
                                                                    <font><?= $row['disk']; ?> GB / <?= $row['disk_type']; ?></font>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div style="display: flex;justify-content:flex-start;align-items: center;margin-top: 12px;">
                                                            <div class="table-icon" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="top" data-content="Usage State & Ownership Status">
                                                                <i class="fas fa-tags"></i>
                                                            </div>
                                                            <div style="margin-left: 5px;">
                                                                <div style="font-size: 15px;font-weight: 500;">
                                                                    <font><?= $row['status_use']; ?></font>
                                                                </div>
                                                                <div style="font-size: 12px;font-weight: 300;">
                                                                    <font><?= $row['status_available']; ?></font>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div style="display: flex;justify-content:flex-start;align-items: center;margin-top: 12px;">
                                                            <div class="table-icon" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="top" data-content="Branch Location & Room Location">
                                                                <i class="fas fa-search-location"></i>
                                                            </div>
                                                            <div style="margin-left: 5px;">
                                                                <div style="font-size: 15px;font-weight: 500;">
                                                                    <font><?= $row['location_branch']; ?></font>
                                                                </div>
                                                                <div style="font-size: 12px;font-weight: 300;">
                                                                    <font><?= $row['location_room']; ?></font>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div style="display: flex;justify-content:flex-start;align-items: center;margin-top: 12px;">
                                                            <div class="table-icon" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="top" data-content="Asset Number & PO Number">
                                                                <i class="fas fa-qrcode"></i>
                                                            </div>
                                                            <div style="margin-left: 5px;">
                                                                <div style="font-size: 15px;font-weight: 500;">
                                                                    <font><?= $row['asset_no']; ?></font>
                                                                </div>
                                                                <div style="font-size: 12px;font-weight: 300;">
                                                                    <font><?= $row['po_no']; ?></font>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div style="display: flex;justify-content:flex-start;align-items: center;margin-top: 12px;">
                                                            <div class="table-icon" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="top" data-content="Asset of & Cost Center">
                                                                <i class="fas fa-tasks"></i>
                                                            </div>
                                                            <div style="margin-left: 5px;">
                                                                <div style="font-size: 15px;font-weight: 500;">
                                                                    <font><?= $row['asset_of']; ?></font>
                                                                </div>
                                                                <div style="font-size: 12px;font-weight: 300;">
                                                                    <font><?= $row['CC']; ?></font>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div style="display: flex;justify-content:flex-start;align-items: center;margin-top: 12px;">
                                                            <div class="table-icon" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="top" data-content="Purcahse Year & Purcahse Batch">
                                                                <i class="fas fa-calendar-check"></i>
                                                            </div>
                                                            <div style="margin-left: 5px;">
                                                                <div style="font-size: 15px;font-weight: 500;">
                                                                    <font><?= $row['purchase_year']; ?></font>
                                                                </div>
                                                                <div style="font-size: 12px;font-weight: 300;">
                                                                    <font>Batch <?= $row['purchase_batch']; ?></font>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div style="display: flex;justify-content:flex-start;align-items: center;margin-top: 12px;">
                                                            <div class="table-icon" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="top" data-content="Price">
                                                                <i class="fas fa-hand-holding-usd"></i>
                                                            </div>
                                                            <div style="margin-left: 5px;">
                                                                <div style="font-size: 15px;font-weight: 500;">
                                                                    <font>Rp. <?= $row['prices']; ?></font>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div style="display: flex;justify-content:flex-start;align-items: center;margin-top: 12px;">
                                                            <div class="table-icon" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="top" data-content="Remarks">
                                                                <i class="fas fa-quote-right"></i>
                                                            </div>
                                                            <div style="margin-left: 5px;">
                                                                <div style="font-size: 15px;font-weight: 500;">
                                                                    <font><?= $row['remarks']; ?></font>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div style="display: flex;justify-content:flex-start;align-items: center;margin-top: 12px;">
                                                            <div style="padding: 10px;font-size: 20px;background: #003369;color: #ffffff;border-radius: 5px;" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="top" data-content="Status Device">
                                                                <i class="fas fa-info-circle"></i>
                                                            </div>
                                                            <div style="margin-left: 5px;">
                                                                <div style="font-size: 15px;font-weight: 500;">
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
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- HandOver -->
                                            <?php if ($row['handover'] != NULL) { ?>
                                                <div class="col-sm-12">
                                                    <hr>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div style="display: flex;justify-content:flex-start;align-items: center;margin-top: -5px;">
                                                        <div class="table-icon" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="top" data-content="Handover Pictures">
                                                            <i class="fas fa-images"></i>
                                                        </div>
                                                        <div style="margin-left: 5px;">
                                                            <div style="font-size: 15px;font-weight: 500;">
                                                                <font>Handover Pictures</font>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <!-- <div> -->
                                                    <div style="padding: 325px;margin-top: -305px;margin-bottom: -285px;">
                                                        <div id="carouselExampleIndicators<?= $row['id']; ?>" class="carousel slide" data-ride="carousel">
                                                            <ol class="carousel-indicators">
                                                                <?php
                                                                $exp       = explode(',', $row['handover'], -1);
                                                                $i = 0;
                                                                foreach ($exp as $dataC) {
                                                                    if ($i == 1) {
                                                                        $s = 'active';
                                                                    } else {
                                                                        $s = '';
                                                                    }
                                                                ?>
                                                                    <li data-target="#carouselExampleIndicators<?= $row['id']; ?>" data-slide-to="<?= $i; ?>" class="<?= $s ?>"></li>
                                                                <?php $i++;
                                                                } ?>
                                                            </ol>
                                                            <div class="carousel-inner">
                                                                <?php
                                                                $i = 0;
                                                                foreach ($exp as $dataP) {
                                                                    if ($i == 1) {
                                                                        $s = 'active';
                                                                    } else {
                                                                        $s = '';
                                                                    }
                                                                ?>
                                                                    <div class="carousel-item <?= $s ?>">
                                                                        <img class="d-block w-100" src="assets/images/handover/ipad/<?= $dataP ?>" alt="<?= $dataP ?>">
                                                                    </div>
                                                                <?php $i++;
                                                                } ?>
                                                            </div>
                                                            <a class="carousel-control-prev" href="#carouselExampleIndicators<?= $row['id']; ?>" role="button" data-slide="prev">
                                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                            <a class="carousel-control-next" href="#carouselExampleIndicators<?= $row['id']; ?>" role="button" data-slide="next">
                                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <!-- HandOver -->
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="close btn btn-white" data-dismiss="modal" aria-hidden="true" style="padding: 10px;"><i class="fas fa-times-circle"></i> Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Asset -->
            <?php } ?>
        <?php } else { ?>
        <?php } ?>
    </tbody>
</table>
<table id="dataTables" class="table table-striped table-bordered first">
    <thead>
        <tr style="text-align: center;">
            <th>#</th>
            <th>Username</th>
            <th>Departement & Positions</th>
            <th>Branch</th>
            <th>Employment Status & Under</th>
            <th>Assets</th>
            <th>Status</th>
            <!-- <th class="no-sort">Action</th> -->
        </tr>
    </thead>
    <tbody>
        <?php
        $dataTable = $db->query("SELECT * FROM tb_employee ORDER BY id ASC", 0);
        if (mysqli_num_rows($dataTable) > 0) {
            $no = 0;
            while ($row = mysqli_fetch_array($dataTable)) {
                $no++;
        ?>
                <tr>
                    <td><?= $no ?>.</td>
                    <!-- Username & EMail -->
                    <td>
                        <div style="display: flex;justify-content:flex-start;align-items: center;margin-top: 12px;">
                            <div class="table-icon" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="top" data-content="Purcahse Year & Purcahse Batch">
                                <i class="fas fa-user"></i>
                            </div>
                            <div style="margin-left: 5px;">
                                <div style="font-size: 15px;font-weight: 500;">
                                    <font><?= $row['username']; ?></font>
                                </div>
                                <div style="font-size: 12px;font-weight: 300;">
                                    <font><?= $row['email']; ?></font>
                                </div>
                            </div>
                        </div>
                    </td>
                    <!-- Dept. Position & KN Code -->
                    <td>
                        <div style="display: flex;justify-content:flex-start;align-items: center;margin-top: 12px;">
                            <div class="table-icon" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="top" data-content="Purcahse Year & Purcahse Batch">
                                <i class="fas fa-user"></i>
                            </div>
                            <div style="margin-left: 5px;">
                                <div style="font-size: 15px;font-weight: 500;">
                                    <font><?= $row['position']; ?></font>
                                </div>
                                <div style="font-size: 12px;font-weight: 300;">
                                    <font><?= $row['kn_code']; ?></font>
                                </div>
                            </div>
                        </div>
                    </td>
                    <!-- Branches -->
                    <td>
                        <div style="display: flex;justify-content:flex-start;align-items: center;margin-top: 12px;">
                            <div class="table-icon" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="top" data-content="Purcahse Year & Purcahse Batch">
                                <i class="fas fa-user"></i>
                            </div>
                            <div style="margin-left: 5px;">
                                <div style="font-size: 15px;font-weight: 500;">
                                    <font><?= $row['branches']; ?></font>
                                </div>
                            </div>
                        </div>
                    </td>
                    <!-- Employment Status & Under -->
                    <td>
                        <div style="display: flex;justify-content:flex-start;align-items: center;margin-top: 12px;">
                            <div class="table-icon" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="top" data-content="Purcahse Year & Purcahse Batch">
                                <i class="fas fa-user"></i>
                            </div>
                            <div style="margin-left: 5px;">
                                <div style="font-size: 15px;font-weight: 500;">
                                    <font><?= $row['status_employee']; ?></font>
                                </div>
                                <div style="font-size: 12px;font-weight: 300;">
                                    <font><?= $row['under']; ?></font>
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
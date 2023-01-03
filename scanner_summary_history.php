<?php
include 'include/connection.php';
include 'include/restrict.php';
include 'include/head.php';
include 'include/alert.php';
include 'include/dataTablesCSS.php';

$GET        =  $_GET['SN'];
$dataMaster = $db->query("SELECT * FROM tb_laptop_master WHERE serial_number='$GET'");
$resultdM   = mysqli_fetch_array($dataMaster);
?>
<title>History Laptop Summary [<?= $resultdM['serial_number']; ?>] - <?= $Rapps['app_name'] ?> | General Management</title>
<link href="assets/plugins/chosen/chosen.css" rel="stylesheet" type="text/css" />
<div class="dashboard-main-wrapper">
    <?php include "include/header.php"; ?>
    <?php include "include/sidebar.php"; ?>
    <div class="dashboard-wrapper">
        <!-- Content -->
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <!-- Page Title -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <div class="c-page">
                                <div class="bg-page">
                                    <i class="fas fa-laptop icon-page"></i>
                                </div>
                                <div style="margin-left: 10px;">
                                    <div>
                                        <h2 class="pageheader-title" style="color: #003369;">History Laptop: <?= $resultdM['serial_number']; ?> </h2>
                                    </div>
                                    <div style="margin-top: -10px;">
                                        <font>LAPTOP</font>
                                    </div>
                                </div>
                            </div>
                            <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Laptop Summary</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">History</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Page Title -->

                <!-- Back -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="#" onclick="history.back();" class="btn btn-primary"><i class="fas fa-caret-square-left"></i> Back</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Back -->

                <!-- First Row -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <section class="cd-timeline js-cd-timeline">
                                    <div class="cd-timeline__container">
                                        <!-- Data Master -->
                                        <div class="cd-timeline__block js-cd-block">
                                            <div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
                                                <img src="assets/vendor/timeline/img/allocation.png" alt="Picture">
                                            </div>
                                            <div class="cd-timeline__content js-cd-content">
                                                <h3>SN: <?= $resultdM['serial_number']; ?> - <?= $resultdM['product_name']; ?></h3>
                                                <div style="display: grid;margin-top: -12px;">
                                                    <font style="font-size: 12px;font-weight: 700;">Detail: <br><i style="font-size: 8px;font-weight: 500;">last time change <?= $resultdM['created_date']; ?></i></font>
                                                </div>
                                                <div class="page-divider"></div>
                                                <div class="row" style="margin-top: 10px;">
                                                    <div class="col-sm-6">
                                                        <div style="display: flex;justify-content:flex-start;align-items: center;">
                                                            <div class="table-icon">
                                                                <i class="fas fa-laptop"></i>
                                                            </div>
                                                            <div style="margin-left: 5px;">
                                                                <div style="font-size: 15px;font-weight: 500;">
                                                                    <font><?= $resultdM['hostname']; ?></font>
                                                                </div>
                                                                <div style="font-size: 12px;font-weight: 300;">
                                                                    <font><?= $resultdM['username']; ?></font>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div style="display: flex;justify-content:flex-start;align-items: center;">
                                                            <div class="table-icon">
                                                                <i class="fas fa-info-circle"></i>
                                                            </div>
                                                            <div style="margin-left: 5px;">
                                                                <div style="font-size: 15px;font-weight: 500;">
                                                                    <?php if ($resultdM['location_branch'] == NULL || $resultdM['location_branch'] == '-' || $resultdM['location_branch'] == 'NA' || $resultdM['location_branch'] == 'N/A' || $resultdM['location_branch'] == '#N/A') { ?>
                                                                        <font style="color: red;">Empty</font>
                                                                    <?php } else { ?>
                                                                        <?= $resultdM['location_branch']; ?>
                                                                    <?php } ?>
                                                                </div>
                                                                <div style="font-size: 12px;font-weight: 300;">
                                                                    <?php if ($resultdM['status_available'] == NULL || $resultdM['status_available'] == '-' || $resultdM['status_available'] == 'NA' || $resultdM['status_available'] == 'N/A' || $resultdM['status_available'] == '#N/A') { ?>
                                                                        <font style="color: red;">Empty</font>
                                                                    <?php } else { ?>
                                                                        <?= $resultdM['status_available']; ?>
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <hr />
                                                    </div>
                                                </div>
                                                <!-- <a href="#0" class="btn btn-primary btn-lg">Read More</a> -->
                                                <?php if ($resultdM['created_date'] == NULL) { ?>
                                                    <span class="cd-timeline__date">Date
                                                        <br>
                                                        <font style="font-size: 12px;font-weight:500"><i>Time</i></font>
                                                        <br>
                                                        <small><i class="fas fa-check-circle"></i> Data Master Current</small>
                                                    </span>
                                                <?php } else { ?>
                                                    <?php
                                                    $alldate = $resultdM['created_date'];
                                                    $tgl = substr($alldate, 0, 10);
                                                    $time = substr($alldate, 10, 20);
                                                    ?>
                                                    <span class="cd-timeline__date"><?= date_indo($tgl, TRUE); ?>
                                                        <br>
                                                        <font style="font-size: 12px;font-weight:500"><i><?= $time; ?></i></font>
                                                        <br>
                                                        <small><i class="fas fa-check-circle"></i> Data Master Current</small>
                                                    </span>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <!-- End Data Master -->
                                        <?php
                                        $dataTable = $db->query("SELECT * FROM tb_laptop_history WHERE serial_number='$GET' ORDER BY id DESC", 0);
                                        if (mysqli_num_rows($dataTable) > 0) {
                                            $no = 0;
                                            while ($row = mysqli_fetch_array($dataTable)) {
                                                $no++;
                                        ?>
                                                <div class="cd-timeline__block js-cd-block">
                                                    <div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
                                                        <?php if ($row['status_history'] == 'Change Username') { ?>
                                                            <img src="assets/vendor/timeline/img/users.png" alt="Picture">
                                                        <?php } else if ($row['status_history'] == 'Change Hostname') { ?>
                                                            <img src="assets/vendor/timeline/img/laptop.png" alt="Picture">
                                                        <?php } ?>
                                                    </div>
                                                    <div class="cd-timeline__content js-cd-content">
                                                        <h3>SN: <?= $row['serial_number']; ?> - <?= $row['product_name']; ?></h3>
                                                        <div style="display: grid;margin-top: -12px;">
                                                            <font style="font-size: 12px;font-weight: 700;">Detail: <br><i style="font-size: 8px;font-weight: 500;">last time <?= $row['status_history']; ?> <?= $row['created_date']; ?></i></font>
                                                        </div>
                                                        <div class="row" style="margin-top: 10px;">
                                                            <div class="col-sm-6">
                                                                <div style="display: flex;justify-content:flex-start;align-items: center;">
                                                                    <div class="table-icon">
                                                                        <i class="fas fa-laptop"></i>
                                                                    </div>
                                                                    <div style="margin-left: 5px;">
                                                                        <div style="font-size: 15px;font-weight: 500;">
                                                                            <font><?= $row['hostname']; ?></font>
                                                                        </div>
                                                                        <div style="font-size: 12px;font-weight: 300;">
                                                                            <font><?= $row['username']; ?></font>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div style="display: flex;justify-content:flex-start;align-items: center;">
                                                                    <div class="table-icon">
                                                                        <i class="fas fa-info-circle"></i>
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
                                                                            <?php if ($row['status_available'] == NULL || $row['status_available'] == '-' || $row['status_available'] == 'NA' || $row['status_available'] == 'N/A' || $row['status_available'] == '#N/A') { ?>
                                                                                <font style="color: red;">Empty</font>
                                                                            <?php } else { ?>
                                                                                <?= $row['status_available']; ?>
                                                                            <?php } ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <hr />
                                                            </div>
                                                        </div>
                                                        <!-- <a href="#0" class="btn btn-primary btn-lg">Read More</a> -->
                                                        <?php
                                                        $alldate = $row['created_date'];
                                                        $tgl = substr($alldate, 0, 10);
                                                        $time = substr($alldate, 10, 20);
                                                        ?>
                                                        <span class="cd-timeline__date"><?= date_indo($tgl, TRUE); ?>
                                                            <br>
                                                            <font style="font-size: 12px;font-weight:500"><i><?= $time; ?></i></font>
                                                            <br>
                                                            <small><i class="fas fa-clock"></i> History <?= $no ?></small>
                                                        </span>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        <?php } else { ?>
                                        <?php } ?>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End First Row -->
            </div>
        </div>
        <!-- End Content -->
        <?php include "include/copyright.php"; ?>
    </div>
</div>
<?php include "include/footer.php"; ?>
<?php include "include/dataTablesJS.php"; ?>
<script src="assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js"></script>
<!-- New Mask -->
<script src="assets/plugins/mask/dist/jquery.mask.min.js"></script>
<!-- End New Mask -->
<script type="text/javascript" src="assets/plugins/chosen/chosen.jquery.js"></script>
<script type="text/javascript">
    // Product Name
    $(function() {
        $("#IdProductName").autocomplete({
            source: 'function/autocomplete/data_scanner.php?function=AutoProductName'
        });
    });
    // Brand
    $(function() {
        $("#IdBrand").autocomplete({
            source: 'function/autocomplete/data_scanner.php?function=AutoBrand'
        });
    });
    // Username
    $(function() {
        $("#IdUsername").autocomplete({
            source: 'function/autocomplete/data_scanner.php?function=AutoUsername'
        });
    });
    // Select Find
    // Single
    $("#IdDeviceRelease").chosen({
        width: "100%"
    });
    $("#IdBranchLocation").chosen({
        width: "100%"
    });
    $("#IdRoomLocation").chosen({
        width: "100%"
    });
    $("#IdAssetof").chosen({
        width: "100%"
    });
    $("#IdPurchaseYears").chosen({
        width: "100%"
    });
    $("#IdPurchaseBatch").chosen({
        width: "100%"
    });
    // Multiple
    $("#IdCostCenter").chosen({
        width: "95%"
    });

    // Masking
    $(document).ready(function() {
        $('#IdDiskSpace').mask('###.###.###.###.###.###', {
            reverse: true
        });
        $('#IdMemory').mask('99', {
            reverse: true
        });
        $('#IdPrices').mask('###.###.###.###.###.###', {
            reverse: true
        });
    })
</script>
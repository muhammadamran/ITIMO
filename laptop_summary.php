<?php
include 'include/connection.php';
include 'include/restrict.php';
include 'include/head.php';
include 'include/alert.php';
include 'include/dataTablesCSS.php';
?>
<?php
$FindSerialNumber = '';
$FindProductName  = '';
$FindBrand        = '';
$FindHostname     = '';
$FindUsername     = '';
$FindUS           = '';
$FindOS           = '';
$FindBranchLoc    = '';
?>
<title>Laptop Summary - <?= $Rapps['app_name'] ?> | General Management</title>
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
                                        <h2 class="pageheader-title" style="color: #003369;">Laptop Summary </h2>
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
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Page Title -->

                <!-- Filter -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header"><i class="fas fa-filter"></i> Filter Data Laptop Summary</h5>
                            <div class="card-body">
                                <form action="" method="POST">
                                    <fieldset>
                                        <div class="row">
                                            <!-- Find Serial Number -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="IdFindSerialNumber">Serial Number</label>
                                                    <input type="text" class="form-control" name="FindSerialNumber" id="IdFindSerialNumber" value="<?= $FindSerialNumber; ?>" placeholder="Serial Number ..." />
                                                </div>
                                            </div>
                                            <!-- Find Product Name -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="IdFindProductName">Product Name</label>
                                                    <input type="text" class="form-control" name="FindProductName" id="IdFindProductName" value="<?= $FindProductName; ?>" placeholder="Product Name ..." />
                                                </div>
                                            </div>
                                            <!-- Find Brand -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="IdFindBrand">Brand</label>
                                                    <input type="text" class="form-control" name="FindBrand" id="IdFindBrand" value="<?= $FindBrand; ?>" placeholder="Brand ..." />
                                                </div>
                                            </div>
                                            <!-- Find Hostname -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="IdFindHostname">Hostname</label>
                                                    <input type="text" class="form-control" name="FindHostname" id="IdFindHostname" value="<?= $FindHostname; ?>" placeholder="Hostname ..." />
                                                </div>
                                            </div>
                                            <!-- Find Username -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="IdFindUsername">Username</label>
                                                    <input type="text" class="form-control" name="FindUsername" id="IdFindUsername" value="<?= $FindUsername; ?>" placeholder="Username ..." />
                                                </div>
                                            </div>
                                            <!-- Find Usage State -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="IdFindUS">Usage State</label>
                                                    <input type="text" class="form-control" name="FindUS" id="IdFindUS" value="<?= $FindUS; ?>" placeholder="Usage State ..." />
                                                </div>
                                            </div>
                                            <!-- Find Ownership Status -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="IdFindOS">Ownership Status</label>
                                                    <input type="text" class="form-control" name="FindOS" id="IdFindOS" value="<?= $FindOS; ?>" placeholder="Ownership Status ..." />
                                                </div>
                                            </div>
                                            <!-- Find Branch Loc -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="IdFindBranchLoc">Branch Location</label>
                                                    <input type="text" class="form-control" name="FindBranchLoc" id="IdFindBranchLoc" value="<?= $FindBranchLoc; ?>" placeholder="Branch Location ..." />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <hr />
                                            </div>
                                            <div class="col-md-12" style="display: flex;justify-content: flex-end;align-items: center;">
                                                <a href="" class="btn btn-behind-green" data-dismiss="modal" style="margin-right: 5px;"><i class="fas fa-refresh"></i> Refresh</a>
                                                <button type="submit" name="find_filter" class="btn btn-primary"><i class="fas fa-filter"></i> Filter</button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Filter -->

                <!-- First Row -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header"><i class="fas fa-list"></i> Data Laptop Summary</h5>
                            <!-- Add Laptop  -->
                            <div class="row">
                                <div class="col-sm-3" style="margin-top: 15px;margin-left: 15px;">
                                    <a href="laptop_summary_add.php" target="_blank" class="btn btn-sm btn-primary" title="Add Laptop"><i class="fas fa-plus-circle"></i>
                                        <font class="f-action">Add Laptop</font>
                                    </a>
                                </div>
                            </div>
                            <!-- End Add Laptop  -->
                            <hr />
                            <div class="card-body">
                                <div class="table-responsive">
                                    <?php include "table/t_laptop_summary.php"; ?>
                                </div>
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
<script type="text/javascript">
    // Find
    $(function() {
        $("#IdFindSerialNumber").autocomplete({
            source: 'function/autocomplete/data.php?function=AutoFindSerialNumber'
        });
    });
    $(function() {
        $("#IdFindProductName").autocomplete({
            source: 'function/autocomplete/data.php?function=AutoFindProductName'
        });
    });
    $(function() {
        $("#IdFindBrand").autocomplete({
            source: 'function/autocomplete/data.php?function=AutoFindBrand'
        });
    });
    $(function() {
        $("#IdFindHostname").autocomplete({
            source: 'function/autocomplete/data.php?function=AutoFindHostname'
        });
    });
    $(function() {
        $("#IdFindUsername").autocomplete({
            source: 'function/autocomplete/data.php?function=AutoFindUsername'
        });
    });
    $(function() {
        $("#IdFindUS").autocomplete({
            source: 'function/autocomplete/data.php?function=AutoFindUS'
        });
    });
    $(function() {
        $("#IdFindOS").autocomplete({
            source: 'function/autocomplete/data.php?function=AutoFindOS'
        });
    });
    $(function() {
        $("#IdFindBranchLoc").autocomplete({
            source: 'function/autocomplete/data.php?function=AutoFindBranchLoc'
        });
    });
</script>
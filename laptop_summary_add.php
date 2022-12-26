<?php
include 'include/connection.php';
include 'include/restrict.php';
include 'include/head.php';
include 'include/alert.php';
include 'include/dataTablesCSS.php';
?>
<title>Add Laptop Summary - <?= $Rapps['app_name'] ?> | General Management</title>
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
                                        <h2 class="pageheader-title" style="color: #003369;">Add Laptop Summary </h2>
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
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Add</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Page Title -->

                <!-- First Row -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header"><i class="fas fa-plus-circle"></i> Add Laptop</h5>
                            <div class="card-body">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="IdSerial Number">Serial Number <font style="color: red;">*</font></label>
                                                <input type="text" class="form-control" name="SerialNumber" id="IdSerialNumber" placeholder="Serial Number ..." required />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="IdProductName">Product Name <font style="color: red;">*</font></label>
                                                <input type="text" class="form-control" name="ProductName" id="IdProductName" placeholder="Product Name ..." required />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="IdBrand">Brand <font style="color: red;">*</font></label>
                                                <input type="text" class="form-control" name="Brand" id="IdBrand" placeholder="Brand ..." required />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="IdDeviceRelease">Device Release <font style="color: red;">*</font></label>
                                                <select class="form-control" name="DeviceRelease" id="IdDeviceRelease" placeholder="Device Release ..." required>
                                                    <option value="">Choose Device Release</option>
                                                    <?php
                                                    for ($i = date('Y'); $i >= date('Y') - 20; $i -= 1) {
                                                        echo "<option value='$i'> $i </option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="IdMemory">Memory <font style="color: red;">*</font></label>
                                                <div class="input-group mb-3">
                                                    <input type="number" class="form-control" name="Memory" id="IdMemory" placeholder="Memory ..." required>
                                                    <div class="input-group-append"><span class="input-group-text">RAM</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="IdDiskSpace">Disk Space <font style="color: red;">*</font></label>
                                                <div class="input-group mb-3">
                                                    <input type="number" class="form-control" name="DiskSpace" id="IdDiskSpace" placeholder="Disk Space ..." required>
                                                    <div class="input-group-append"><span class="input-group-text">GB</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="IdDiskType">Disk Type <font style="color: red;">*</font></label>
                                                <select class="form-control" name="DiskType" id="IdDiskType" placeholder="Disk Type ..." required>
                                                    <option value="">Choose Disk Type</option>
                                                    <option value="HDD">HDD</option>
                                                    <option value="SSD">SSD</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="IdProcessor">Processor <font style="color: red;">*</font></label>
                                                <input type="text" class="form-control" name="Processor" id="IdProcessor" placeholder="Processor ..." required />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="IdHostname">Hostname <font style="color: red;">*</font></label>
                                                <input type="text" class="form-control" name="Hostname" id="IdHostname" placeholder="Hostname ..." required />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="IdUsername">Username <font style="color: red;">*</font></label>
                                                <input type="text" class="form-control" name="Username" id="IdUsername" placeholder="Username ..." required />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="IdUsageState">Usage State <font style="color: red;">*</font></label>
                                                <select class="form-control" name="UsageState" id="IdUsageState" placeholder="Usage State ..." required>
                                                    <option value="">Choose Usage State</option>
                                                    <option value="In Use">In Use</option>
                                                    <option value="Not In Use">Not In Use</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="IdOwnershipStatus">Ownership Status <font style="color: red;">*</font></label>
                                                <select class="form-control" name="OwnershipStatus" id="IdOwnershipStatus" placeholder="Ownership Status ..." required>
                                                    <option value="">Choose Ownership Status</option>
                                                    <option value="NEW">NEW</option>
                                                    <option value="PERMANENT">PERMANENT</option>
                                                    <option value="AVAILABLE">AVAILABLE</option>
                                                    <option value="BROKEN">BROKEN</option>
                                                    <option value="DISPOSED">DISPOSED</option>
                                                    <option value="TEMP">TEMP</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="IdBranchLocation">Branch Location <font style="color: red;">*</font></label>
                                                <select class="form-control" name="BranchLocation" id="IdBranchLocation" placeholder="Branch Location ..." required>
                                                    <option value="">Choose Branch Location</option>
                                                    <?php
                                                    $dataBU = $db->query("SELECT * FROM references_branch ORDER BY id ASC");
                                                    foreach ($dataBU as $optionBU) {
                                                    ?>
                                                        <option data-tokens="<?= $optionBU['branch_name'] ?>" value="<?= $optionBU['branch_name'] ?>"><?= $optionBU['branch_name'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="IdRoomLocation">Room Location <font style="color: red;">*</font></label>
                                                <select class="form-control" name="RoomLocation" id="IdRoomLocation" placeholder="Room Location ..." required>
                                                    <option value="">Choose Room Location</option>
                                                    <?php
                                                    $dataBU = $db->query("SELECT * FROM references_room_loc ORDER BY id ASC");
                                                    foreach ($dataBU as $optionBU) {
                                                    ?>
                                                        <option data-tokens="<?= $optionBU['room'] ?>" value="<?= $optionBU['room'] ?>"><?= $optionBU['room'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <font style="color: red;">*</font> <i>Required.</i>
                                        </div>
                                    </div>
                                </fieldset>
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
<script type="text/javascript" src="assets/plugins/chosen/chosen.jquery.js"></script>
<script type="text/javascript">
    // Product Name
    $(function() {
        $("#IdProductName").autocomplete({
            source: 'function/autocomplete/data.php?function=AutoProductName'
        });
    });
    // Brand
    $(function() {
        $("#IdBrand").autocomplete({
            source: 'function/autocomplete/data.php?function=AutoBrand'
        });
    });
    // Username
    $(function() {
        $("#IdUsername").autocomplete({
            source: 'function/autocomplete/data.php?function=AutoUsername'
        });
    });
    // Select Find
    $("#IdDeviceRelease").chosen({
        width: "100%"
    });
    $("#IdBranchLocation").chosen({
        width: "100%"
    });
    $("#IdRoomLocation").chosen({
        width: "100%"
    });
</script>
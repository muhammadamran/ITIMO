<?php
include 'include/connection.php';
include 'include/restrict.php';
include 'include/head.php';
include 'include/alert.php';
include 'include/dataTablesCSS.php';
?>
<?php
// Import XLS
if (isset($_POST["import_"])) {
    if (isset($_FILES["ImportXLS"])) {
        // Info Page
        $page      = 'laptop_summary.php';
        // End Info Page

        $created_by         = $_SESSION['username'];
        $created_date       = date('Y-m-d H:m:i');

        $dir = "files/import/laptop/";
        $timeUpload = date('Y-m-d-h-m-i');
        $file_name = "Laptop_" . $timeUpload . "_" . $_FILES["ImportXLS"]["name"];
        $size = $_FILES["ImportXLS"]["size"];
        $tmp_file_name = $_FILES["ImportXLS"]["tmp_name"];
        $filename = $_FILES['ImportXLS']['name'];
        $exp = explode('.', $filename);
        $ext = end($exp);
        if ($ext == 'xlsx' || $ext == 'xls' || $ext == 'xlsm' || $ext == 'xlsb') {
            move_uploaded_file($tmp_file_name, $dir . $file_name);
            include 'laptop_read_file.php';
            $update = $db->query("UPDATE tb_laptop_master SET created_by='$created_by',
                                                              created_date='$created_date'
                                WHERE created_by IS NULL");
            echo "<script>window.location.href='laptop_summary.php?UploadSuccess=true&page=$page';</script>";
        } else {
            echo "<script>window.location.href='laptop_summary.php?Available=true&page=$page';</script>";
        }
    } else {
        echo "File not selected";
        echo "<script>window.location.href='laptop_summary.php?UploadFailed=true&page=$page';</script>";
    }
}

// Add
if (isset($_POST["add_"])) {
    // Info Page
    $page      = 'laptop_summary.php';
    // End Info Page

    // serial_number
    $SerialNumber       = $_POST['SerialNumber'];
    // product_name
    $ProductName        = $_POST['ProductName'];
    // brand
    $Brand              = $_POST['Brand'];
    // device_releases_years
    $DeviceRelease      = $_POST['DeviceRelease'];
    // memory
    $Memory             = $_POST['Memory'];
    // disk
    $DiskSpace          = $_POST['DiskSpace'];
    // disk_type
    $DiskType           = $_POST['DiskType'];
    // processor
    $Processor          = $_POST['Processor'];
    // hostname
    $Hostname           = $_POST['Hostname'];
    // username
    $Username           = $_POST['Username'];
    // status_use
    $UsageState         = $_POST['UsageState'];
    // status_available
    $OwnershipStatus    = $_POST['OwnershipStatus'];
    // location_branch
    $BranchLocation     = $_POST['BranchLocation'];
    // location_room
    $RoomLocation       = $_POST['RoomLocation'];
    // po_no
    $PONumber           = $_POST['PONumber'];
    // cost_center
    $CostCenter         = $_POST['CostCenter'];
    $CC                 = "";
    foreach ($CostCenter as $row) {
        $CC .= $row . ",";
    }
    // asset_no
    $AssetNumber        = $_POST['AssetNumber'];
    // asset_of
    $Assetof            = $_POST['Assetof'];
    // purchase_year
    $PurchaseYear       = $_POST['PurchaseYear'];
    // purchase_batch
    $PurchaseBatch      = $_POST['PurchaseBatch'];
    // prices
    $Prices             = $_POST['Prices'];
    // remarks
    $Remarks            = $_POST['Remarks'];
    $created_by         = $_SESSION['username'];
    $created_date       = date('Y-m-d H:m:i');

    $available = $db->query("SELECT serial_number,product_name,brand FROM tb_laptop_master WHERE serial_number='$SerialNumber' AND product_name='$ProductName' AND brand='$Brand'");
    if (mysqli_num_rows($available) == 1) {
        echo "<script>window.location.href='laptop_summary.php?Available=true&page=$page';</script>";
    } else {
        $insert = $db->query("INSERT INTO tb_laptop_master
                            (id,type,serial_number,product_name,brand,device_releases_years,memory,disk,disk_type,processor,hostname,username,status_use,status_available,location_branch,location_room,po_no,cost_center,asset_no,asset_of,purchase_year,purchase_batch,prices,remarks,created_by,created_date)
                            VALUES
                            ('','LAPTOP','$SerialNumber','$ProductName','$Brand','$DeviceRelease','$Memory','$DiskSpace','$DiskType','$Processor','$Hostname','$Username','$UsageState','$OwnershipStatus','$BranchLocation','$RoomLocation','$PONumber','$CC','$AssetNumber','$Assetof','$PurchaseYear','$PurchaseBatch','$Prices','$Remarks','$created_by','$created_date')
                            ");

        if ($insert) {
            echo "<script>window.location.href='laptop_summary.php?InsertSuccess=true&page=$page';</script>";
        } else {
            echo "<script>window.location.href='laptop_summary.php?InsertFailed=true&page=$page';</script>";
        }
    }
}

// Edit
if (isset($_POST["edit_"])) {
    // Info Page
    $page      = 'laptop_summary.php';
    // End Info Page

    $ID                 = $_POST['ID'];
    $SerialNumber       = $_POST['SerialNumber'];
    $ProductName        = $_POST['ProductName'];
    $Brand              = $_POST['Brand'];
    $DeviceRelease      = $_POST['DeviceRelease'];
    $Memory             = $_POST['Memory'];
    $DiskSpace          = $_POST['DiskSpace'];
    $DiskType           = $_POST['DiskType'];
    $Processor          = $_POST['Processor'];
    $Hostname           = $_POST['Hostname'];
    $Username           = $_POST['Username'];
    $UsageState         = $_POST['UsageState'];
    $OwnershipStatus    = $_POST['OwnershipStatus'];
    $BranchLocation     = $_POST['BranchLocation'];
    $RoomLocation       = $_POST['RoomLocation'];
    $PONumber           = $_POST['PONumber'];
    $CostCenter         = $_POST['CostCenter'];
    $CC                 = "";
    foreach ($CostCenter as $row) {
        $CC .= $row . ",";
    }
    $AssetNumber        = $_POST['AssetNumber'];
    $Assetof            = $_POST['Assetof'];
    $PurchaseYear       = $_POST['PurchaseYear'];
    $PurchaseBatch      = $_POST['PurchaseBatch'];
    $Prices             = $_POST['Prices'];
    $Remarks            = $_POST['Remarks'];
    $created_by         = $_SESSION['username'];
    $created_date       = date('Y-m-d H:m:i');

    $edit    = $db->query("UPDATE tb_laptop_master SET serial_number='$SerialNumber',
                                                       product_name='$ProductName',
                                                       brand='$Brand',
                                                       device_releases_years='$DeviceRelease',
                                                       memory='$Memory',
                                                       disk='$DiskSpace',
                                                       disk_type='$DiskType',
                                                       processor='$Processor',
                                                       hostname='$Hostname',
                                                       username='$Username',
                                                       status_use='$UsageState',
                                                       status_available='$OwnershipStatus',
                                                       location_branch='$BranchLocation',
                                                       location_room='$RoomLocation',
                                                       po_no='$PONumber',
                                                       cost_center='$CC',
                                                       asset_no='$AssetNumber',
                                                       asset_of='$Assetof',
                                                       purchase_year='$PurchaseYear',
                                                       purchase_batch='$PurchaseBatch',
                                                       prices='$Prices',
                                                       remarks='$Remarks',
                                                       created_by='$created_by',
                                                       created_date='$created_date'
                           WHERE id='$ID'");

    if ($edit) {
        echo "<script>window.location.href='laptop_summary.php?UpdateSuccess=true&page=$page';</script>";
    } else {
        echo "<script>window.location.href='laptop_summary.php?UpdateFailed=true&page=$page';</script>";
    }
}
// Delete
if (isset($_POST["delete_"])) {
    // Info Page
    $page      = 'laptop_summary.php';
    // End Info Page

    $ID        = $_POST['ID'];

    $delete    = $db->query("DELETE FROM tb_laptop_master WHERE id='$ID'");

    if ($delete) {
        echo "<script>window.location.href='laptop_summary.php?DeleteSuccess=true&page=$page';</script>";
    } else {
        echo "<script>window.location.href='laptop_summary.php?DeleteFailed=true&page=$page';</script>";
    }
}

$FindSerialNumber = '';
$FindProductName  = '';
$FindBrand        = '';
$FindHostname     = '';
$FindUsername     = '';
$FindUS           = '';
$FindOS           = '';
$FindBranchLoc    = '';
if (isset($_POST["find_filter"])) {
    if ($_POST["FindSerialNumber"] != '') {
        $FindSerialNumber = $_POST['FindSerialNumber'];
    }

    if ($_POST["FindProductName"] != '') {
        $FindProductName = $_POST['FindProductName'];
    }

    if ($_POST["FindBrand"] != '') {
        $FindBrand = $_POST['FindBrand'];
    }

    if ($_POST["FindHostname"] != '') {
        $FindHostname = $_POST['FindHostname'];
    }

    if ($_POST["FindUsername"] != '') {
        $FindUsername = $_POST['FindUsername'];
    }

    if ($_POST["FindUS"] != '') {
        $FindUS = $_POST['FindUS'];
    }

    if ($_POST["FindOS"] != '') {
        $FindOS = $_POST['FindOS'];
    }

    if ($_POST["FindBranchLoc"] != '') {
        $FindBranchLoc = $_POST['FindBranchLoc'];
    }
}
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
                            <div style="display: flex;justify-content: space-between;align-items: center;">
                                <div>
                                    <h5 class="card-header-custom"><i class="fas fa-list"></i> Data Laptop Summary</h5>
                                </div>
                                <div>
                                    <div class="card-header-custom">
                                        <a href="laptop_summary_allocate.php" target="_blank" class="btn btn-sm btn-primary" title="Allocate Device"><i class="fas fa-user-plus"></i></i>
                                            <font class="f-action"></font>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <!-- Add Laptop  -->
                            <div class="row">
                                <div class="col-sm-3" style="margin-top: 0px;margin-left: 15px;">
                                    <!-- Add Laptop -->
                                    <a href="laptop_summary_add.php" target="_blank" class="btn btn-sm btn-primary" title="Add Laptop"><i class="fas fa-plus-circle"></i>
                                        <font class="f-action"></font>
                                    </a>
                                    <!-- End Add Laptop -->
                                    <!-- Add Import XLS -->
                                    <a href="#modal-Import-XLS" class="btn btn-sm btn-primary" data-toggle="modal" title="Import XLS"><i class="fas fa-file-upload"></i>
                                        <font class="f-action"> Import XLS</font>
                                    </a>
                                    <div class="modal fade" id="modal-Import-XLS">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form action="" method="POST" enctype="multipart/form-data">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">[File Data] Import XLS</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <fieldset>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="IdImportXLS">Import XLS <font style="color: red;">*</font></label>
                                                                        <input type="file" class="form-control" name="ImportXLS" id="IdImportXLS" placeholder="Import XLS ..." required />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <font style="color: red;">*</font> <i>Required.</i>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="javascript:;" class="btn btn-light" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</a>
                                                        <button type="submit" name="import_" class="btn btn-primary"><i class="fas fa-file-upload"></i> Import</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Add Import XLS -->
                                    <!-- Download Template -->
                                    <a href="files/template/laptop/template_laptop_master.xls" target="_blank" class="btn btn-sm btn-primary" title="Download Template"><i class="fas fa-file-download"></i>
                                        <font class="f-action"> Template XLS</font>
                                    </a>
                                    <!-- End Download Template -->
                                </div>
                            </div>
                            <!-- End Add Laptop  -->
                            <hr />
                            <div style="padding: 15px;">
                                <div class="alert alert-primary" role="alert">
                                    <h4 class="alert-heading">Information!</h4>
                                    <?php
                                    $TotalData       = $db->query("SELECT COUNT(*) AS total_,
                                                                   (SELECT COUNT(*) FROM tb_laptop_master WHERE status_available='AVAILABLE') AS t_AVAILABLE,
                                                                   (SELECT COUNT(*) FROM tb_laptop_master WHERE status_available='BROKEN') AS t_BROKEN,
                                                                   (SELECT COUNT(*) FROM tb_laptop_master WHERE status_available='DISPOSED') AS t_DISPOSED,
                                                                   (SELECT COUNT(*) FROM tb_laptop_master WHERE status_available='PERMANENT') AS t_PERMANENT,
                                                                   (SELECT COUNT(*) FROM tb_laptop_master WHERE status_available='TEMP') AS t_TEMP,
                                                                   (SELECT COUNT(*) FROM tb_laptop_master WHERE status_available IS NULL OR status_available='' OR status_available='-' OR status_available='NA' OR status_available='N/A' OR status_available='#N/A') AS t_NULL
                                                                   FROM tb_laptop_master");
                                    $resultTotalData = mysqli_fetch_array($TotalData);
                                    ?>
                                    <p>
                                        Total Serial Number <b><?= $resultTotalData['total_']; ?> Laptop.</b> Details Status Devices:
                                    <ul>
                                        <li>AVAILABLE <b><?= $resultTotalData['t_AVAILABLE']; ?></b></li>
                                        <li>BROKEN <b><?= $resultTotalData['t_BROKEN']; ?></b></li>
                                        <li>DISPOSED <b><?= $resultTotalData['t_DISPOSED']; ?></b></li>
                                        <li>PERMANENT <b><?= $resultTotalData['t_PERMANENT']; ?></b></li>
                                        <li>TEMP <b><?= $resultTotalData['t_TEMP']; ?></b></li>
                                        <li>??? <b><?= $resultTotalData['t_NULL']; ?></b></li>
                                    </ul>
                                    </p>
                                    <hr>
                                    <p class="mb-0">Total Details Status Devices: <b><?= $resultTotalData['t_AVAILABLE'] + $resultTotalData['t_BROKEN'] + $resultTotalData['t_DISPOSED'] + $resultTotalData['t_PERMANENT'] + $resultTotalData['t_TEMP'] + $resultTotalData['t_NULL']; ?> </b>.</p>
                                </div>
                            </div>
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
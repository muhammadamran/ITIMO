<?php
include 'include/connection.php';
include 'include/restrict.php';
include 'include/head.php';
include 'include/alert.php';
include 'include/dataTablesCSS.php';
$data       = $db->query("SELECT * FROM tb_laptop_master WHERE id='" . $_GET['ID'] . "'");
$row        = mysqli_fetch_array($data);
?>
<title>Edit Laptop Summary - <?= $Rapps['app_name'] ?> | General Management</title>
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
                                        <h2 class="pageheader-title" style="color: #003369;">Edit Laptop Summary </h2>
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
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Edit</a></li>
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
                                <a href="laptop_summary.php" class="btn btn-primary"><i class="fas fa-caret-square-left"></i> Back</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Back -->

                <!-- First Row -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header"><i class="fas fa-plus-circle"></i> Edit Laptop</h5>
                            <div class="card-body">
                                <form action="laptop_summary.php" method="POST" enctype="multipart/form-data">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="IdSerialNumber">Serial Number</label>
                                                            <input type="text" class="form-control" name="SerialNumber" id="IdSerialNumber" value="<?= $row['serial_number']; ?>" placeholder="Serial Number ..." readonly />
                                                            <input type="hidden" name="ID" value="<?= $row['id']; ?>" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="IdProductName">Product Name</label>
                                                            <input type="text" class="form-control" name="ProductName" id="IdProductName" value="<?= $row['product_name']; ?>" placeholder="Product Name ..." />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="IdBrand">Brand</label>
                                                            <input type="text" class="form-control" name="Brand" id="IdBrand" value="<?= $row['brand']; ?>" placeholder="Brand ..." />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="IdDeviceRelease">Device Release</label>
                                                            <select class="form-control" name="DeviceRelease" id="IdDeviceRelease" placeholder="Device Release ...">
                                                                <option value="<?= $row['device_releases_years']; ?>"><?= $row['device_releases_years']; ?></option>
                                                                <option value="">Choose Device Release</option>
                                                                <?php
                                                                for ($iYear = date('Y'); $iYear >= date('Y') - 20; $iYear -= 1) {
                                                                    echo "<option value='$iYear'> $iYear </option>";
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="IdMemory">Memory Size</label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" name="Memory" id="IdMemory" value="<?= $row['memory']; ?>" placeholder="Memory Size ...">
                                                                <div class="input-group-append"><span class="input-group-text">GB</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="IdDiskSpace">Disk Space Size</label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" name="DiskSpace" id="IdDiskSpace" value="<?= $row['disk']; ?>" placeholder="Disk Space Size ...">
                                                                <div class="input-group-append"><span class="input-group-text">GB</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="IdDiskType">Disk Type</label>
                                                            <select class="form-control" name="DiskType" id="IdDiskType" placeholder="Disk Type ...">
                                                                <option value="<?= $row['disk_type']; ?>"><?= $row['disk_type']; ?></option>
                                                                <option value="">Choose Disk Type</option>
                                                                <option value="HDD">HDD</option>
                                                                <option value="SSD">SSD</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="IdProcessor">Processor</label>
                                                            <input type="text" class="form-control" name="Processor" id="IdProcessor" value="<?= $row['processor']; ?>" placeholder="Processor ..." />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="IdHostname">Hostname</label>
                                                            <input type="text" class="form-control" name="Hostname" id="IdHostname" value="<?= $row['hostname']; ?>" placeholder="Hostname ..." readonly />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="IdUsername">Username</label>
                                                            <input type="text" class="form-control" name="Username" id="IdUsername" value="<?= $row['username']; ?>" placeholder="Username ..." readonly />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="IdUsageState">Usage State</label>
                                                            <select class="form-control" name="UsageState" id="IdUsageState" placeholder="Usage State ...">
                                                                <option value="<?= $row['status_use']; ?>"><?= $row['status_use']; ?></option>
                                                                <option value="">Choose Usage State</option>
                                                                <option value="In Use">In Use</option>
                                                                <option value="Not In Use">Not In Use</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="IdOwnershipStatus">Ownership Status</label>
                                                            <select class="form-control" name="OwnershipStatus" id="IdOwnershipStatus" placeholder="Ownership Status ...">
                                                                <option value="<?= $row['status_available']; ?>"><?= $row['status_available']; ?></option>
                                                                <option value="">Choose Ownership Status</option>
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
                                                            <label for="IdBranchLocation">Branch Location</label>
                                                            <select class="form-control" name="BranchLocation" id="IdBranchLocation" placeholder="Branch Location ...">
                                                                <option value="<?= $row['location_branch']; ?>"><?= $row['location_branch']; ?></option>
                                                                <option value="">Choose Branch Location</option>
                                                                <?php
                                                                $dataBL = $db->query("SELECT * FROM references_branch ORDER BY id ASC");
                                                                foreach ($dataBL as $optionBL) {
                                                                ?>
                                                                    <option data-tokens="<?= $optionBL['branch_name'] ?>" value="<?= $optionBL['branch_name'] ?>"><?= $optionBL['branch_name'] ?></option>
                                                                <?php } ?>
                                                            </select>
                                                            <a href="references_branch.php" target="_blank"><i class="far fa-plus"></i> <small>Open master</small></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="IdRoomLocation">Room Location</label>
                                                            <select class="form-control" name="RoomLocation" id="IdRoomLocation" placeholder="Room Location ...">
                                                                <option value="<?= $row['location_room']; ?>"><?= $row['location_room']; ?></option>
                                                                <option value="">Choose Room Location</option>
                                                                <?php
                                                                $dataRL = $db->query("SELECT * FROM references_room_loc ORDER BY id ASC");
                                                                foreach ($dataRL as $optionRL) {
                                                                ?>
                                                                    <option data-tokens="<?= $optionRL['room'] ?>" value="<?= $optionRL['room'] ?>"><?= $optionRL['room'] ?></option>
                                                                <?php } ?>
                                                            </select>
                                                            <a href="references_room_loc.php" target="_blank"><i class="far fa-plus"></i> <small>Open master</small></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="IdPONumber">PO Number</label>
                                                            <input type="text" class="form-control" name="PONumber" id="IdPONumber" value="<?= $row['po_no']; ?>" placeholder="PO Number ..." />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="IdCostCenter">Cost Center</label>
                                                            <select class="form-control" name="CostCenter[]" id="IdCostCenter" multiple placeholder="Cost Center ...">
                                                                <?php
                                                                // FOR COST CENTER
                                                                $expl       = explode(',', $row['cost_center'], -1);
                                                                foreach ($expl as $dataCC) {
                                                                ?>
                                                                    <option value="<?= $dataCC; ?>" selected><?= $dataCC; ?></option>
                                                                <?php } ?>
                                                                <option value="">Choose Cost Center</option>
                                                                <?php
                                                                $dataCC = $db->query("SELECT * FROM references_costcenter ORDER BY id ASC");
                                                                foreach ($dataCC as $optionCC) {
                                                                ?>
                                                                    <option data-tokens="<?= $optionCC['costcenter'] ?>" value="<?= $optionCC['costcenter'] ?>"><?= $optionCC['costcenter'] ?></option>
                                                                <?php } ?>
                                                            </select>
                                                            <a href="references_costcenter.php" target="_blank"><i class="far fa-plus"></i> <small>Open master</small></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="IdAssetNumber">Asset Number</label>
                                                            <input type="text" class="form-control" name="AssetNumber" id="IdAssetNumber" value="<?= $row['asset_no']; ?>" placeholder="Asset Number ..." />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="IdAssetof">Asset of</label>
                                                            <select class="form-control" class="form-control" name="Assetof" id="IdAssetof" placeholder="Asset of ...">
                                                                <option value="<?= $row['asset_of']; ?>"><?= $row['asset_of']; ?></option>
                                                                <option value="">Choose Assets of</option>
                                                                <?php
                                                                $dataBU = $db->query("SELECT * FROM references_bu ORDER BY id ASC");
                                                                foreach ($dataBU as $optionBU) {
                                                                ?>
                                                                    <option data-tokens="<?= $optionBU['bu_name'] ?>" value="<?= $optionBU['bu_name'] ?>"><?= $optionBU['bu_name'] ?></option>
                                                                <?php } ?>
                                                                <option value="CL">CL</option>
                                                                <option value="ES">ES</option>
                                                                <option value="ESA">ESA</option>
                                                                <option value="ESKO">ESKO</option>
                                                                <option value="ESN">ESN</option>
                                                                <option value="ESTM">ESTM</option>
                                                                <option value="SC">SC</option>
                                                                <option value="VVS">VVS</option>
                                                                <option value="AC">AC</option>
                                                                <option value="BM">BM</option>
                                                                <option value="OCC">OCC</option>
                                                                <option value="SC">SC</option>
                                                                <option value="SPE">SPE</option>
                                                                <option value="LIIP">LIIP</option>
                                                                <option value="NAC">NAC</option>
                                                                <option value="NFL">NFL</option>
                                                                <option value="NP">NP</option>
                                                                <option value="SPS">SPS</option>
                                                                <option value="VVS">VVS</option>
                                                                <option value="ZO">ZO</option>
                                                                <option value="ZS">ZS</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="IdPurchaseYears">Purchase Years</label>
                                                            <select class="form-control" name="PurchaseYear" id="IdPurchaseYears" placeholder="Purchase Years ...">
                                                                <option value="<?= $row['purchase_year']; ?>"><?= $row['purchase_year']; ?></option>
                                                                <option value="">Choose Purchase Years</option>
                                                                <?php
                                                                for ($pYear = date('Y'); $pYear >= date('Y') - 20; $pYear -= 1) {
                                                                    echo "<option value='$pYear'> $pYear </option>";
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="IdPurchaseBatch">Purchase Batch</label>
                                                            <select class="form-control" name="PurchaseBatch" id="IdPurchaseBatch" placeholder="Purchase Batch ...">
                                                                <option value="<?= $row['purchase_batch']; ?>"><?= $row['purchase_batch']; ?></option>
                                                                <option value="">Choose Purchase Batch</option>
                                                                <?php
                                                                $Batch = 0;
                                                                while ($Batch <= 99) {
                                                                    $Batch++;
                                                                    echo "<option value='$Batch'> $Batch </option>";
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="IdPrices">Prices</label>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-append"><span class="input-group-text">Rp.</span></div>
                                                                <input type="text" class="form-control" name="Prices" id="IdPrices" value="<?= $row['prices']; ?>" placeholder="Prices ...">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="IdRemarks">Remarks</label>
                                                            <textarea type="text" class="form-control" name="Remarks" id="IdRemarks" placeholder="Remarks ..."><?= $row['remarks']; ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="custom-control custom-checkbox" for="myCheck">
                                                    <input type="checkbox" class="custom-control-input" id="myCheck" name="check" value="Y" onclick="myFunctionChanged()"><span class="custom-control-label">Add or Change Pictures:</span>
                                                    <input type="hidden" name="fileload" value="<?= $row['handover']; ?>">
                                                </label>
                                            </div>
                                            <div class="col-md-6" id="text" style="display:none">
                                                <div class="form-group">
                                                    <label for="file">Handover Pictures</label>
                                                    <input name="file[]" type="file" id="file" class="form-control" /><br />
                                                </div>
                                                <div class="form-group">
                                                    <input type="button" id="add_more" class="upload btn btn-sm btn-primary" value="More Files" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <hr />
                                            </div>
                                            <div class="col-md-12" style="display: flex;justify-content: flex-end;align-items: center;">
                                                <a href="javascript:;" onclick="window.open('laptop_summary.php', '_self', ''); window.close();" class="btn btn-light" data-dismiss="modal" style="margin-right: 5px;"><i class="fas fa-times-circle"></i> Close</a>
                                                <button type="submit" name="edit_" class="btn btn-behind-green"><i class="fas fa-edit"></i> Edit</button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
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
    });

    function myFunctionChanged() {
        var checkBox = document.getElementById("myCheck");
        var text = document.getElementById("text");
        if (checkBox.checked == true) {
            text.style.display = "block";
        } else {
            text.style.display = "none";
        }
    }

    var abc = 0;
    $(document).ready(function() {
        $('#add_more').click(function() {
            $(this).before($("<div/>", {
                id: 'filediv'
            }).fadeIn('slow').append($("<input/>", {
                name: 'file[]',
                type: 'file',
                id: 'file',
                class: 'form-control'
            }), $("<br/>")));
        });
        $('body').on('change', '#file', function() {
            if (this.files && this.files[0]) {
                abc += 1;
                var z = abc - 1;
                var x = $(this).parent().find('#previewimg' + z).remove();
                $(this).before("<div id='abcd" + abc + "' class='abcd'><img id='previewimg" + abc + "' src='' style='width:140px'/></div>");
                var reader = new FileReader();
                reader.onload = imageIsLoaded;
                reader.readAsDataURL(this.files[0]);
                $(this).hide();
                $("#abcd" + abc).append($("<img/>", {
                    id: 'img',
                    src: 'assets/icon/remove.png',
                    alt: 'delete',
                    style: 'margin-left: 10px;margin-right: 10px;'
                }).click(function() {
                    $(this).parent().parent().remove();
                }));
            }
        });

        function imageIsLoaded(e) {
            $('#previewimg' + abc).attr('src', e.target.result);
        };
        $('#upload').click(function(e) {
            var name = $(":file").val();
            if (!name) {
                alert("First Image Must Be Selected");
                e.preventDefault();
            }
        });
    });
</script>
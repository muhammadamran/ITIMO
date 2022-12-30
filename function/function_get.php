<?php
include "../include/connection.php";

if (function_exists($_GET['function'])) {
    $_GET['function']();
}
// 1
function SNone()
{
    if (isset($_GET['sn_one'])) {
        global $db;
        $sn_one = $_GET['sn_one'];
        $dataSN = $db->query("SELECT * FROM tb_laptop_master WHERE serial_number='$sn_one'");
        $resultSN = mysqli_fetch_array($dataSN);
?>
        <div class="row">
            <div class="col-md-12">
                <h4><u>Detail Device</u></h4>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="IdSerialNumber">Serial Number</label>
                    <input type="text" class="form-control" name="SerialNumber" id="IdSerialNumber" value="<?= $resultSN['serial_number']; ?>" placeholder="Serial Number ..." readonly />
                    <input type="hidden" name="ID" value="<?= $resultSN['id']; ?>" />
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="IdProductName">Product Name</label>
                    <input type="text" class="form-control" name="ProductName" id="IdProductName" value="<?= $resultSN['product_name']; ?>" placeholder="Product Name ..." readonly />
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="IdBrand">Brand</label>
                    <input type="text" class="form-control" name="Brand" id="IdBrand" value="<?= $resultSN['brand']; ?>" placeholder="Brand ..." readonly />
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="IdDeviceRelease">Device Release</label>
                    <input type="text" class="form-control" name="DeviceRelease" id="IdDeviceRelease" value="<?= $resultSN['device_releases_years']; ?>" placeholder="Brand ..." readonly />
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="IdMemory">Memory Size</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="Memory" id="IdMemory" value="<?= $resultSN['memory']; ?>" placeholder="Memory Size ..." readonly />
                        <div class="input-group-append"><span class="input-group-text">GB</span></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="IdDiskSpace">Disk Space Size</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="DiskSpace" id="IdDiskSpace" value="<?= $resultSN['disk']; ?>" placeholder="Disk Space Size ..." readonly />
                        <div class="input-group-append"><span class="input-group-text">GB</span></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="IdDiskType">Disk Type</label>
                    <input type="text" class="form-control" name="DiskType" id="IdDiskType" value="<?= $resultSN['disk_type']; ?>" placeholder="Username ..." readonly />
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="IdProcessor">Processor</label>
                    <input type="text" class="form-control" name="Processor" id="IdProcessor" value="<?= $resultSN['processor']; ?>" placeholder="Processor ..." readonly />
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="IdHostname">Hostname</label>
                    <input type="text" class="form-control" name="Hostname" id="IdHostname" value="<?= $resultSN['hostname']; ?>" placeholder="Hostname ..." readonly />
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="IdUsername">Username</label>
                    <input type="text" class="form-control" name="Username" id="IdUsername" value="<?= $resultSN['username']; ?>" placeholder="Username ..." readonly />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="IdUsageState">Usage State</label>
                    <input type="text" class="form-control" name="UsageState" id="IdUsageState" value="<?= $resultSN['status_use']; ?>" placeholder="Usage State ..." readonly />
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="IdBranchLocation">Branch Location</label>
                    <input type="text" class="form-control" name="BranchLocation" id="IdBranchLocation" value="<?= $resultSN['location_branch']; ?>" placeholder="Branch Location ..." readonly />
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="IdRoomLocation">Room Location</label>
                    <input type="text" class="form-control" name="RoomLocation" id="IdRoomLocation" value="<?= $resultSN['location_room']; ?>" placeholder="Room Location ..." readonly />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="IdPONumber">PO Number</label>
                    <input type="text" class="form-control" name="PONumber" id="IdPONumber" value="<?= $resultSN['po_no']; ?>" placeholder="PO Number ..." readonly />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="IdCostCenter">Cost Center</label>
                    <input type="text" class="form-control" name="CostCenter" id="IdCostCenter" value="<?= $resultSN['cost_center']; ?>" placeholder="PO Number ..." readonly />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="IdAssetNumber">Asset Number</label>
                    <input type="text" class="form-control" name="AssetNumber" id="IdAssetNumber" value="<?= $resultSN['asset_no']; ?>" placeholder="Asset Number ..." readonly />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="IdAssetof">Asset of</label>
                    <input type="text" class="form-control" name="Assetof" id="IdAssetof" value="<?= $resultSN['asset_of']; ?>" placeholder="Asset of ..." readonly />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="IdPurchaseYears">Purchase Years</label>
                    <input type="text" class="form-control" name="PurchaseYear" id="IdPurchaseYears" value="<?= $resultSN['purchase_year']; ?>" placeholder="Purchase Years ..." readonly />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="IdPurchaseBatch">Purchase Batch</label>
                    <input type="text" class="form-control" name="PurchaseBatch" id="IdPurchaseBatch" value="<?= $resultSN['purchase_batch']; ?>" placeholder="Purchase Batch ..." readonly />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="IdPrices">Prices</label>
                    <div class="input-group mb-3">
                        <div class="input-group-append"><span class="input-group-text">Rp.</span></div>
                        <input type="text" class="form-control" name="Prices" id="IdPrices" value="<?= $resultSN['prices']; ?>" placeholder="Prices ..." readonly />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="IdRemarks">Remarks</label>
                    <textarea type="text" class="form-control" name="Remarks" id="IdRemarks" placeholder="Remarks ..." readonly /><?= $resultSN['remarks']; ?></textarea>
                </div>
            </div>
        </div>
<?php
    }
}
?>
<?php
// 2
function SNtwo()
{
    if (isset($_GET['sn_two'])) {
        global $db;
        $sn_two = $_GET['sn_two'];
        $dataSN = $db->query("SELECT * FROM tb_laptop_master WHERE serial_number='$sn_two'");
        $resultSN = mysqli_fetch_array($dataSN);
?>
        <div class="row">
            <div class="col-md-12">
                <h4><u>Detail Device</u></h4>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="IdSerialNumber">Serial Number</label>
                    <input type="text" class="form-control" name="SerialNumber" id="IdSerialNumber" value="<?= $resultSN['serial_number']; ?>" placeholder="Serial Number ..." readonly />
                    <input type="hidden" name="ID" value="<?= $resultSN['id']; ?>" />
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="IdProductName">Product Name</label>
                    <input type="text" class="form-control" name="ProductName" id="IdProductName" value="<?= $resultSN['product_name']; ?>" placeholder="Product Name ..." readonly />
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="IdBrand">Brand</label>
                    <input type="text" class="form-control" name="Brand" id="IdBrand" value="<?= $resultSN['brand']; ?>" placeholder="Brand ..." readonly />
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="IdDeviceRelease">Device Release</label>
                    <input type="text" class="form-control" name="DeviceRelease" id="IdDeviceRelease" value="<?= $resultSN['device_releases_years']; ?>" placeholder="Brand ..." readonly />
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="IdMemory">Memory Size</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="Memory" id="IdMemory" value="<?= $resultSN['memory']; ?>" placeholder="Memory Size ..." readonly />
                        <div class="input-group-append"><span class="input-group-text">GB</span></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="IdDiskSpace">Disk Space Size</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="DiskSpace" id="IdDiskSpace" value="<?= $resultSN['disk']; ?>" placeholder="Disk Space Size ..." readonly />
                        <div class="input-group-append"><span class="input-group-text">GB</span></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="IdDiskType">Disk Type</label>
                    <input type="text" class="form-control" name="DiskType" id="IdDiskType" value="<?= $resultSN['disk_type']; ?>" placeholder="Username ..." readonly />
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="IdProcessor">Processor</label>
                    <input type="text" class="form-control" name="Processor" id="IdProcessor" value="<?= $resultSN['processor']; ?>" placeholder="Processor ..." readonly />
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="IdHostname">Hostname</label>
                    <input type="text" class="form-control" name="Hostname" id="IdHostname" value="<?= $resultSN['hostname']; ?>" placeholder="Hostname ..." readonly />
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="IdUsername">Username</label>
                    <input type="text" class="form-control" name="Username" id="IdUsername" value="<?= $resultSN['username']; ?>" placeholder="Username ..." readonly />
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="IdUsageState">Usage State</label>
                    <input type="text" class="form-control" name="UsageState" id="IdUsageState" value="<?= $resultSN['status_use']; ?>" placeholder="Usage State ..." readonly />
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="IdOwnershipStatus">Ownership Status</label>
                    <input type="text" class="form-control" name="OwnershipStatus" id="IdOwnershipStatus" value="<?= $resultSN['status_available']; ?>" placeholder="Ownership Status ..." readonly />
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="IdBranchLocation">Branch Location</label>
                    <input type="text" class="form-control" name="BranchLocation" id="IdBranchLocation" value="<?= $resultSN['location_branch']; ?>" placeholder="Branch Location ..." readonly />
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="IdRoomLocation">Room Location</label>
                    <input type="text" class="form-control" name="RoomLocation" id="IdRoomLocation" value="<?= $resultSN['location_room']; ?>" placeholder="Room Location ..." readonly />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="IdPONumber">PO Number</label>
                    <input type="text" class="form-control" name="PONumber" id="IdPONumber" value="<?= $resultSN['po_no']; ?>" placeholder="PO Number ..." readonly />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="IdCostCenter">Cost Center</label>
                    <input type="text" class="form-control" name="CostCenter" id="IdCostCenter" value="<?= $resultSN['cost_center']; ?>" placeholder="PO Number ..." readonly />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="IdAssetNumber">Asset Number</label>
                    <input type="text" class="form-control" name="AssetNumber" id="IdAssetNumber" value="<?= $resultSN['asset_no']; ?>" placeholder="Asset Number ..." readonly />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="IdAssetof">Asset of</label>
                    <input type="text" class="form-control" name="Assetof" id="IdAssetof" value="<?= $resultSN['asset_of']; ?>" placeholder="Asset of ..." readonly />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="IdPurchaseYears">Purchase Years</label>
                    <input type="text" class="form-control" name="PurchaseYear" id="IdPurchaseYears" value="<?= $resultSN['purchase_year']; ?>" placeholder="Purchase Years ..." readonly />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="IdPurchaseBatch">Purchase Batch</label>
                    <input type="text" class="form-control" name="PurchaseBatch" id="IdPurchaseBatch" value="<?= $resultSN['purchase_batch']; ?>" placeholder="Purchase Batch ..." readonly />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="IdPrices">Prices</label>
                    <div class="input-group mb-3">
                        <div class="input-group-append"><span class="input-group-text">Rp.</span></div>
                        <input type="text" class="form-control" name="Prices" id="IdPrices" value="<?= $resultSN['prices']; ?>" placeholder="Prices ..." readonly />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="IdRemarks">Remarks</label>
                    <textarea type="text" class="form-control" name="Remarks" id="IdRemarks" placeholder="Remarks ..." readonly /><?= $resultSN['remarks']; ?></textarea>
                </div>
            </div>
        </div>
<?php
    }
}
?>
<?php
include 'include/connection.php';
include 'include/restrict.php';
include 'include/head.php';
include 'include/alert.php';
include 'include/dataTablesCSS.php';
?>
<link rel="stylesheet" href="assets/vendor/bootstrap-select/css/bootstrap-select.css">
<title>Search - <?= $Rapps['app_name'] ?> | General Management</title>
<?php
$Category   = '';
$Device     = '';

// IF SN
$SN      = '';
// IF FA
$FA      = '';
if (isset($_POST["search_"])) {
    if ($_POST["Category"] != '') {
        $Category = $_POST['Category'];
    }
    if ($_POST["Device"] != '') {
        $Device = $_POST['Device'];
    }
    if ($_POST["SN"] != '') {
        $SN = $_POST['SN'];
    }
    if ($_POST["FA"] != '') {
        $FA = $_POST['FA'];
    }

    // if ($SN == NULL) {
    //     $selected = 'selected';
    //     $show     = 'show';
    // } else {
    //     $selected = 'selected';
    //     $show     = 'show';
    // }
}
?>
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
                                    <i class="fas fa-search icon-page"></i>
                                </div>
                                <div style="margin-left: 10px;">
                                    <div>
                                        <h2 class="pageheader-title" style="color: #003369;">Search </h2>
                                    </div>
                                    <div style="margin-top: -10px;">
                                        <font>SEARCH</font>
                                    </div>
                                </div>
                            </div>
                            <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Search</a></li>
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
                            <h5 class="card-header"><i class="fas fa-list"></i> Data Search by
                                <select id="IdSelectBy" style="border-color: transparent;background: #003369;color: #fff;border-radius: 10px;font-size: 12px;">
                                    <option value="">Choose By</option>
                                    <option value="VSN">Serial Number</option>
                                    <option value="VFA">FA Number</option>
                                    <!-- <option value="VUsername">Username</option> -->
                                </select>
                            </h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div class="card-body">
                                        <div id="Form" style="display:show">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div style="font-size: 30px;font-weight: 600;color:#003369;text-transform: uppercase;display: flex;justify-content: center;align-items: center;">
                                                        <img src="assets/icon/scanner.png" alt="Scanner Assets Number">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div style="font-size: 30px;font-weight: 600;color:#003369;text-transform: uppercase;display: flex;justify-content: center;align-items: center;">
                                                        Scan & Search
                                                    </div>
                                                </div>
                                                <?php if (isset($_POST["search_"])) { ?>
                                                    <div class="col-sm-12">
                                                        <hr />
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div style="display: grid;justify-content: center;margin-bottom: -20px;">
                                                            <?php if ($SN == NULL) { ?>
                                                                <button type="button" class="btn btn-primary"><i class="fas fa-info-circle"></i> Category: <?= $Category ?> | Device: <?= $Device ?> | FA Number: <?= $FA ?></button>
                                                            <?php } else { ?>
                                                                <button type="button" class="btn btn-primary"><i class="fas fa-info-circle"></i> Category: <?= $Category ?> | Device: <?= $Device ?> | Serial Number: <?= $SN ?></button>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div id="FormSN" style="display:none">
                                            <form action="" method="POST">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div style="font-size: 30px;font-weight: 600;color:#003369;text-transform: uppercase;display: flex;justify-content: center;align-items: center;">
                                                            <img src="assets/icon/scanner.png" alt="Scanner Assets Number">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div style="font-size: 30px;font-weight: 600;color:#003369;text-transform: uppercase;display: flex;justify-content: center;align-items: center;">
                                                            Scan Serial Number
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <hr />
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <select name="Category" id="IdCategory" class="form-control" required style="height: calc(39px + 2px);">
                                                                <?php if ($Category == NULL) { ?>
                                                                    <option value="">Choose Category</option>
                                                                <?php } else { ?>
                                                                    <option value="<?= $Category ?>"><?= $Category ?></option>
                                                                    <option value="">Choose Category</option>
                                                                <?php } ?>
                                                                <option value="Handover">Handover</option>
                                                                <option value="Return">Return</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <select name="Device" id="Device" class="form-control" required style="height: calc(39px + 2px);">
                                                                <?php if ($Device == NULL) { ?>
                                                                    <option value="">Choose Device</option>
                                                                <?php } else { ?>
                                                                    <option value="<?= $Device ?>"><?= $Device ?></option>
                                                                    <option value="">Choose Device</option>
                                                                <?php } ?>
                                                                <option value="Laptop">Laptop</option>
                                                                <option value="PC">PC</option>
                                                                <option value="Monitor">Monitor</option>
                                                                <option value="Headphones">Headphones</option>
                                                                <option value="Phone">Phone</option>
                                                                <option value="Ipad">Ipad</option>
                                                                <option value="Server">Server</option>
                                                                <option value="TV">TV</option>
                                                                <option value="Switch">Switch</option>
                                                                <option value="Scanner">Scanner</option>
                                                                <option value="ETC">ETC</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" name="SN" value="<?= $SN; ?>" placeholder="Serial Number" required>
                                                                <div class="input-group-append">
                                                                    <button type="submit" name="search_" class="btn btn-primary">Go!</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div id="FormFA" style="display:none">
                                            <form action="" method="POST">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div style="font-size: 30px;font-weight: 600;color:#003369;text-transform: uppercase;display: flex;justify-content: center;align-items: center;">
                                                            <img src="assets/icon/scanner.png" alt="Scanner Assets Number">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div style="font-size: 30px;font-weight: 600;color:#003369;text-transform: uppercase;display: flex;justify-content: center;align-items: center;">
                                                            Scan FA Number
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <hr />
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <select name="Category" id="IdCategory" class="form-control" required style="height: calc(39px + 2px);">
                                                                <?php if ($Category == NULL) { ?>
                                                                    <option value="">Choose Category</option>
                                                                <?php } else { ?>
                                                                    <option value="<?= $Category ?>"><?= $Category ?></option>
                                                                    <option value="">Choose Category</option>
                                                                <?php } ?>
                                                                <option value="Handover">Handover</option>
                                                                <option value="Return">Return</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <select name="Device" id="Device" class="form-control" required style="height: calc(39px + 2px);">
                                                                <?php if ($Device == NULL) { ?>
                                                                    <option value="">Choose Device</option>
                                                                <?php } else { ?>
                                                                    <option value="<?= $Device ?>"><?= $Device ?></option>
                                                                    <option value="">Choose Device</option>
                                                                <?php } ?>
                                                                <option value="Laptop">Laptop</option>
                                                                <option value="PC">PC</option>
                                                                <option value="Monitor">Monitor</option>
                                                                <option value="Headphones">Headphones</option>
                                                                <option value="Phone">Phone</option>
                                                                <option value="Ipad">Ipad</option>
                                                                <option value="Server">Server</option>
                                                                <option value="TV">TV</option>
                                                                <option value="Switch">Switch</option>
                                                                <option value="Scanner">Scanner</option>
                                                                <option value="ETC">ETC</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" name="FA" value="<?= $FA; ?>" placeholder="Asset Number" required>
                                                                <div class="input-group-append">
                                                                    <button type="submit" name="search_" class="btn btn-primary">Go!</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End First Row -->
                <!-- Show Data -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header"><i class="fas fa-list"></i> Data Search Result</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <?php include "table/t_search.php"; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Show Data -->
            </div>
        </div>
        <!-- End Content -->
        <br>
        <br>
        <?php include "include/copyright.php"; ?>
    </div>
</div>
<?php include "include/footer.php"; ?>
<?php include "include/dataTablesJS.php"; ?>
<script src="assets/vendor/bootstrap-select/js/bootstrap-select.js"></script>
<script type="text/javascript">
    $(function() {
        $("#IdSelectBy").change(function() {
            if ($(this).val() == "VSN") {
                $("#FormSN").show();
                $("#FormFA").hide();
                $("#Form").hide();
            } else if ($(this).val() == "VFA") {
                $("#FormSN").hide();
                $("#FormFA").show();
                $("#Form").hide();
            } else {
                $("#FormSN").hide();
                $("#FormFA").hide();
                $("#Form").show();
            }
        });
    });
</script>
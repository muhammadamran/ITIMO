<?php
include 'include/connection.php';
include 'include/restrict.php';
include 'include/head.php';
include 'include/alert.php';
include 'include/dataTablesCSS.php';
?>
<title>Allocate Server Summary - <?= $Rapps['app_name'] ?> | General Management</title>
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
                                    <i class="fas fa-server icon-page"></i>
                                </div>
                                <div style="margin-left: 10px;">
                                    <div>
                                        <h2 class="pageheader-title" style="color: #003369;">Allocate Server Summary </h2>
                                    </div>
                                    <div style="margin-top: -10px;">
                                        <font>SERVER</font>
                                    </div>
                                </div>
                            </div>
                            <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Server Summary</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Allocate</a></li>
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
                                <a href="server_summary.php" class="btn btn-primary"><i class="fas fa-caret-square-left"></i> Back</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Back -->

                <!-- First Row -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">
                                Allocate Server by
                                <select id="IdSelectBy" style="border-color: transparent;background: #003369;color: #fff;border-radius: 10px;font-size: 12px;">
                                    <option value="">Choose By</option>
                                    <option value="VUser">User</option>
                                    <option value="VServer">Server</option>
                                </select>
                            </h5>
                            <div class="card-body">
                                <div id="FormUser" style="display:none">
                                    <div class="row" style="display: flex;justify-content: flex-start;align-items: end;margin-top: 5px;">
                                        <div>
                                            <div style="font-size: 15px;margin-bottom: 10px;margin-top: -25px;background: #003369;border-radius: 10px;margin-left: 15px;color: #fff;padding: 10px;">
                                                <i class="fas fa-user-plus"></i> USER
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group" style="margin-bottom: 18px;">
                                                <select name="SerialNumberOne" id="IdSerialNumberOne" onchange="ShowSNOne(this.value)">
                                                    <option value="">Choose Serial Number</option>
                                                    <?php
                                                    $dataSNOne = $db->query("SELECT * FROM tb_server_master ORDER BY id ASC");
                                                    foreach ($dataSNOne as $optionSNOne) {
                                                    ?>
                                                        <option data-tokens="<?= $optionSNOne['serial_number'] ?>" value="<?= $optionSNOne['serial_number'] ?>"><?= $optionSNOne['serial_number'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="page-divider"></div>
                                        </div>
                                    </div>
                                    <form action="server_summary.php" method="POST">
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <h4><u>Input Username</u></h4>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="IdUsername">New Username <font style="color: red;">*</font></label>
                                                                <input type="text" class="form-control" name="NewUsername" id="IdNewUsername" placeholder="Username ..." required />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="IdOwnershipStatus">Ownership Status <font style="color: red;">*</font></label>
                                                                <select class="form-control" name="OwnershipStatus" id="IdOwnershipStatus" placeholder="Ownership Status ..." required>
                                                                    <option value="">Choose Ownership Status</option>
                                                                    <option value="PERMANENT">PERMANENT</option>
                                                                    <option value="TEMP">TEMP</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div id="ShowSelectSN"></div>
                                                </div>
                                                <div class="col-md-12">
                                                    <font style="color: red;">*</font> <i>Required.</i>
                                                </div>
                                                <div class="col-sm-12">
                                                    <hr />
                                                </div>
                                                <div class="col-sm-12" style="display: flex;justify-content: flex-end;">
                                                    <a href="javascript:;" onclick="window.open('server_summary.php', '_self', ''); window.close();" class="btn btn-light" data-dismiss="modal" style="margin-right: 5px;"><i class="fas fa-times-circle"></i> Close</a>
                                                    <button type="submit" name="newusername_" class="btn btn-primary"><i class="fas fa-user-plus"></i> Update</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                                <div id="FormServer" style="display:none">
                                    <div class="row" style="display: flex;justify-content: flex-start;align-items: end;margin-top: 5px;">
                                        <div>
                                            <div style="font-size: 15px;margin-bottom: 10px;margin-top: -25px;background: #003369;border-radius: 10px;margin-left: 15px;color: #fff;padding: 10px;">
                                                <i class="fas fa-server"></i> SERVER
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group" style="margin-bottom: 18px;">
                                                <select name="SerialNumberTwo" id="IdSerialNumberTwo" onchange="ShowSNTwo(this.value)">
                                                    <option value="">Choose Serial Number</option>
                                                    <?php
                                                    $dataSNTwo = $db->query("SELECT * FROM tb_server_master ORDER BY id ASC");
                                                    foreach ($dataSNTwo as $optionSNTwo) {
                                                    ?>
                                                        <option data-tokens="<?= $optionSNTwo['serial_number'] ?>" value="<?= $optionSNTwo['serial_number'] ?>"><?= $optionSNTwo['serial_number'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="page-divider"></div>
                                        </div>
                                    </div>
                                    <form action="server_summary.php" method="POST">
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <h4><u>Input Hostname</u></h4>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="IdHostname">New Hostname <font style="color: red;">*</font></label>
                                                                <input type="text" class="form-control" name="NewHostname" id="IdNewHostname" placeholder="Hostname ..." required />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div id="ShowSelectHN"></div>
                                                </div>
                                                <div class="col-md-12">
                                                    <font style="color: red;">*</font> <i>Required.</i>
                                                </div>
                                                <div class="col-sm-12">
                                                    <hr />
                                                </div>
                                                <div class="col-sm-12" style="display: flex;justify-content: flex-end;">
                                                    <a href="javascript:;" onclick="window.open('server_summary.php', '_self', ''); window.close();" class="btn btn-light" data-dismiss="modal" style="margin-right: 5px;"><i class="fas fa-times-circle"></i> Close</a>
                                                    <button type="submit" name="newhostname_" class="btn btn-primary"><i class="fas fa-server"></i> Update</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
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
<script src="assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js"></script>
<!-- New Mask -->
<script src="assets/plugins/mask/dist/jquery.mask.min.js"></script>
<!-- End New Mask -->
<script type="text/javascript" src="assets/plugins/chosen/chosen.jquery.js"></script>
<script type="text/javascript">
    // Username
    $(function() {
        $("#IdNewUsername").autocomplete({
            source: 'function/autocomplete/data_server.php?function=AutoUsername'
        });
    });

    $("#IdSerialNumberOne").chosen({
        width: "80%"
    });

    $("#IdSerialNumberTwo").chosen({
        width: "80%"
    });

    $(function() {
        $("#IdSelectBy").change(function() {
            if ($(this).val() == "VUser") {
                $("#FormUser").show();
                $("#FormServer").hide();
            } else if ($(this).val() == "VServer") {
                $("#FormUser").hide();
                $("#FormServer").show();
            } else {
                $("#FormUser").hide();
                $("#FormServer").hide();
            }
        });
    });

    // ShowSNOne
    function ShowSNOne(sn_one) {
        if (sn_one == "") {
            document.getElementById("ShowSelectSN").innerHTML = "";
            return;
        }
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("ShowSelectSN").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "function/function_get_server.php/get_sn_one?function=SNone&sn_one=" + sn_one, true);
        xmlhttp.send();
    }

    // ShowSNTwo
    function ShowSNTwo(sn_two) {
        if (sn_two == "") {
            document.getElementById("ShowSelectHN").innerHTML = "";
            return;
        }
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("ShowSelectHN").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "function/function_get_server.php/get_sn_two?function=SNtwo&sn_two=" + sn_two, true);
        xmlhttp.send();
    }
</script>
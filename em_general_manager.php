<?php
include 'include/connection.php';
include 'include/restrict.php';
include 'include/head.php';
include 'include/alert.php';
include 'include/dataTablesCSS.php';
?>
<title>Employee General Manager & Functional - <?= $Rapps['app_name'] ?> | General Management</title>
<?php
// Insert
if (isset($_POST["add_bu"])) {
    // Info Page
    $page      = 'em_general_manager.php';
    // End Info Page

    $NameBusinessUnitName = $_POST['NameBusinessUnitName'];
    $NameBusinessUnitCode = $_POST['NameBusinessUnitCode'];
    $NameBusinessUnitDesc = $_POST['NameBusinessUnitDesc'];
    $NameUnder            = $_POST['NameUnder'];

    $available = $db->query("SELECT bu_name FROM em_general_manager WHERE bu_name='$NameBusinessUnitName'");
    if (mysqli_num_rows($available) == 1) {
        echo "<script>window.location.href='em_general_manager.php?Available=true&page=$page';</script>";
    } else {
        $insert    = $db->query("INSERT INTO em_general_manager
                          (id,bu_name,bu_code,bu_desc,under)
                           VALUES
                          ('','$NameBusinessUnitName','$NameBusinessUnitCode','$NameBusinessUnitDesc','$NameUnder')
                          ");

        if ($insert) {
            echo "<script>window.location.href='em_general_manager.php?InsertSuccess=true&page=$page';</script>";
        } else {
            echo "<script>window.location.href='em_general_manager.php?InsertFailed=true&page=$page';</script>";
        }
    }
}
// Edit
if (isset($_POST["edit_bu"])) {
    // Info Page
    $page      = 'em_general_manager.php';
    // End Info Page

    $ID                   = $_POST['ID'];
    $NameBusinessUnitName = $_POST['NameBusinessUnitName'];
    $NameBusinessUnitCode = $_POST['NameBusinessUnitCode'];
    $NameBusinessUnitDesc = $_POST['NameBusinessUnitDesc'];
    $NameUnder            = $_POST['NameUnder'];

    $edit    = $db->query("UPDATE em_general_manager SET bu_name='$NameBusinessUnitName',
                                                    bu_code='$NameBusinessUnitCode',
                                                    bu_desc='$NameBusinessUnitDesc',
                                                    under='$NameUnder'
                           WHERE id='$ID'");

    if ($edit) {
        echo "<script>window.location.href='em_general_manager.php?UpdateSuccess=true&page=$page';</script>";
    } else {
        echo "<script>window.location.href='em_general_manager.php?UpdateFailed=true&page=$page';</script>";
    }
}
// Delete
if (isset($_POST["delete_bu"])) {
    // Info Page
    $page      = 'em_general_manager.php';
    // End Info Page

    $ID        = $_POST['ID'];

    $delete    = $db->query("DELETE FROM em_general_manager WHERE id='$ID'");

    if ($delete) {
        echo "<script>window.location.href='em_general_manager.php?DeleteSuccess=true&page=$page';</script>";
    } else {
        echo "<script>window.location.href='em_general_manager.php?DeleteFailed=true&page=$page';</script>";
    }
}
?>
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
                                    <i class="fas fa-id-card-alt icon-page"></i>
                                </div>
                                <div style="margin-left: 10px;">
                                    <div>
                                        <h2 class="pageheader-title" style="color: #003369;">Employee General Manager </h2>
                                    </div>
                                    <div style="margin-top: -10px;">
                                        <font>EMPLOYEE</font>
                                    </div>
                                </div>
                            </div>
                            <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Employee General Manager</a></li>
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
                            <h5 class="card-header"><i class="fas fa-list"></i> Data Employee General Manager</h5>
                            <?php include "modal/m_em_general_manager.php"; ?>
                            <hr />
                            <div class="card-body">
                                <div class="table-responsive">
                                    <?php include "table/t_em_general_manager.php"; ?>
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
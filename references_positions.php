<?php
include 'include/connection.php';
include 'include/restrict.php';
include 'include/head.php';
include 'include/alert.php';
include 'include/dataTablesCSS.php';
?>
<title>Position - <?= $Rapps['app_name'] ?> | General Management</title>
<?php
// Insert
if (isset($_POST["add_positions"])) {
    // Info Page
    $page      = 'references_positions.php';
    // End Info Page

    $NameDepartment              = $_POST['NameDepartment'];
    $NameDepartmentDescritption  = $_POST['NameDepartmentDescritption'];
    $NameGeneralManager          = $_POST['NameGeneralManager'];
    $NamePT                      = $_POST['NamePT'];

    $available = $db->query("SELECT department_name FROM references_positions WHERE department_name='$NameDepartment'");
    if (mysqli_num_rows($available) == 1) {
        echo "<script>window.location.href='references_positions.php?Available=true&page=$page';</script>";
    } else {
        $insert    = $db->query("INSERT INTO references_positions
                          (id,department_name,desc_positions,gm_positions,pt)
                           VALUES
                          ('','$NameDepartment','$NameDepartmentDescritption','$NameGeneralManager')
                          ");

        if ($insert) {
            echo "<script>window.location.href='references_positions.php?InsertSuccess=true&page=$page';</script>";
        } else {
            echo "<script>window.location.href='references_positions.php?InsertFailed=true&page=$page';</script>";
        }
    }
}
// Edit
if (isset($_POST["edit_positions"])) {
    // Info Page
    $page      = 'references_positions.php';
    // End Info Page

    $ID                          = $_POST['ID'];
    $NameDepartment              = $_POST['NameDepartment'];
    $NameDepartmentDescritption  = $_POST['NameDepartmentDescritption'];
    $NameGeneralManager          = $_POST['NameGeneralManager'];
    $NamePT                      = $_POST['NamePT'];

    $edit    = $db->query("UPDATE references_positions SET department_name='$NameDepartment',
                                                            desc_positions='$NameDepartmentDescritption',
                                                            gm_positions='$NameGeneralManager',
                                                            pt='$NamePT'
                           WHERE id='$ID'");

    if ($edit) {
        echo "<script>window.location.href='references_positions.php?UpdateSuccess=true&page=$page';</script>";
    } else {
        echo "<script>window.location.href='references_positions.php?UpdateFailed=true&page=$page';</script>";
    }
}
// Delete
if (isset($_POST["delete_positions"])) {
    // Info Page
    $page      = 'references_positions.php';
    // End Info Page

    $ID        = $_POST['ID'];

    $delete    = $db->query("DELETE FROM references_positions WHERE id='$ID'");

    if ($delete) {
        echo "<script>window.location.href='references_positions.php?DeleteSuccess=true&page=$page';</script>";
    } else {
        echo "<script>window.location.href='references_positions.php?DeleteFailed=true&page=$page';</script>";
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
                                    <i class="fas fa-asterisk icon-page"></i>
                                </div>
                                <div style="margin-left: 10px;">
                                    <div>
                                        <h2 class="pageheader-title" style="color: #003369;">Positions </h2>
                                    </div>
                                    <div style="margin-top: -10px;">
                                        <font>REFERENCES</font>
                                    </div>
                                </div>
                            </div>
                            <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Positions</a></li>
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
                            <h5 class="card-header"><i class="fas fa-list"></i> Data Positions</h5>
                            <?php include "modal/m_references_positions.php"; ?>
                            <hr />
                            <div class="card-body">
                                <div class="table-responsive">
                                    <?php include "table/t_references_positions.php"; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
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
<script type="text/javascript" src="assets/plugins/chosen/chosen.jquery.js"></script>
<script type="text/javascript">
    // Add
    $("#IdBranch").mask("***");

    $("#IdPoscode").mask("99999");

    function myFunction() {
        var x = document.getElementById("IdBranch");
        x.value = x.value.toUpperCase();
    }
    $("#IdProvince").chosen({
        width: "100%"
    });

    // Edit
    $("#EditIdBranch").mask("***");

    $("#EditIdPoscode").mask("99999");

    function EditmyFunction() {
        var x = document.getElementById("EditIdBranch");
        x.value = x.value.toUpperCase();
    }
    $("#EditIdProvince").chosen({
        width: "100%"
    });
</script>
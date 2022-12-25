<?php
include 'include/connection.php';
include 'include/restrict.php';
include 'include/head.php';
include 'include/alert.php';
include 'include/dataTablesCSS.php';
?>
<title>Branch - <?= $Rapps['app_name'] ?> | General Management</title>
<?php
// Insert
if (isset($_POST["add_branch"])) {
    // Info Page
    $page      = 'references_branch.php';
    // End Info Page

    $NameBranch             = $_POST['NameBranch'];
    $NameDescriptionBranch  = $_POST['NameDescriptionBranch'];
    $NameTelepone           = $_POST['NameTelepone'];
    $NameFax                = $_POST['NameFax'];
    $NameEmail              = $_POST['NameEmail'];
    $NameAddress            = $_POST['NameAddress'];
    $NameProvince           = $_POST['NameProvince'];
    $NamePoscode            = $_POST['NamePoscode'];

    $available = $db->query("SELECT branch_name FROM references_branch WHERE branch_name='$NameBranch'");
    if (mysqli_num_rows($available) == 1) {
        echo "<script>window.location.href='references_branch.php?Available=true&page=$page';</script>";
    } else {
        $insert    = $db->query("INSERT INTO references_branch
                          (id,branch_name,desc_branch,telp,fax,email,address_branch,province,poscode)
                           VALUES
                          ('','$NameBranch','$NameDescriptionBranch','$NameTelepone','$NameFax','$NameEmail','$NameAddress','$NameProvince','$NamePoscode')
                          ");

        if ($insert) {
            echo "<script>window.location.href='references_branch.php?InsertSuccess=true&page=$page';</script>";
        } else {
            echo "<script>window.location.href='references_branch.php?InsertFailed=true&page=$page';</script>";
        }
    }
}
// Edit
if (isset($_POST["edit_branch"])) {
    // Info Page
    $page      = 'references_branch.php';
    // End Info Page

    $ID                     = $_POST['ID'];
    $NameBranch             = $_POST['NameBranch'];
    $NameDescriptionBranch  = $_POST['NameDescriptionBranch'];
    $NameTelepone           = $_POST['NameTelepone'];
    $NameFax                = $_POST['NameFax'];
    $NameEmail              = $_POST['NameEmail'];
    $NameAddress            = $_POST['NameAddress'];
    $NameProvince           = $_POST['NameProvince'];
    $NamePoscode            = $_POST['NamePoscode'];

    $edit    = $db->query("UPDATE references_branch SET branch_name='$NameBranch',
                                                        desc_branch='$NameDescriptionBranch',
                                                        telp='$NameTelepone',
                                                        fax='$NameFax',
                                                        email='$NameEmail',
                                                        address_branch='$NameAddress',
                                                        province='$NameProvince',
                                                        poscode='$NamePoscode'
                           WHERE id='$ID'");

    if ($edit) {
        echo "<script>window.location.href='references_branch.php?UpdateSuccess=true&page=$page';</script>";
    } else {
        echo "<script>window.location.href='references_branch.php?UpdateFailed=true&page=$page';</script>";
    }
}
// Delete
if (isset($_POST["delete_branch"])) {
    // Info Page
    $page      = 'references_branch.php';
    // End Info Page

    $ID        = $_POST['ID'];

    $delete    = $db->query("DELETE FROM references_branch WHERE id='$ID'");

    if ($delete) {
        echo "<script>window.location.href='references_branch.php?DeleteSuccess=true&page=$page';</script>";
    } else {
        echo "<script>window.location.href='references_branch.php?DeleteFailed=true&page=$page';</script>";
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
                                        <h2 class="pageheader-title" style="color: #003369;">Branch </h2>
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
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Branch</a></li>
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
                            <h5 class="card-header"><i class="fas fa-list"></i> Data Branch</h5>
                            <?php include "modal/m_references_branch.php"; ?>
                            <hr />
                            <div class="card-body">
                                <div class="table-responsive">
                                    <?php include "table/t_references_branch.php"; ?>
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
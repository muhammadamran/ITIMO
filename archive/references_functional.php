<?php
include 'include/connection.php';
include 'include/restrict.php';
include 'include/head.php';
include 'include/alert.php';
include 'include/dataTablesCSS.php';
?>
<title>Functional - <?= $Rapps['app_name'] ?> | General Management</title>
<?php
// Insert
if (isset($_POST["add_functional"])) {
    // Info Page
    $page      = 'references_functional.php';
    // End Info Page

    $NameFunctionalCode = $_POST['NameFunctionalCode'];
    $NameFunctionalName = $_POST['NameFunctionalName'];
    $Name               = $_POST['Name'];
    $Email              = $_POST['Email'];
    $NameUnder          = $_POST['NameUnder'];

    $available = $db->query("SELECT functional_code FROM references_functional WHERE functional_code='$NameFunctionalCode'");
    if (mysqli_num_rows($available) == 1) {
        echo "<script>window.location.href='references_functional.php?Available=true&page=$page';</script>";
    } else {
        $insert    = $db->query("INSERT INTO references_functional
                          (id,functional_code,functional_name,functional_person,functional_person_email,functional_under,level,status)
                           VALUES
                          ('','$NameFunctionalCode','$NameFunctionalName','$Name','$Email','$NameUnder','Level 1','FTE')
                          ");

        if ($insert) {
            echo "<script>window.location.href='references_functional.php?InsertSuccess=true&page=$page';</script>";
        } else {
            echo "<script>window.location.href='references_functional.php?InsertFailed=true&page=$page';</script>";
        }
    }
}
// Edit
if (isset($_POST["edit_functional"])) {
    // Info Page
    $page      = 'references_functional.php';
    // End Info Page

    $ID                 = $_POST['ID'];
    $NameFunctionalCode = $_POST['NameFunctionalCode'];
    $NameFunctionalName = $_POST['NameFunctionalName'];
    $Name               = $_POST['Name'];
    $Email              = $_POST['Email'];
    $NameUnder          = $_POST['NameUnder'];

    $edit    = $db->query("UPDATE references_functional SET functional_code='$NameFunctionalCode',
                                                            functional_name='$NameFunctionalName',
                                                            functional_person='$Name',
                                                            functional_person_email='$Email',
                                                            functional_under='$NameUnder'
                           WHERE id='$ID'");

    if ($edit) {
        echo "<script>window.location.href='references_functional.php?UpdateSuccess=true&page=$page';</script>";
    } else {
        echo "<script>window.location.href='references_functional.php?UpdateFailed=true&page=$page';</script>";
    }
}
// Delete
if (isset($_POST["delete_functional"])) {
    // Info Page
    $page      = 'references_functional.php';
    // End Info Page

    $ID        = $_POST['ID'];

    $delete    = $db->query("DELETE FROM references_functional WHERE id='$ID'");

    if ($delete) {
        echo "<script>window.location.href='references_functional.php?DeleteSuccess=true&page=$page';</script>";
    } else {
        echo "<script>window.location.href='references_functional.php?DeleteFailed=true&page=$page';</script>";
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
                                        <h2 class="pageheader-title" style="color: #003369;">Functional </h2>
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
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Functional</a></li>
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
                            <h5 class="card-header"><i class="fas fa-list"></i> Data Functional</h5>
                            <?php include "modal/m_references_functional.php"; ?>
                            <hr />
                            <div class="card-body">
                                <div class="table-responsive">
                                    <?php include "table/t_references_functional.php"; ?>
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
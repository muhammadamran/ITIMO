<?php
include 'include/connection.php';
include 'include/restrict.php';
include 'include/head.php';
include 'include/alert.php';
include 'include/dataTablesCSS.php';
?>
<title>Email Notif System - <?= $Rapps['app_name'] ?> | General Management</title>
<?php
// Add
if (isset($_POST["add_email"])) {
    // Info Page
    $page      = 'adm_email.php';
    // End Info Page

    $NameEmail  = $_POST['NameEmail'];
    $NameScope  = $_POST['NameScope'];

    $available = $db->query("SELECT * FROM references_email WHERE email='$username' AND scope='$NameScope'");
    if (mysqli_num_rows($available) == 1) {
        echo "<script>window.location.href='adm_email.php?Available=true&page=$page';</script>";
    } else {
        $insert    = $db->query("INSERT INTO references_email
                          (id,email,scope)
                           VALUES
                          ('','$NameEmail','$NameScope')
                          ");

        if ($insert) {
            echo "<script>window.location.href='adm_email.php?InsertSuccess=true&page=$page';</script>";
        } else {
            echo "<script>window.location.href='adm_email.php?InsertFailed=true&page=$page';</script>";
        }
    }
}
// Edit
if (isset($_POST["edit_email"])) {
    // Info Page
    $page      = 'adm_email.php';
    // End Info Page

    $ID         = $_POST['ID'];
    $NameEmail  = $_POST['NameEmail'];
    $NameScope  = $_POST['NameScope'];

    $edit    = $db->query("UPDATE references_email SET email='$NameEmail',
                                                       scope='$NameScope'
                           WHERE id='$ID'");

    if ($edit) {
        echo "<script>window.location.href='adm_email.php?UpdateSuccess=true&page=$page';</script>";
    } else {
        echo "<script>window.location.href='adm_email.php?UpdateFailed=true&page=$page';</script>";
    }
}
// Delete
if (isset($_POST["delete_email"])) {
    // Info Page
    $page      = 'adm_email.php';
    // End Info Page

    $ID        = $_POST['ID'];

    $delete    = $db->query("DELETE FROM references_email WHERE id='$ID'");

    if ($delete) {
        echo "<script>window.location.href='adm_email.php?DeleteSuccess=true&page=$page';</script>";
    } else {
        echo "<script>window.location.href='adm_email.php?DeleteFailed=true&page=$page';</script>";
    }
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
                                    <i class="fas fa-envelope-open-text icon-page"></i>
                                </div>
                                <div style="margin-left: 10px;">
                                    <div>
                                        <h2 class="pageheader-title" style="color: #003369;">Email Notif System </h2>
                                    </div>
                                    <div style="margin-top: -10px;">
                                        <font>ADMINISTRATION</font>
                                    </div>
                                </div>
                            </div>
                            <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Email Notif System</a></li>
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
                            <h5 class="card-header"><i class="fas fa-list"></i> Data Email Notif System</h5>
                            <?php include "modal/m_adm_email.php"; ?>
                            <hr />
                            <div class="card-body">
                                <div class="table-responsive">
                                    <?php include "table/t_adm_email.php"; ?>
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
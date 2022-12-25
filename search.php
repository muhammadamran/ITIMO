<?php
include 'include/connection.php';
include 'include/restrict.php';
include 'include/head.php';
include 'include/alert.php';
include 'include/dataTablesCSS.php';
?>
<title>Search - <?= $Rapps['app_name'] ?> | General Management</title>
<?php
// Add
if (isset($_POST["add_user"])) {
    // Info Page
    $page      = 'adm_user.php';
    // End Info Page

    $username  = $_POST['NameUsername'];
    $password  = $_POST['NamePassword'];
    $email     = $_POST['NameEmail'];
    $role      = $_POST['NameRole'];

    $available = $db->query("SELECT user_name FROM tb_user WHERE user_name='$username'");
    if (mysqli_num_rows($available) == 1) {
        echo "<script>window.location.href='adm_user.php?Available=true&page=$page';</script>";
    } else {
        $insert    = $db->query("INSERT INTO tb_user
                          (user_id,user_name,user_pass,user_email,user_role)
                           VALUES
                          ('','$username','$password','$email','$role')
                          ");

        if ($insert) {
            echo "<script>window.location.href='adm_user.php?InsertSuccess=true&page=$page';</script>";
        } else {
            echo "<script>window.location.href='adm_user.php?InsertFailed=true&page=$page';</script>";
        }
    }
}
// Edit
if (isset($_POST["edit_user"])) {
    // Info Page
    $page      = 'adm_user.php';
    // End Info Page

    $ID        = $_POST['ID'];
    $email     = $_POST['NameEmail'];
    $role      = $_POST['NameRole'];

    $edit    = $db->query("UPDATE tb_user SET user_email='$email',
                                              user_role='$role'
                           WHERE user_id='$ID'");

    if ($edit) {
        echo "<script>window.location.href='adm_user.php?UpdateSuccess=true&page=$page';</script>";
    } else {
        echo "<script>window.location.href='adm_user.php?UpdateFailed=true&page=$page';</script>";
    }
}
// Delete
if (isset($_POST["delete_user"])) {
    // Info Page
    $page      = 'adm_user.php';
    // End Info Page

    $ID        = $_POST['ID'];

    $delete    = $db->query("DELETE FROM tb_user WHERE user_id='$ID'");

    if ($delete) {
        echo "<script>window.location.href='adm_user.php?DeleteSuccess=true&page=$page';</script>";
    } else {
        echo "<script>window.location.href='adm_user.php?DeleteFailed=true&page=$page';</script>";
    }
}
// Reset
if (isset($_POST["reset_password"])) {
    // Info Page
    $page      = 'adm_user.php';
    // End Info Page

    $ID        = $_POST['ID'];
    $password  = $_POST['NamePassword'];

    $edit    = $db->query("UPDATE tb_user SET user_pass='$password'
                           WHERE user_id='$ID'");

    if ($edit) {
        echo "<script>window.location.href='adm_user.php?UpdateSuccess=true&page=$page';</script>";
    } else {
        echo "<script>window.location.href='adm_user.php?UpdateFailed=true&page=$page';</script>";
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
                                    <i class="fas fa-search icon-page"></i>
                                </div>
                                <div style="margin-left: 10px;">
                                    <div>
                                        <h2 class="pageheader-title" style="color: #003369;">Search </h2>
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
                            <h5 class="card-header"><i class="fas fa-list"></i> Data Search</h5>
                            <!--  -->
                            <hr />
                            <div class="card-body">
                                <div class="table-responsive">
                                    <!--  -->
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
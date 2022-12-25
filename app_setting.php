<?php
include 'include/connection.php';
include 'include/restrict.php';
include 'include/head.php';
include 'include/alert.php';
include 'include/dataTablesCSS.php';
?>
<title>Settings - <?= $Rapps['app_name'] ?> | General Management</title>
<?php
$dataSettings       = $db->query("SELECT * FROM tb_setting ORDER BY id ASC");
$resultdataSetting  = mysqli_fetch_array($dataSettings);
// Icon
if (isset($_POST["edit_bu"])) {
    // Info Page
    $page      = 'references_bu.php';
    // End Info Page

    $ID                   = $_POST['ID'];

    $edit    = $db->query("UPDATE references_bu SET bu_name='$NameBusinessUnitName',
                                                    bu_code='$NameBusinessUnitCode',
                                                    bu_desc='$NameBusinessUnitDesc',
                                                    under='$NameUnder'
                           WHERE id='$ID'");

    if ($edit) {
        echo "<script>window.location.href='references_bu.php?UpdateSuccess=true&page=$page';</script>";
    } else {
        echo "<script>window.location.href='references_bu.php?UpdateFailed=true&page=$page';</script>";
    }
}
// Delete
if (isset($_POST["delete_bu"])) {
    // Info Page
    $page      = 'references_bu.php';
    // End Info Page

    $ID        = $_POST['ID'];

    $delete    = $db->query("DELETE FROM references_bu WHERE id='$ID'");

    if ($delete) {
        echo "<script>window.location.href='references_bu.php?DeleteSuccess=true&page=$page';</script>";
    } else {
        echo "<script>window.location.href='references_bu.php?DeleteFailed=true&page=$page';</script>";
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
                                    <i class="fas fa-cogs icon-page"></i>
                                </div>
                                <div style="margin-left: 10px;">
                                    <div>
                                        <h2 class="pageheader-title" style="color: #003369;">Settings </h2>
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
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Settings</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Page Title -->

                <!-- Firts Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <h5 class="card-header"><i class="fas fa-list"></i> Data Settings</h5>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row" style="align-items: flex-end;">
                                            <!-- Icon -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <form action="" method="POST" style="display: contents;" enctype="multipart/form-data">
                                                        <input type="hidden" name="ID" value="<?= $resultdataSetting['id']; ?>" />
                                                        <img src="assets/apps/icon/<?= $resultdataSetting['icon'];  ?>" alt="Icon" style="width:200px" />
                                                        <br><br>
                                                        <input type="file" name="UploadBg" required>
                                                        <hr />
                                                        <button class="btn btn-sm btn-primary" type="submit" name="_uploadIcon"><i class="fas fa-images"></i> Change Icon</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- Logo -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <form action="" method="POST" style="display: contents;" enctype="multipart/form-data">
                                                        <input type="hidden" name="ID" value="<?= $resultdataSetting['id']; ?>" />
                                                        <img src="assets/apps/logo/<?= $resultdataSetting['logo'];  ?>" alt="Logo" style="width:200px" />
                                                        <br><br>
                                                        <input type="file" name="UploadBg" required>
                                                        <hr />
                                                        <button class="btn btn-sm btn-primary" type="submit" name="_uploadLogo"><i class="fas fa-images"></i> Change Logo</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- Loader -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <form action="" method="POST" style="display: contents;" enctype="multipart/form-data">
                                                        <input type="hidden" name="ID" value="<?= $resultdataSetting['id']; ?>" />
                                                        <img src="assets/apps/loader/<?= $resultdataSetting['loader'];  ?>" alt="Loader" style="width:200px" />
                                                        <br><br>
                                                        <input type="file" name="UploadBg" required>
                                                        <hr />
                                                        <button class="btn btn-sm btn-primary" type="submit" name="_uploadLoader"><i class="fas fa-images"></i> Change Loader</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- Background Sign In -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <form action="" method="POST" style="display: contents;" enctype="multipart/form-data">
                                                        <input type="hidden" name="ID" value="<?= $resultdataSetting['id']; ?>" />
                                                        <img src="assets/apps/background/<?= $resultdataSetting['background_login'];  ?>" alt="Background Sign In" style="width:200px" />
                                                        <br><br>
                                                        <input type="file" name="UploadBg" required>
                                                        <hr />
                                                        <button class="btn btn-sm btn-primary" type="submit" name="_uploadBg"><i class="fas fa-images"></i> Change Background</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <hr>
                                            </div>
                                            <form action="" method="POST" style="display: contents;">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="IdAppName">App Name </label>
                                                        <input type="text" class="form-control" name="AppName" id="IdAppName" value="<?= $resultdataSetting['app_name']; ?>" placeholder="App Name ..." required />
                                                        <input type="hidden" name="ID" value="<?= $resultdataSetting['id']; ?>" />
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="IdEmailHelpDesk">Email Help Desk </label>
                                                        <input type="email" class="form-control" name="NameEmailHelpDesk" id="IdEmailHelpDesk" value="<?= $resultdataSetting['email_helpdesk']; ?>" placeholder="Email Help Desk ..." required />
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="IdFooter">Footer</label>
                                                        <input type="text" class="form-control" name="NameFooter" id="IdFooter" value="<?= $resultdataSetting['footer']; ?>" placeholder="Footer ..." />
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <hr />
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" name="add_settings" class="btn btn-sm btn-primary"><i class="fas fa-list"></i> Change Settings</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Firts Row -->
            </div>
        </div>
        <!-- End Content -->
        <?php include "include/copyright.php"; ?>
    </div>
</div>
<?php include "include/footer.php"; ?>
<?php include "include/dataTablesJS.php"; ?>
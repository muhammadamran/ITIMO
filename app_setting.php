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
if (isset($_POST["_uploadIcon"])) {
    // Info Page
    $page      = 'app_setting.php';
    // End Info Page

    $ID             = $_POST['ID'];
    $UploadIcon     = 'Icon_' . time() . "_" . $_FILES['UploadIcon']['name'];

    $dir            = "assets/apps/icon/";
    $timeUpload     = date('Y-m-d-h-m-i');
    $file_name      = $timeUpload . "_" . $_FILES["UploadIcon"]["name"];
    $size           = $_FILES["UploadIcon"]["size"];
    $tmp_file_name  = $_FILES["UploadIcon"]["tmp_name"];
    $filename       = $_FILES['UploadIcon']['name'];
    $exp            = explode('.', $filename);
    $ext            = end($exp);
    if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'gif' || $ext == 'svg') {
        move_uploaded_file($tmp_file_name, $dir . $UploadIcon);
        $edit    = $db->query("UPDATE tb_setting SET icon='$UploadIcon' WHERE id='$ID'");

        echo "<script>window.location.href='app_setting.php?UpdateSuccess=true&page=$page';</script>";
    } else {
        echo "<script>window.location.href='app_setting.php?ExtentionFialed=true&page=$page';</script>";
    }
}
// Logo
if (isset($_POST["_uploadLogo"])) {
    // Info Page
    $page      = 'app_setting.php';
    // End Info Page

    $ID             = $_POST['ID'];
    $UploadLogo       = 'Logo_' . time() . "_" . $_FILES['UploadLogo']['name'];

    $dir            = "assets/apps/logo/";
    $timeUpload     = date('Y-m-d-h-m-i');
    $file_name      = $timeUpload . "_" . $_FILES["UploadLogo"]["name"];
    $size           = $_FILES["UploadLogo"]["size"];
    $tmp_file_name  = $_FILES["UploadLogo"]["tmp_name"];
    $filename       = $_FILES['UploadLogo']['name'];
    $exp            = explode('.', $filename);
    $ext            = end($exp);
    if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'gif' || $ext == 'svg') {
        move_uploaded_file($tmp_file_name, $dir . $UploadLogo);
        $edit    = $db->query("UPDATE tb_setting SET logo='$UploadLogo' WHERE id='$ID'");

        echo "<script>window.location.href='app_setting.php?UpdateSuccess=true&page=$page';</script>";
    } else {
        echo "<script>window.location.href='app_setting.php?ExtentionFialed=true&page=$page';</script>";
    }
}
// Loader
if (isset($_POST["_uploadLoader"])) {
    // Info Page
    $page      = 'app_setting.php';
    // End Info Page

    $ID             = $_POST['ID'];
    $UploadLoader       = 'Loader_' . time() . "_" . $_FILES['UploadLoader']['name'];

    $dir            = "assets/apps/loader/";
    $timeUpload     = date('Y-m-d-h-m-i');
    $file_name      = $timeUpload . "_" . $_FILES["UploadLoader"]["name"];
    $size           = $_FILES["UploadLoader"]["size"];
    $tmp_file_name  = $_FILES["UploadLoader"]["tmp_name"];
    $filename       = $_FILES['UploadLoader']['name'];
    $exp            = explode('.', $filename);
    $ext            = end($exp);
    if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'gif' || $ext == 'svg') {
        move_uploaded_file($tmp_file_name, $dir . $UploadLoader);
        $edit    = $db->query("UPDATE tb_setting SET loader='$UploadLoader' WHERE id='$ID'");

        echo "<script>window.location.href='app_setting.php?UpdateSuccess=true&page=$page';</script>";
    } else {
        echo "<script>window.location.href='app_setting.php?ExtentionFialed=true&page=$page';</script>";
    }
}
// Bg
if (isset($_POST["_uploadBg"])) {
    // Info Page
    $page      = 'app_setting.php';
    // End Info Page

    $ID             = $_POST['ID'];
    $UploadBg       = 'Bg_' . time() . "_" . $_FILES['UploadBg']['name'];

    $dir            = "assets/apps/background/";
    $timeUpload     = date('Y-m-d-h-m-i');
    $file_name      = $timeUpload . "_" . $_FILES["UploadBg"]["name"];
    $size           = $_FILES["UploadBg"]["size"];
    $tmp_file_name  = $_FILES["UploadBg"]["tmp_name"];
    $filename       = $_FILES['UploadBg']['name'];
    $exp            = explode('.', $filename);
    $ext            = end($exp);
    if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'gif' || $ext == 'svg') {
        move_uploaded_file($tmp_file_name, $dir . $UploadBg);
        $edit    = $db->query("UPDATE tb_setting SET background_login='$UploadBg' WHERE id='$ID'");

        echo "<script>window.location.href='app_setting.php?UpdateSuccess=true&page=$page';</script>";
    } else {
        echo "<script>window.location.href='app_setting.php?ExtentionFialed=true&page=$page';</script>";
    }
}
// Edit
if (isset($_POST["edit_setting"])) {
    // Info Page
    $page      = 'app_setting.php';
    // End Info Page

    $ID                 = $_POST['ID'];
    $AppName            = $_POST['AppName'];
    $NameEmailHelpDesk  = $_POST['NameEmailHelpDesk'];
    $NameFooter         = $_POST['NameFooter'];

    $edit    = $db->query("UPDATE tb_setting SET app_name='$AppName',
                                                 email_helpdesk='$NameEmailHelpDesk',
                                                 footer='$NameFooter'
                           WHERE id='$ID'");

    if ($edit) {
        echo "<script>window.location.href='app_setting.php?UpdateSuccess=true&page=$page';</script>";
    } else {
        echo "<script>window.location.href='app_setting.php?UpdateFailed=true&page=$page';</script>";
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
                                        <font>ADMINISTRATION</font>
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
                                                        <div style="display: grid;justify-items: center;">
                                                            <img src="assets/apps/icon/<?= $resultdataSetting['icon'];  ?>" alt="Icon" style="width:200px" />
                                                            <br><br>
                                                            <input type="file" name="UploadIcon" required>
                                                            <hr />
                                                        </div>
                                                        <button class="btn btn-sm btn-primary" type="submit" name="_uploadIcon"><i class="fas fa-images"></i> Change Icon</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- Logo -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <form action="" method="POST" style="display: contents;" enctype="multipart/form-data">
                                                        <input type="hidden" name="ID" value="<?= $resultdataSetting['id']; ?>" />
                                                        <div style="display: grid;justify-items: center;">
                                                            <img src="assets/apps/logo/<?= $resultdataSetting['logo'];  ?>" alt="Logo" style="width:200px" />
                                                            <br><br>
                                                            <input type="file" name="UploadLogo" required>
                                                            <hr />
                                                        </div>
                                                        <button class="btn btn-sm btn-primary" type="submit" name="_uploadLogo"><i class="fas fa-images"></i> Change Logo</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- Loader -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <form action="" method="POST" style="display: contents;" enctype="multipart/form-data">
                                                        <input type="hidden" name="ID" value="<?= $resultdataSetting['id']; ?>" />
                                                        <div style="display: grid;justify-items: center;">
                                                            <img src="assets/apps/loader/<?= $resultdataSetting['loader'];  ?>" alt="Loader" style="width:200px" />
                                                            <br><br>
                                                            <input type="file" name="UploadLoader" required>
                                                            <hr />
                                                        </div>
                                                        <button class="btn btn-sm btn-primary" type="submit" name="_uploadLoader"><i class="fas fa-images"></i> Change Loader</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- Background Sign In -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <form action="" method="POST" style="display: contents;" enctype="multipart/form-data">
                                                        <input type="hidden" name="ID" value="<?= $resultdataSetting['id']; ?>" />
                                                        <div style="display: grid;justify-items: center;">
                                                            <img src="assets/apps/background/<?= $resultdataSetting['background_login'];  ?>" alt="Background Sign In" style="width:285px" />
                                                            <br><br>
                                                            <input type="file" name="UploadBg" required>
                                                            <hr />
                                                        </div>
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
                                                    <button type="submit" name="edit_setting" class="btn btn-sm btn-primary"><i class="fas fa-list"></i> Change Settings</button>
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
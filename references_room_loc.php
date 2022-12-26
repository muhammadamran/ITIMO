<?php
include 'include/connection.php';
include 'include/restrict.php';
include 'include/head.php';
include 'include/alert.php';
include 'include/dataTablesCSS.php';
?>
<title>Room Location - <?= $Rapps['app_name'] ?> | General Management</title>
<?php
// Insert
if (isset($_POST["add_room_loc"])) {
    // Info Page
    $page      = 'references_room_loc.php';
    // End Info Page

    $RoomLocation       = $_POST['RoomLocation'];
    $Remarks            = $_POST['Remarks'];

    $available = $db->query("SELECT room FROM references_room_loc WHERE room='$NameBranch'");
    if (mysqli_num_rows($available) == 1) {
        echo "<script>window.location.href='references_room_loc.php?Available=true&page=$page';</script>";
    } else {
        $insert    = $db->query("INSERT INTO references_room_loc
                          (id,room,remarks)
                           VALUES
                          ('','$RoomLocation','$Remarks')
                          ");

        if ($insert) {
            echo "<script>window.location.href='references_room_loc.php?InsertSuccess=true&page=$page';</script>";
        } else {
            echo "<script>window.location.href='references_room_loc.php?InsertFailed=true&page=$page';</script>";
        }
    }
}
// Edit
if (isset($_POST["edit_room_loc"])) {
    // Info Page
    $page      = 'references_room_loc.php';
    // End Info Page

    $ID                 = $_POST['ID'];
    $RoomLocation       = $_POST['RoomLocation'];
    $Remarks            = $_POST['Remarks'];

    $edit    = $db->query("UPDATE references_room_loc SET room='$RoomLocation',
                                                          remarks='$Remarks'
                           WHERE id='$ID'");

    if ($edit) {
        echo "<script>window.location.href='references_room_loc.php?UpdateSuccess=true&page=$page';</script>";
    } else {
        echo "<script>window.location.href='references_room_loc.php?UpdateFailed=true&page=$page';</script>";
    }
}
// Delete
if (isset($_POST["delete_room_loc"])) {
    // Info Page
    $page      = 'references_room_loc.php';
    // End Info Page

    $ID        = $_POST['ID'];

    $delete    = $db->query("DELETE FROM references_room_loc WHERE id='$ID'");

    if ($delete) {
        echo "<script>window.location.href='references_room_loc.php?DeleteSuccess=true&page=$page';</script>";
    } else {
        echo "<script>window.location.href='references_room_loc.php?DeleteFailed=true&page=$page';</script>";
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
                                    <i class="fas fa-asterisk icon-page"></i>
                                </div>
                                <div style="margin-left: 10px;">
                                    <div>
                                        <h2 class="pageheader-title" style="color: #003369;">Room Location </h2>
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
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Room Location</a></li>
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
                            <h5 class="card-header"><i class="fas fa-list"></i> Data Room Location</h5>
                            <?php include "modal/m_references_room_loc.php"; ?>
                            <hr />
                            <div class="card-body">
                                <div class="table-responsive">
                                    <?php include "table/t_references_room_loc.php"; ?>
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
<?php
include 'include/connection.php';
include 'include/restrict.php';
include 'include/head.php';
include 'include/alert.php';
include 'include/dataTablesCSS.php';
?>
<title>Phone Broken/Disposed - <?= $Rapps['app_name'] ?> | General Management</title>
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
                                    <i class="fas fa-mobile-alt icon-page"></i>
                                </div>
                                <div style="margin-left: 10px;">
                                    <div>
                                        <h2 class="pageheader-title" style="color: #003369;">Phone Broken/Disposed </h2>
                                    </div>
                                    <div style="margin-top: -10px;">
                                        <font>PHONE</font>
                                    </div>
                                </div>
                            </div>
                            <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Phone Broken/Disposed</a></li>
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
                            <div style="display: flex;justify-content: space-between;align-items: center;">
                                <div>
                                    <h5 class="card-header-custom">
                                        <i class="fas fa-list"></i> Data Phone Broken/Disposed <br><small>Read Information</small>
                                        <!-- Info -->
                                        <a href="#modal-Info" data-toggle="modal" class="badge badge-sm badge-light" title="Information"><i class="fas fa-info-circle"></i>
                                            <font class="f-action"></font>
                                        </a>
                                        <div class="modal fade" id="modal-Info">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="adm_email.php" method="POST">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Information</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <fieldset>
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <div class="table-responsive">
                                                                            <table id="dataTablesN" class="table table-striped table-bordered first">
                                                                                <thead>
                                                                                    <tr style="text-align: center;">
                                                                                        <th>Usage State</th>
                                                                                        <th>Status Available</th>
                                                                                        <th>Description</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>In Use</td>
                                                                                        <td>PERMANENT</td>
                                                                                        <td>
                                                                                            <span class="badge-dot badge-success mr-1"></span> Assets Users
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>In Use</td>
                                                                                        <td>TEMP</td>
                                                                                        <td>
                                                                                            <span class="badge-dot badge-info mr-1"></span> Assets Users Temp
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Not In Use</td>
                                                                                        <td>TEMP</td>
                                                                                        <td>
                                                                                            <span class="badge-dot badge-primary mr-1"></span> Assets IT Temp
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Not In Use</td>
                                                                                        <td>BROKEN</td>
                                                                                        <td>
                                                                                            <span class="badge-dot badge-danger mr-1"></span> Device Broken
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Not In Use</td>
                                                                                        <td>AVAILABLE</td>
                                                                                        <td>
                                                                                            <span class="badge-dot badge-brand mr-1"></span> Device can use
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Not In Use</td>
                                                                                        <td>DISPOSED</td>
                                                                                        <td>
                                                                                            <span class="badge-dot badge-dark mr-1"></span> Device Disposed
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>-</td>
                                                                                        <td>-</td>
                                                                                        <td>
                                                                                            <span class="badge-dot badge-light mr-1"></span> ???
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="javascript:;" class="btn btn-light" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Info -->
                                    </h5>
                                </div>
                            </div>
                            <hr />
                            <div style="padding: 15px;">
                                <div class="alert alert-primary" role="alert">
                                    <h4 class="alert-heading">Information!</h4>
                                    <?php
                                    $TotalData       = $db->query("SELECT COUNT(*) AS total_,
                                                                   (SELECT COUNT(*) FROM tb_phone_master WHERE status_available='AVAILABLE') AS t_AVAILABLE,
                                                                   (SELECT COUNT(*) FROM tb_phone_master WHERE status_available='BROKEN') AS t_BROKEN,
                                                                   (SELECT COUNT(*) FROM tb_phone_master WHERE status_available='DISPOSED') AS t_DISPOSED,
                                                                   (SELECT COUNT(*) FROM tb_phone_master WHERE status_available='PERMANENT') AS t_PERMANENT,
                                                                   (SELECT COUNT(*) FROM tb_phone_master WHERE status_available='TEMP') AS t_TEMP,
                                                                   (SELECT COUNT(*) FROM tb_phone_master WHERE status_available IS NULL OR status_available='' OR status_available='-' OR status_available='NA' OR status_available='N/A' OR status_available='#N/A') AS t_NULL
                                                                   FROM tb_phone_master");
                                    $resultTotalData = mysqli_fetch_array($TotalData);
                                    ?>
                                    <p>
                                        Total Serial Number <b><?= $resultTotalData['total_']; ?> Phone.</b> Details Status Devices:
                                    <ul>
                                        <li>BROKEN <b><?= $resultTotalData['t_BROKEN']; ?></b></li>
                                        <li>DISPOSED <b><?= $resultTotalData['t_DISPOSED']; ?></b></li>
                                    </ul>
                                    </p>
                                    <hr>
                                    <p class="mb-0">Total Details Status Devices Broken/Disposed: <b><?= $resultTotalData['t_BROKEN'] + $resultTotalData['t_DISPOSED']; ?> </b>.</p>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <?php include "table/t_phone_bd.php"; ?>
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
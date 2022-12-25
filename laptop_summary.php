<?php
include 'include/connection.php';
include 'include/restrict.php';
include 'include/head.php';
include 'include/alert.php';
include 'include/dataTablesCSS.php';
?>
<title>Laptop Summary - <?= $Rapps['app_name'] ?> | General Management</title>
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
                                    <i class="fas fa-laptop icon-page"></i>
                                </div>
                                <div style="margin-left: 10px;">
                                    <div>
                                        <h2 class="pageheader-title" style="color: #003369;">Laptop Summary </h2>
                                    </div>
                                    <div style="margin-top: -10px;">
                                        <font>LAPTOP</font>
                                    </div>
                                </div>
                            </div>
                            <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Laptop Summary</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Page Title -->

                <!-- Filter -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header"><i class="fas fa-filter"></i> Filter Data Laptop Summary</h5>
                            <div class="card-body">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="FindHostname">Hostname</label>
                                                <input type="text" class="form-control" name="FindHostname" id="FindHostname" value="<?= $FindHostname; ?>" placeholder="Hostname ..." readonly />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="FindProductName">Product Name</label>
                                                <input type="text" class="form-control" name="FindProductName" id="FindProductName" value="<?= $FindProductName; ?>" placeholder="ProductName ..." readonly />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="FindUsername">Username</label>
                                                <input type="text" class="form-control" name="FindUsername" id="FindUsername" value="<?= $FindUsername; ?>" placeholder="ProductName ..." readonly />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="IdEmail">Email</label>
                                                <input type="email" class="form-control" name="NameEmail" id="IdEmail" value="<?= $row['user_email']; ?>" placeholder="Email ..." required />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="IdRole">Role</label>
                                                <select class="form-control" name="NameRole" id="IdRole" placeholder="Role ..." required>
                                                    <option value="<?= $row['user_role'] ?>"><?= $row['user_role'] ?></option>
                                                    <option value="">Choose Role</option>
                                                    <option value="Admin">Admin</option>
                                                    <option value="User">User</option>
                                                    <option value="HRGA">HRGA</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Filter -->

                <!-- First Row -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header"><i class="fas fa-list"></i> Data Laptop Summary</h5>
                            <!-- Add Laptop  -->
                            <div class="row">
                                <div class="col-sm-3" style="margin-top: 15px;margin-left: 15px;">
                                    <a href="laptop_summary_add.php" target="_blank" class="btn btn-sm btn-primary" title="Add Laptop"><i class="fas fa-plus-circle"></i>
                                        <font class="f-action">Add Laptop</font>
                                    </a>
                                </div>
                            </div>
                            <!-- End Add Laptop  -->
                            <hr />
                            <div class="card-body">
                                <div class="table-responsive">
                                    <?php include "table/t_laptop_summary.php"; ?>
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
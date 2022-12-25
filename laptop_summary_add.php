<?php
include 'include/connection.php';
include 'include/restrict.php';
include 'include/head.php';
include 'include/alert.php';
include 'include/dataTablesCSS.php';
?>
<title>Add Laptop Summary - <?= $Rapps['app_name'] ?> | General Management</title>
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
                                        <h2 class="pageheader-title" style="color: #003369;">Add Laptop Summary </h2>
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
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Add</a></li>
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
                            <h5 class="card-header"><i class="fas fa-plus-circle"></i> Add Laptop</h5>
                            <div class="card-body">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="IdSerial Number">Serial Number <font style="color: red;">*</font></label>
                                                <input type="text" class="form-control" name="SerialNumber" id="IdSerialNumber" placeholder="Serial Number ..." required />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="IdProductName">Product Name <font style="color: red;">*</font></label>
                                                <input type="text" class="form-control" name="ProductName" id="IdProductName" placeholder="Product Name ..." required />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="IdBrand">Brand <font style="color: red;">*</font></label>
                                                <input type="text" class="form-control" name="Brand" id="IdBrand" placeholder="Brand ..." required />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="IdType">Type <font style="color: red;">*</font></label>
                                                <input type="text" class="form-control" name="Type" id="IdType" value="LAPTOP" placeholder="Type ..." readonly />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="IdRole">Role <font style="color: red;">*</font></label>
                                                <select class="form-control" name="NameRole" id="IdRole" placeholder="Role ..." required>
                                                    <option value="">Choose Role</option>
                                                    <option value="Admin">Admin</option>
                                                    <option value="User">User</option>
                                                    <option value="HRGA">HRGA</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="IdBranch">Branch <font style="color: red;">*</font></label>
                                                <select class="form-control" name="NameBranch" id="IdBranch" placeholder="Branch ..." required>
                                                    <option value="">Choose Branch</option>
                                                    <option value="Jakarta (JKT HO)">Jakarta (JKT HO)</option>
                                                    <option value="Cengkareng (CGK Office)">Cengkareng (CGK Office)</option>
                                                    <option value="Cengkareng (CGK Warehouse)">Cengkareng (CGK Warehouse)</option>
                                                    <option value="Cibitung Warehouse">Cibitung Warehouse</option>
                                                    <option value="BTM">BTM</option>
                                                    <option value="MDN">MDN</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <font style="color: red;">*</font> <i>Required.</i>
                                        </div>
                                    </div>
                                </fieldset>
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
<script type="text/javascript">
    // Product Name
    $(function() {
        $("#IdProductName").autocomplete({
            source: 'function/autocomplete/data.php?function=AutoProductName'
        });
    });
    // Brand
    $(function() {
        $("#IdBrand").autocomplete({
            source: 'function/autocomplete/data.php?function=AutoBrand'
        });
    });
    // Type
    $(function() {
        $("#IdType").autocomplete({
            source: 'function/autocomplete/data.php?function=AutoType'
        });
    });
</script>
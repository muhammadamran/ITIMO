<?php
$loginow = $_SESSION['username'];
include 'include/connection.php';
$role = $db->query("SELECT user_role FROM tb_user WHERE user_name = '$loginow' ");
$inv = mysqli_fetch_array($role);
?>
<?php $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)); ?>
<div class="nav-left-sidebar sidebar-light">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Navigation | Main Menu
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  <?= $uriSegments[2] == 'index.php' ? 'active' : '' ?>" href="index.php">
                            <i class="fas fa-chart-pie" id="sidebar-font"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  <?= $uriSegments[2] == 'search.php' ? 'active' : '' ?>" href="index.php">
                            <i class="fa fa-fw fa-search" id="sidebar-font"></i>
                            <span>Search</span>
                        </a>
                    </li>
                    <li class="nav-divider">
                        Navigation | IT
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $uriSegments[2] == 'laptop_summary.php' ? 'active' : '' ?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-laptop" aria-controls="submenu-1">
                            <i class="fas fa-laptop" id="sidebar-font"></i>
                            <span>Laptop</span>
                        </a>
                        <div id="submenu-laptop" class="collapse submenu <?= $uriSegments[2] == 'laptop_summary.php' ? 'show' : '' ?>">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'laptop_summary.php' ? 'active' : '' ?>" href="laptop_summary.php">
                                        <span>Summary</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="laptop_available.php">
                                        <span>Available</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="laptop_inuse.php">
                                        <span>In Use</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="laptop_broken.php">
                                        <span>Broken/Disposed</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-monitor-lcd" aria-controls="submenu-2">
                            <i class="fas fa-desktop" id="sidebar-font"></i>
                            <span>Monitor/LCD</span>
                        </a>
                        <div id="submenu-monitor-lcd" class="collapse submenu">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>Summary</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>Available</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>In Use</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>Broken/Disposed</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-pc" aria-controls="submenu-3">
                            <i class="fas fa-server" id="sidebar-font"></i>
                            <span>PC</span>
                        </a>
                        <div id="submenu-pc" class="collapse submenu">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>Summary</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>Available</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>In Use</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>Broken/Disposed</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-tv" aria-controls="submenu-4">
                            <i class="fas fa-tv" id="sidebar-font"></i>
                            <span>TV</span>
                        </a>
                        <div id="submenu-tv" class="collapse submenu">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>Summary</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>Available</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>In Use</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>Broken/Disposed</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-phone" aria-controls="submenu-5">
                            <i class="fas fa-mobile" id="sidebar-font"></i>
                            <span>Phone</span>
                        </a>
                        <div id="submenu-phone" class="collapse submenu">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>Summary</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>Available</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>In Use</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>Broken/Disposed</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-ipad" aria-controls="submenu-6">
                            <i class="fas fa-tablet" id="sidebar-font"></i>
                            <span>Ipad</span>
                        </a>
                        <div id="submenu-ipad" class="collapse submenu">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>Summary</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>Available</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>In Use</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>Broken/Disposed</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-headphone" aria-controls="submenu-7">
                            <i class="fas fa-headphones" id="sidebar-font"></i>
                            <span>Headphone</span>
                        </a>
                        <div id="submenu-headphone" class="collapse submenu">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>Summary</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>Available</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>In Use</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>Broken/Disposed</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-switch" aria-controls="submenu-8">
                            <i class="fas fa-fw fa-asterisk" id="sidebar-font"></i>
                            <span>Switch/Router/wifi/AP</span>
                        </a>
                        <div id="submenu-switch" class="collapse submenu">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>Summary</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>Available</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>In Use</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>Broken/Disposed</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-rf" aria-controls="submenu-9">
                            <i class="fas fa-fw fa-asterisk" id="sidebar-font"></i>
                            <span>RF Scanner</span>
                        </a>
                        <div id="submenu-rf" class="collapse submenu">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>Summary</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>Available</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>In Use</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>Broken/Disposed</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-etc" aria-controls="submenu-10">
                            <i class="fas fa-list" id="sidebar-font"></i>
                            <span>ETC</span>
                        </a>
                        <div id="submenu-etc" class="collapse submenu">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>Summary</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>Available</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>In Use</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>Broken/Disposed</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-divider">
                        <hr>
                        Navigation | HRGA
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-joine" aria-controls="submenu-11">
                            <i class="fas fa-fw fa-asterisk" id="sidebar-font"></i>
                            <span>Joiner</span>
                        </a>
                        <div id="submenu-joine" class="collapse submenu">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>Summary</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>Available</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>In Use</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>Broken/Disposed</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-transfer" aria-controls="submenu-12">
                            <i class="fas fa-fw fa-asterisk" id="sidebar-font"></i>
                            <span>Transfer</span>
                        </a>
                        <div id="submenu-transfer" class="collapse submenu">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>Summary</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>Available</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>In Use</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>Broken/Disposed</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-leaver" aria-controls="submenu-13">
                            <i class="fas fa-fw fa-asterisk" id="sidebar-font"></i>
                            <span>Leaver</span>
                        </a>
                        <div id="submenu-leaver" class="collapse submenu">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>Summary</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>Available</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>In Use</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="adm_user.php">
                                        <span>Broken/Disposed</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-divider">
                        <hr>
                        Navigation | Administration
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $uriSegments[2] == 'references_department.php' || $uriSegments[2] == 'references_branch.php' || $uriSegments[2] == 'references_positions.php' ? 'active' : '' ?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-setup" aria-controls="submenu-14">
                            <i class="fas fa-asterisk" id="sidebar-font"></i>
                            <span>References</span>
                        </a>
                        <div id="submenu-setup" class="collapse submenu <?= $uriSegments[2] == 'references_department.php' || $uriSegments[2] == 'references_branch.php' || $uriSegments[2] == 'references_positions.php' ? 'show' : '' ?>">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'references_department.php' ? 'active' : '' ?>" href="references_department.php">
                                        <span>Departement</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'references_positions.php' ? 'active' : '' ?>" href="references_positions.php">
                                        <span>Positions</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'references_branch.php' ? 'active' : '' ?>" href="references_branch.php">
                                        <span>Branch</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="adm_report.php">
                            <i class="fa fa-fw fa-file" id="sidebar-font"></i>
                            <span>Log Report</span>
                        </a>
                    </li>
                    <li class="nav-divider">
                        <hr>
                    </li>
                    <li class="nav-divider">
                        <p align="center" style="margin-top: -15px;">
                            <center>
                                <img src="assets/apps/logo/header.png"><br>INDONESIA
                            </center>
                            <hr />
                        </p>
                    </li>
                </ul>
            </div>
        </nav>

    </div>
</div>
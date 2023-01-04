<?php
$loginow = $_SESSION['username'];
include 'include/connection.php';
$role    = $db->query("SELECT user_role FROM tb_user WHERE user_name = '$loginow' ");
$Rrole   = mysqli_fetch_array($role);
?>
<?php $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)); ?>
<div class="nav-left-sidebar sidebar-light">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#" style="font-size: 18px;font-weight: bolder;color:#003369">NAVIGATION</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <!-- NAV MAIN MENU -->
                    <li class="nav-divider">
                        Navigation | Main Menu
                    </li>
                    <!-- DASHBOARD -->
                    <li class="nav-item">
                        <a class="nav-link <?= $uriSegments[2] == 'index.php' ? 'active' : '' ?>" href="index.php">
                            <i class="fas fa-chart-pie" id="sidebar-font"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <!-- END DASHBOARD -->
                    <!-- SEARCH -->
                    <li class="nav-item">
                        <a class="nav-link <?= $uriSegments[2] == 'search.php' ? 'active' : '' ?>" href="search.php">
                            <i class="fa fa-fw fa-search" id="sidebar-font"></i>
                            <span>Search</span>
                        </a>
                    </li>
                    <!-- END SEARCH -->
                    <!-- END NAV MAIN MENU -->
                    <!-- NAV IT -->
                    <li class="nav-divider">
                        Navigation | IT
                    </li>
                    <!-- LAPTOP 1 -->
                    <li class="nav-item">
                        <a class="nav-link <?=
                                            $uriSegments[2] == 'laptop_summary.php' ||
                                                $uriSegments[2] == 'laptop_summary_add.php' ||
                                                $uriSegments[2] == 'laptop_summary_edit.php' ||
                                                $uriSegments[2] == 'laptop_summary_allocate.php' ||
                                                $uriSegments[2] == 'laptop_summary_asset.php' ||
                                                $uriSegments[2] == 'laptop_summary_history.php' ||
                                                $uriSegments[2] == 'laptop_available.php' ||
                                                $uriSegments[2] == 'laptop_permanent.php' ||
                                                $uriSegments[2] == 'laptop_bd.php'
                                                ? 'active' : '' ?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-laptop" aria-controls="submenu-1">
                            <i class="fas fa-laptop" id="sidebar-font"></i>
                            <span>Laptop</span>
                        </a>
                        <div id="submenu-laptop" class="collapse submenu <?=
                                                                            $uriSegments[2] == 'laptop_summary.php' ||
                                                                                $uriSegments[2] == 'laptop_summary_add.php' ||
                                                                                $uriSegments[2] == 'laptop_summary_edit.php' ||
                                                                                $uriSegments[2] == 'laptop_summary_allocate.php' ||
                                                                                $uriSegments[2] == 'laptop_summary_asset.php' ||
                                                                                $uriSegments[2] == 'laptop_summary_history.php' ||
                                                                                $uriSegments[2] == 'laptop_available.php' ||
                                                                                $uriSegments[2] == 'laptop_permanent.php' ||
                                                                                $uriSegments[2] == 'laptop_bd.php'
                                                                                ? 'show' : '' ?>">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link <?=
                                                        $uriSegments[2] == 'laptop_summary.php' ||
                                                            $uriSegments[2] == 'laptop_summary_add.php' ||
                                                            $uriSegments[2] == 'laptop_summary_edit.php' ||
                                                            $uriSegments[2] == 'laptop_summary_allocate.php' ||
                                                            $uriSegments[2] == 'laptop_summary_asset.php' ||
                                                            $uriSegments[2] == 'laptop_summary_history.php'
                                                            ? 'active' : '' ?>" href="laptop_summary.php">
                                        <span>Summary</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'laptop_available.php' ? 'active' : '' ?>" href="laptop_available.php">
                                        <span>Available</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'laptop_permanent.php' ? 'active' : '' ?>" href="laptop_permanent.php">
                                        <span>Permanent</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'laptop_bd.php' ? 'active' : '' ?>" href="laptop_bd.php">
                                        <span>Broken/Disposed</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- END LAPTOP 1 -->
                    <!-- SERVER 2 -->
                    <li class="nav-item">
                        <a class="nav-link <?=
                                            $uriSegments[2] == 'server_summary.php' ||
                                                $uriSegments[2] == 'server_summary_add.php' ||
                                                $uriSegments[2] == 'server_summary_edit.php' ||
                                                $uriSegments[2] == 'server_summary_allocate.php' ||
                                                $uriSegments[2] == 'server_summary_asset.php' ||
                                                $uriSegments[2] == 'server_summary_history.php' ||
                                                $uriSegments[2] == 'server_available.php' ||
                                                $uriSegments[2] == 'server_permanent.php' ||
                                                $uriSegments[2] == 'server_bd.php'
                                                ? 'active' : '' ?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-server" aria-controls="submenu-2">
                            <i class="fas fa-server" id="sidebar-font"></i>
                            <span>Server</span>
                        </a>
                        <div id="submenu-server" class="collapse submenu <?=
                                                                            $uriSegments[2] == 'server_summary.php' ||
                                                                                $uriSegments[2] == 'server_summary_add.php' ||
                                                                                $uriSegments[2] == 'server_summary_edit.php' ||
                                                                                $uriSegments[2] == 'server_summary_allocate.php' ||
                                                                                $uriSegments[2] == 'server_summary_asset.php' ||
                                                                                $uriSegments[2] == 'server_summary_history.php' ||
                                                                                $uriSegments[2] == 'server_available.php' ||
                                                                                $uriSegments[2] == 'server_permanent.php' ||
                                                                                $uriSegments[2] == 'server_bd.php'
                                                                                ? 'show' : '' ?>">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link <?=
                                                        $uriSegments[2] == 'server_summary.php' ||
                                                            $uriSegments[2] == 'server_summary_add.php' ||
                                                            $uriSegments[2] == 'server_summary_edit.php' ||
                                                            $uriSegments[2] == 'server_summary_allocate.php' ||
                                                            $uriSegments[2] == 'server_summary_asset.php' ||
                                                            $uriSegments[2] == 'server_summary_history.php'
                                                            ? 'active' : '' ?>" href="server_summary.php">
                                        <span>Summary</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'server_available.php' ? 'active' : '' ?>" href="server_available.php">
                                        <span>Available</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'server_permanent.php' ? 'active' : '' ?>" href="server_permanent.php">
                                        <span>Permanent</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'server_bd.php' ? 'active' : '' ?>" href="server_bd.php">
                                        <span>Broken/Disposed</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- END SERVER 2 -->
                    <!-- PC 3 -->
                    <li class="nav-item">
                        <a class="nav-link <?=
                                            $uriSegments[2] == 'pc_summary.php' ||
                                                $uriSegments[2] == 'pc_summary_add.php' ||
                                                $uriSegments[2] == 'pc_summary_edit.php' ||
                                                $uriSegments[2] == 'pc_summary_allocate.php' ||
                                                $uriSegments[2] == 'pc_summary_asset.php' ||
                                                $uriSegments[2] == 'pc_summary_history.php' ||
                                                $uriSegments[2] == 'pc_available.php' ||
                                                $uriSegments[2] == 'pc_permanent.php' ||
                                                $uriSegments[2] == 'pc_bd.php'
                                                ? 'active' : '' ?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-pc" aria-controls="submenu-3">
                            <i class="fas fa-mobile" id="sidebar-font"></i>
                            <span>PC</span>
                        </a>
                        <div id="submenu-pc" class="collapse submenu <?=
                                                                        $uriSegments[2] == 'pc_summary.php' ||
                                                                            $uriSegments[2] == 'pc_summary_add.php' ||
                                                                            $uriSegments[2] == 'pc_summary_edit.php' ||
                                                                            $uriSegments[2] == 'pc_summary_allocate.php' ||
                                                                            $uriSegments[2] == 'pc_summary_asset.php' ||
                                                                            $uriSegments[2] == 'pc_summary_history.php' ||
                                                                            $uriSegments[2] == 'pc_available.php' ||
                                                                            $uriSegments[2] == 'pc_permanent.php' ||
                                                                            $uriSegments[2] == 'pc_bd.php'
                                                                            ? 'show' : '' ?>">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link <?=
                                                        $uriSegments[2] == 'pc_summary.php' ||
                                                            $uriSegments[2] == 'pc_summary_add.php' ||
                                                            $uriSegments[2] == 'pc_summary_edit.php' ||
                                                            $uriSegments[2] == 'pc_summary_allocate.php' ||
                                                            $uriSegments[2] == 'pc_summary_asset.php' ||
                                                            $uriSegments[2] == 'pc_summary_history.php'
                                                            ? 'active' : '' ?>" href="pc_summary.php">
                                        <span>Summary</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'pc_available.php' ? 'active' : '' ?>" href="pc_available.php">
                                        <span>Available</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'pc_permanent.php' ? 'active' : '' ?>" href="pc_permanent.php">
                                        <span>Permanent</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'pc_bd.php' ? 'active' : '' ?>" href="pc_bd.php">
                                        <span>Broken/Disposed</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- END PC 3 -->
                    <!-- MONITOR/LCD 4 -->
                    <li class="nav-item">
                        <a class="nav-link <?=
                                            $uriSegments[2] == 'monitor_summary.php' ||
                                                $uriSegments[2] == 'monitor_summary_add.php' ||
                                                $uriSegments[2] == 'monitor_summary_edit.php' ||
                                                $uriSegments[2] == 'monitor_summary_allocate.php' ||
                                                $uriSegments[2] == 'monitor_summary_asset.php' ||
                                                $uriSegments[2] == 'monitor_summary_history.php' ||
                                                $uriSegments[2] == 'monitor_available.php' ||
                                                $uriSegments[2] == 'monitor_permanent.php' ||
                                                $uriSegments[2] == 'monitor_bd.php'
                                                ? 'active' : '' ?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-monitor" aria-controls="submenu-4">
                            <i class="fas fa-desktop" id="sidebar-font"></i>
                            <span>Monitor/LCD</span>
                        </a>
                        <div id="submenu-monitor" class="collapse submenu <?=
                                                                            $uriSegments[2] == 'monitor_summary.php' ||
                                                                                $uriSegments[2] == 'monitor_summary_add.php' ||
                                                                                $uriSegments[2] == 'monitor_summary_edit.php' ||
                                                                                $uriSegments[2] == 'monitor_summary_allocate.php' ||
                                                                                $uriSegments[2] == 'monitor_summary_asset.php' ||
                                                                                $uriSegments[2] == 'monitor_summary_history.php' ||
                                                                                $uriSegments[2] == 'monitor_available.php' ||
                                                                                $uriSegments[2] == 'monitor_permanent.php' ||
                                                                                $uriSegments[2] == 'monitor_bd.php'
                                                                                ? 'show' : '' ?>">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link <?=
                                                        $uriSegments[2] == 'monitor_summary.php' ||
                                                            $uriSegments[2] == 'monitor_summary_add.php' ||
                                                            $uriSegments[2] == 'monitor_summary_edit.php' ||
                                                            $uriSegments[2] == 'monitor_summary_allocate.php' ||
                                                            $uriSegments[2] == 'monitor_summary_asset.php' ||
                                                            $uriSegments[2] == 'monitor_summary_history.php'
                                                            ? 'active' : '' ?>" href="monitor_summary.php">
                                        <span>Summary</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'monitor_available.php' ? 'active' : '' ?>" href="monitor_available.php">
                                        <span>Available</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'monitor_permanent.php' ? 'active' : '' ?>" href="monitor_permanent.php">
                                        <span>Permanent</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'monitor_bd.php' ? 'active' : '' ?>" href="monitor_bd.php">
                                        <span>Broken/Disposed</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- END MONITOR/LCD 4 -->
                    <!-- TV 5 -->
                    <li class="nav-item">
                        <a class="nav-link <?=
                                            $uriSegments[2] == 'tv_summary.php' ||
                                                $uriSegments[2] == 'tv_summary_add.php' ||
                                                $uriSegments[2] == 'tv_summary_edit.php' ||
                                                $uriSegments[2] == 'tv_summary_allocate.php' ||
                                                $uriSegments[2] == 'tv_summary_asset.php' ||
                                                $uriSegments[2] == 'tv_summary_history.php' ||
                                                $uriSegments[2] == 'tv_available.php' ||
                                                $uriSegments[2] == 'tv_permanent.php' ||
                                                $uriSegments[2] == 'tv_bd.php'
                                                ? 'active' : '' ?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-tv" aria-controls="submenu-5">
                            <i class="fas fa-tv" id="sidebar-font"></i>
                            <span>TV</span>
                        </a>
                        <div id="submenu-tv" class="collapse submenu <?=
                                                                        $uriSegments[2] == 'tv_summary.php' ||
                                                                            $uriSegments[2] == 'tv_summary_add.php' ||
                                                                            $uriSegments[2] == 'tv_summary_edit.php' ||
                                                                            $uriSegments[2] == 'tv_summary_allocate.php' ||
                                                                            $uriSegments[2] == 'tv_summary_asset.php' ||
                                                                            $uriSegments[2] == 'tv_summary_history.php' ||
                                                                            $uriSegments[2] == 'tv_available.php' ||
                                                                            $uriSegments[2] == 'tv_permanent.php' ||
                                                                            $uriSegments[2] == 'tv_bd.php'
                                                                            ? 'show' : '' ?>">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link <?=
                                                        $uriSegments[2] == 'tv_summary.php' ||
                                                            $uriSegments[2] == 'tv_summary_add.php' ||
                                                            $uriSegments[2] == 'tv_summary_edit.php' ||
                                                            $uriSegments[2] == 'tv_summary_allocate.php' ||
                                                            $uriSegments[2] == 'tv_summary_asset.php' ||
                                                            $uriSegments[2] == 'tv_summary_history.php'
                                                            ? 'active' : '' ?>" href="tv_summary.php">
                                        <span>Summary</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'tv_available.php' ? 'active' : '' ?>" href="tv_available.php">
                                        <span>Available</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'tv_permanent.php' ? 'active' : '' ?>" href="tv_permanent.php">
                                        <span>Permanent</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'tv_bd.php' ? 'active' : '' ?>" href="tv_bd.php">
                                        <span>Broken/Disposed</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- END TV 5 -->
                    <!-- PHONE 6 -->
                    <li class="nav-item">
                        <a class="nav-link <?=
                                            $uriSegments[2] == 'phone_summary.php' ||
                                                $uriSegments[2] == 'phone_summary_add.php' ||
                                                $uriSegments[2] == 'phone_summary_edit.php' ||
                                                $uriSegments[2] == 'phone_summary_allocate.php' ||
                                                $uriSegments[2] == 'phone_summary_asset.php' ||
                                                $uriSegments[2] == 'phone_summary_history.php' ||
                                                $uriSegments[2] == 'phone_available.php' ||
                                                $uriSegments[2] == 'phone_permanent.php' ||
                                                $uriSegments[2] == 'phone_bd.php'
                                                ? 'active' : '' ?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-phone" aria-controls="submenu-6">
                            <i class="fas fa-mobile-alt" id="sidebar-font"></i>
                            <span>Phone</span>
                        </a>
                        <div id="submenu-phone" class="collapse submenu <?=
                                                                        $uriSegments[2] == 'phone_summary.php' ||
                                                                            $uriSegments[2] == 'phone_summary_add.php' ||
                                                                            $uriSegments[2] == 'phone_summary_edit.php' ||
                                                                            $uriSegments[2] == 'phone_summary_allocate.php' ||
                                                                            $uriSegments[2] == 'phone_summary_asset.php' ||
                                                                            $uriSegments[2] == 'phone_summary_history.php' ||
                                                                            $uriSegments[2] == 'phone_available.php' ||
                                                                            $uriSegments[2] == 'phone_permanent.php' ||
                                                                            $uriSegments[2] == 'phone_bd.php'
                                                                            ? 'show' : '' ?>">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link <?=
                                                        $uriSegments[2] == 'phone_summary.php' ||
                                                            $uriSegments[2] == 'phone_summary_add.php' ||
                                                            $uriSegments[2] == 'phone_summary_edit.php' ||
                                                            $uriSegments[2] == 'phone_summary_allocate.php' ||
                                                            $uriSegments[2] == 'phone_summary_asset.php' ||
                                                            $uriSegments[2] == 'phone_summary_history.php'
                                                            ? 'active' : '' ?>" href="phone_summary.php">
                                        <span>Summary</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'phone_available.php' ? 'active' : '' ?>" href="phone_available.php">
                                        <span>Available</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'phone_permanent.php' ? 'active' : '' ?>" href="phone_permanent.php">
                                        <span>Permanent</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'phone_bd.php' ? 'active' : '' ?>" href="phone_bd.php">
                                        <span>Broken/Disposed</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- END PHONE 6 -->
                    <!-- IPAD 7 -->
                    <li class="nav-item">
                        <a class="nav-link <?=
                                            $uriSegments[2] == 'ipad_summary.php' ||
                                                $uriSegments[2] == 'ipad_summary_add.php' ||
                                                $uriSegments[2] == 'ipad_summary_edit.php' ||
                                                $uriSegments[2] == 'ipad_summary_allocate.php' ||
                                                $uriSegments[2] == 'ipad_summary_asset.php' ||
                                                $uriSegments[2] == 'ipad_summary_history.php' ||
                                                $uriSegments[2] == 'ipad_available.php' ||
                                                $uriSegments[2] == 'ipad_permanent.php' ||
                                                $uriSegments[2] == 'ipad_bd.php'
                                                ? 'active' : '' ?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-ipad" aria-controls="submenu-7">
                            <i class="fas fa-tablet-alt" id="sidebar-font"></i>
                            <span>Ipad</span>
                        </a>
                        <div id="submenu-ipad" class="collapse submenu <?=
                                                                        $uriSegments[2] == 'ipad_summary.php' ||
                                                                            $uriSegments[2] == 'ipad_summary_add.php' ||
                                                                            $uriSegments[2] == 'ipad_summary_edit.php' ||
                                                                            $uriSegments[2] == 'ipad_summary_allocate.php' ||
                                                                            $uriSegments[2] == 'ipad_summary_asset.php' ||
                                                                            $uriSegments[2] == 'ipad_summary_history.php' ||
                                                                            $uriSegments[2] == 'ipad_available.php' ||
                                                                            $uriSegments[2] == 'ipad_permanent.php' ||
                                                                            $uriSegments[2] == 'ipad_bd.php'
                                                                            ? 'show' : '' ?>">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link <?=
                                                        $uriSegments[2] == 'ipad_summary.php' ||
                                                            $uriSegments[2] == 'ipad_summary_add.php' ||
                                                            $uriSegments[2] == 'ipad_summary_edit.php' ||
                                                            $uriSegments[2] == 'ipad_summary_allocate.php' ||
                                                            $uriSegments[2] == 'ipad_summary_asset.php' ||
                                                            $uriSegments[2] == 'ipad_summary_history.php'
                                                            ? 'active' : '' ?>" href="ipad_summary.php">
                                        <span>Summary</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'ipad_available.php' ? 'active' : '' ?>" href="ipad_available.php">
                                        <span>Available</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'ipad_permanent.php' ? 'active' : '' ?>" href="ipad_permanent.php">
                                        <span>Permanent</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'ipad_bd.php' ? 'active' : '' ?>" href="ipad_bd.php">
                                        <span>Broken/Disposed</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- END IPAD 7 -->
                    <!-- HEANDPHONE 8 -->
                    <li class="nav-item">
                        <a class="nav-link <?=
                                            $uriSegments[2] == 'headphones_summary.php' ||
                                                $uriSegments[2] == 'headphones_summary_add.php' ||
                                                $uriSegments[2] == 'headphones_summary_edit.php' ||
                                                $uriSegments[2] == 'headphones_summary_allocate.php' ||
                                                $uriSegments[2] == 'headphones_summary_asset.php' ||
                                                $uriSegments[2] == 'headphones_summary_history.php' ||
                                                $uriSegments[2] == 'headphones_available.php' ||
                                                $uriSegments[2] == 'headphones_permanent.php' ||
                                                $uriSegments[2] == 'headphones_bd.php'
                                                ? 'active' : '' ?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-headphones" aria-controls="submenu-8">
                            <i class="fas fa-headphones-alt" id="sidebar-font"></i>
                            <span>Headphones</span>
                        </a>
                        <div id="submenu-headphones" class="collapse submenu <?=
                                                                                $uriSegments[2] == 'headphones_summary.php' ||
                                                                                    $uriSegments[2] == 'headphones_summary_add.php' ||
                                                                                    $uriSegments[2] == 'headphones_summary_edit.php' ||
                                                                                    $uriSegments[2] == 'headphones_summary_allocate.php' ||
                                                                                    $uriSegments[2] == 'headphones_summary_asset.php' ||
                                                                                    $uriSegments[2] == 'headphones_summary_history.php' ||
                                                                                    $uriSegments[2] == 'headphones_available.php' ||
                                                                                    $uriSegments[2] == 'headphones_permanent.php' ||
                                                                                    $uriSegments[2] == 'headphones_bd.php'
                                                                                    ? 'show' : '' ?>">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link <?=
                                                        $uriSegments[2] == 'headphones_summary.php' ||
                                                            $uriSegments[2] == 'headphones_summary_add.php' ||
                                                            $uriSegments[2] == 'headphones_summary_edit.php' ||
                                                            $uriSegments[2] == 'headphones_summary_allocate.php' ||
                                                            $uriSegments[2] == 'headphones_summary_asset.php' ||
                                                            $uriSegments[2] == 'headphones_summary_history.php'
                                                            ? 'active' : '' ?>" href="headphones_summary.php">
                                        <span>Summary</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'headphones_available.php' ? 'active' : '' ?>" href="headphones_available.php">
                                        <span>Available</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'headphones_permanent.php' ? 'active' : '' ?>" href="headphones_permanent.php">
                                        <span>Permanent</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'headphones_bd.php' ? 'active' : '' ?>" href="headphones_bd.php">
                                        <span>Broken/Disposed</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- END HEANDPHONE 8 -->
                    <!-- SWITCH/ROUTER 9 -->
                    <li class="nav-item">
                        <a class="nav-link <?=
                                            $uriSegments[2] == 'switch_summary.php' ||
                                                $uriSegments[2] == 'switch_summary_add.php' ||
                                                $uriSegments[2] == 'switch_summary_edit.php' ||
                                                $uriSegments[2] == 'switch_summary_allocate.php' ||
                                                $uriSegments[2] == 'switch_summary_asset.php' ||
                                                $uriSegments[2] == 'switch_summary_history.php' ||
                                                $uriSegments[2] == 'switch_available.php' ||
                                                $uriSegments[2] == 'switch_permanent.php' ||
                                                $uriSegments[2] == 'switch_bd.php'
                                                ? 'active' : '' ?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-switch" aria-controls="submenu-9">
                            <i class="fas fa-network-wired" id="sidebar-font"></i>
                            <span>Switch/Router Etc</span>
                        </a>
                        <div id="submenu-wifi" class="collapse submenu <?=
                                                                        $uriSegments[2] == 'switch_summary.php' ||
                                                                            $uriSegments[2] == 'switch_summary_add.php' ||
                                                                            $uriSegments[2] == 'switch_summary_edit.php' ||
                                                                            $uriSegments[2] == 'switch_summary_allocate.php' ||
                                                                            $uriSegments[2] == 'switch_summary_asset.php' ||
                                                                            $uriSegments[2] == 'switch_summary_history.php' ||
                                                                            $uriSegments[2] == 'switch_available.php' ||
                                                                            $uriSegments[2] == 'switch_permanent.php' ||
                                                                            $uriSegments[2] == 'switch_bd.php'
                                                                            ? 'show' : '' ?>">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link <?=
                                                        $uriSegments[2] == 'switch_summary.php' ||
                                                            $uriSegments[2] == 'switch_summary_add.php' ||
                                                            $uriSegments[2] == 'switch_summary_edit.php' ||
                                                            $uriSegments[2] == 'switch_summary_allocate.php' ||
                                                            $uriSegments[2] == 'switch_summary_asset.php' ||
                                                            $uriSegments[2] == 'switch_summary_history.php'
                                                            ? 'active' : '' ?>" href="switch_summary.php">
                                        <span>Summary</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'switch_available.php' ? 'active' : '' ?>" href="switch_available.php">
                                        <span>Available</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'switch_permanent.php' ? 'active' : '' ?>" href="switch_permanent.php">
                                        <span>Permanent</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'switch_bd.php' ? 'active' : '' ?>" href="switch_bd.php">
                                        <span>Broken/Disposed</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- END SWITCH/ROUTER 9 -->
                    <!-- RF SCANNER 10 -->
                    <li class="nav-item">
                        <a class="nav-link <?=
                                            $uriSegments[2] == 'scanner_summary.php' ||
                                                $uriSegments[2] == 'scanner_summary_add.php' ||
                                                $uriSegments[2] == 'scanner_summary_edit.php' ||
                                                $uriSegments[2] == 'scanner_summary_allocate.php' ||
                                                $uriSegments[2] == 'scanner_summary_asset.php' ||
                                                $uriSegments[2] == 'scanner_summary_history.php' ||
                                                $uriSegments[2] == 'scanner_available.php' ||
                                                $uriSegments[2] == 'scanner_permanent.php' ||
                                                $uriSegments[2] == 'scanner_bd.php'
                                                ? 'active' : '' ?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-scanner" aria-controls="submenu-10">
                            <i class="fas fa-broadcast-tower" id="sidebar-font"></i>
                            <span>RF Scanner</span>
                        </a>
                        <div id="submenu-scanner" class="collapse submenu <?=
                                                                            $uriSegments[2] == 'scanner_summary.php' ||
                                                                                $uriSegments[2] == 'scanner_summary_add.php' ||
                                                                                $uriSegments[2] == 'scanner_summary_edit.php' ||
                                                                                $uriSegments[2] == 'scanner_summary_allocate.php' ||
                                                                                $uriSegments[2] == 'scanner_summary_asset.php' ||
                                                                                $uriSegments[2] == 'scanner_summary_history.php' ||
                                                                                $uriSegments[2] == 'scanner_available.php' ||
                                                                                $uriSegments[2] == 'scanner_permanent.php' ||
                                                                                $uriSegments[2] == 'scanner_bd.php'
                                                                                ? 'show' : '' ?>">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link <?=
                                                        $uriSegments[2] == 'scanner_summary.php' ||
                                                            $uriSegments[2] == 'scanner_summary_add.php' ||
                                                            $uriSegments[2] == 'scanner_summary_edit.php' ||
                                                            $uriSegments[2] == 'scanner_summary_allocate.php' ||
                                                            $uriSegments[2] == 'scanner_summary_asset.php' ||
                                                            $uriSegments[2] == 'scanner_summary_history.php'
                                                            ? 'active' : '' ?>" href="scanner_summary.php">
                                        <span>Summary</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'scanner_available.php' ? 'active' : '' ?>" href="scanner_available.php">
                                        <span>Available</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'scanner_permanent.php' ? 'active' : '' ?>" href="scanner_permanent.php">
                                        <span>Permanent</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'scanner_bd.php' ? 'active' : '' ?>" href="scanner_bd.php">
                                        <span>Broken/Disposed</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- END RF SCANNER 10 -->
                    <!-- ETC 11 -->
                    <li class="nav-item">
                        <a class="nav-link <?=
                                            $uriSegments[2] == 'etc_summary.php' ||
                                                $uriSegments[2] == 'etc_summary_add.php' ||
                                                $uriSegments[2] == 'etc_summary_edit.php' ||
                                                $uriSegments[2] == 'etc_summary_allocate.php' ||
                                                $uriSegments[2] == 'etc_summary_asset.php' ||
                                                $uriSegments[2] == 'etc_summary_history.php' ||
                                                $uriSegments[2] == 'etc_available.php' ||
                                                $uriSegments[2] == 'etc_permanent.php' ||
                                                $uriSegments[2] == 'etc_bd.php'
                                                ? 'active' : '' ?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-etc" aria-controls="submenu-11">
                            <i class="fas fa-list" id="sidebar-font"></i>
                            <span>ETC</span>
                        </a>
                        <div id="submenu-etc" class="collapse submenu <?=
                                                                        $uriSegments[2] == 'etc_summary.php' ||
                                                                            $uriSegments[2] == 'etc_summary_add.php' ||
                                                                            $uriSegments[2] == 'etc_summary_edit.php' ||
                                                                            $uriSegments[2] == 'etc_summary_allocate.php' ||
                                                                            $uriSegments[2] == 'etc_summary_asset.php' ||
                                                                            $uriSegments[2] == 'etc_summary_history.php' ||
                                                                            $uriSegments[2] == 'etc_available.php' ||
                                                                            $uriSegments[2] == 'etc_permanent.php' ||
                                                                            $uriSegments[2] == 'etc_bd.php'
                                                                            ? 'show' : '' ?>">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link <?=
                                                        $uriSegments[2] == 'etc_summary.php' ||
                                                            $uriSegments[2] == 'etc_summary_add.php' ||
                                                            $uriSegments[2] == 'etc_summary_edit.php' ||
                                                            $uriSegments[2] == 'etc_summary_allocate.php' ||
                                                            $uriSegments[2] == 'etc_summary_asset.php' ||
                                                            $uriSegments[2] == 'etc_summary_history.php'
                                                            ? 'active' : '' ?>" href="etc_summary.php">
                                        <span>Summary</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'etc_available.php' ? 'active' : '' ?>" href="etc_available.php">
                                        <span>Available</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'etc_permanent.php' ? 'active' : '' ?>" href="etc_permanent.php">
                                        <span>Permanent</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'etc_bd.php' ? 'active' : '' ?>" href="etc_bd.php">
                                        <span>Broken/Disposed</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- END ETC 11 -->
                    <!-- END NAV IT -->
                    <!-- NAV HRGA -->
                    <li class="nav-divider">
                        <hr>
                        Navigation | HRGA
                    </li>
                    <!-- JOINER -->
                    <li class="nav-item">
                        <a class="nav-link <?= $uriSegments[2] == 'onboard_joiner_new.php' || $uriSegments[2] == 'onboard_joiner_process.php' || $uriSegments[2] == 'onboard_joined.php' || $uriSegments[2] == 'onboard_cancelled.php' ? 'active' : '' ?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-joiner" aria-controls="submenu-11">
                            <i class="fas fa-user-plus" id="sidebar-font"></i>
                            <span>Joiner</span>
                        </a>
                        <div id="submenu-joiner" class="collapse submenu <?= $uriSegments[2] == 'onboard_joiner_new.php' || $uriSegments[2] == 'onboard_joiner_process.php' || $uriSegments[2] == 'onboard_joined.php' || $uriSegments[2] == 'onboard_cancelled.php' ? 'show' : '' ?>">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'onboard_joiner_new.php' ? 'active' : '' ?> " href="onboard_joiner_new.php">
                                        <span>New</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'onboard_joiner_process.php' ? 'active' : '' ?>" href="onboard_joiner_process.php">
                                        <span>On Process</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'onboard_joined.php' ? 'active' : '' ?>" href="onboard_joined.php">
                                        <span>Joined/Done</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'onboard_cancelled.php' ? 'active' : '' ?>" href="onboard_cancelled.php">
                                        <span>Cancelled</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- END JOINER -->
                    <!-- TRANSFER -->
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-transfer" aria-controls="submenu-12">
                            <i class="fas fa-people-arrows" id="sidebar-font"></i>
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
                    <!-- END TRANSFER -->
                    <!-- LEAVER -->
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-leaver" aria-controls="submenu-13">
                            <i class="fas fa-user-minus" id="sidebar-font"></i>
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
                    <!-- END LEAVER -->
                    <!-- EMPLOYEE -->
                    <li class="nav-item">
                        <a class="nav-link <?= $uriSegments[2] == 'em_summary.php' || $uriSegments[2] == 'em_general_manager.php' || $uriSegments[2] == 'em_manager.php' || $uriSegments[2] == 'em_supervisor.php' || $uriSegments[2] == 'em_staff.php' ? 'active' : '' ?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-employee" aria-controls="submenu-14">
                            <i class="fas fa-id-card-alt" id="sidebar-font"></i>
                            <span>Employee</span>
                        </a>
                        <div id="submenu-employee" class="collapse submenu <?= $uriSegments[2] == 'em_summary.php' || $uriSegments[2] == 'em_general_manager.php' || $uriSegments[2] == 'em_manager.php' || $uriSegments[2] == 'em_supervisor.php' || $uriSegments[2] == 'em_staff.php' ? 'show' : '' ?>">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'em_summary.php' ? 'active' : '' ?>" href="em_summary.php">
                                        <span>Summary</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'em_general_manager.php' ? 'active' : '' ?>" href="em_general_manager.php">
                                        <span>General Manager</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'em_manager.php' ? 'active' : '' ?>" href="em_manager.php">
                                        <span>Manager</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'em_branch_manager.php' ? 'active' : '' ?>" href="em_branch_manager.php">
                                        <span>Branch Manager</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'em_supervisor.php' ? 'active' : '' ?>" href="em_supervisor.php">
                                        <span>Supervisor/Team Lead</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'em_staff.php' ? 'active' : '' ?>" href="em_staff.php">
                                        <span>Staff</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- END EMPLOYEE -->
                    <!-- NAV ADMINISTRATION -->
                    <li class="nav-divider">
                        <hr>
                        Navigation | Administration
                    </li>
                    <!-- REFERENCES -->
                    <li class="nav-item">
                        <a class="nav-link <?= $uriSegments[2] == 'references_bu.php' || $uriSegments[2] == 'references_positions.php' || $uriSegments[2] == 'references_branch.php' || $uriSegments[2] == 'references_room_loc.php' || $uriSegments[2] == 'references_costcenter.php'  ? 'active' : '' ?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-setup" aria-controls="submenu-14">
                            <i class="fas fa-asterisk" id="sidebar-font"></i>
                            <span>References</span>
                        </a>
                        <div id="submenu-setup" class="collapse submenu <?= $uriSegments[2] == 'references_bu.php' || $uriSegments[2] == 'references_positions.php' || $uriSegments[2] == 'references_branch.php' || $uriSegments[2] == 'references_room_loc.php' || $uriSegments[2] == 'references_costcenter.php'  ? 'show' : '' ?>">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'references_bu.php' ? 'active' : '' ?>" href="references_bu.php">
                                        <span>B.U & Functional</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'references_positions.php' ? 'active' : '' ?>" href="references_positions.php">
                                        <span>Dept. & Positions</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'references_branch.php' ? 'active' : '' ?>" href="references_branch.php">
                                        <span>Branch</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'references_room_loc.php' ? 'active' : '' ?>" href="references_room_loc.php">
                                        <span>Room Location</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'references_costcenter.php' ? 'active' : '' ?>" href="references_costcenter.php">
                                        <span>Cost Center</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- END REFERENCES -->
                    <!-- USERS APPS -->
                    <li class="nav-item">
                        <a class="nav-link <?= $uriSegments[2] == 'adm_user.php' ? 'active' : '' ?>" href="adm_user.php">
                            <i class="fas fa-users-cog" id="sidebar-font"></i>
                            <span>Users Apps</span>
                        </a>
                    </li>
                    <!-- END USERS APPS -->
                    <!-- EMAIL NOTIF SYSTEM -->
                    <li class="nav-item">
                        <a class="nav-link <?= $uriSegments[2] == 'adm_email.php' ? 'active' : '' ?>" href="adm_email.php">
                            <i class="fas fa-envelope-open-text" id="sidebar-font"></i>
                            <span>Email Notif System</span>
                        </a>
                    </li>
                    <!-- END EMAIL NOTIF SYSTEM -->
                    <!-- SETTINGS -->
                    <li class="nav-item">
                        <a class="nav-link <?= $uriSegments[2] == 'app_setting.php' ? 'active' : '' ?>" href="app_setting.php">
                            <i class="fas fa-cogs" id="sidebar-font"></i>
                            <span>Settings</span>
                        </a>
                    </li>
                    <!-- END SETTINGS -->
                    <!-- LOG REPORT -->
                    <li class="nav-item ">
                        <a class="nav-link <?= $uriSegments[2] == 'log_report.php' ? 'active' : '' ?>" href="log_report.php">
                            <i class="fa fa-fw fa-file" id="sidebar-font"></i>
                            <span>Log Report</span>
                        </a>
                    </li>
                    <!-- END LOG REPORT -->
                    <!-- END NAV ADMINISTRATION -->
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
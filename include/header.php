<?php
$userHeader = $_SESSION['username'];
$header     = $db->query("SELECT user_role FROM tb_user WHERE user_name='$userHeader' ");
$Rheader    = mysqli_fetch_array($header);
?>
<div class="dashboard-header">
  <nav class="navbar navbar-expand-lg bg-white fixed-top">
    <a class="navbar-brand" href="index.php"><img src="assets/apps/logo/<?= $Rapps['logo']; ?>" alt="logo" style="width: 200px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto navbar-right-top">
        <li class="nav-item">
          <button class="label-behind label-sm label-primary" style="margin-top: 19px;margin-right:5px;" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-content="Users Role"><i class="fas fa-user-lock"></i> <?= $Rheader['user_role']; ?></button>
        </li>
        <li class="nav-item dropdown nav-user">
          <button class="label-behind label-sm label-primary" style="margin-top: 19px;margin-left:5px" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-content="Manual Book"><i class="fas fa-book"></i> </button>
          <button class="label-behind label-sm label-primary" style="margin-top: 19px;margin-right:5px" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-content="Help"><i class="fas fa-question-circle"></i> </button>
        </li>
        <li class="nav-item dropdown nav-user">
          <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="header-profiles">
              <?php
              $myString = $userHeader;
              if (strstr($myString, '.')) {
                $FL    = explode('.', $myString);
                $F     = $FL[0];
                $L     = $FL[1];
                $showU = substr($F, 0, 1) . "" . substr($L, 0, 1);
                $showD = "<font style='text-transform: capitalize;'>$L</font>, <font style='text-transform: capitalize;'>$F</font> / Kuehne + Nagel";
              } else {
                $F     = $myString;
                $L     = $myString;
                $showU = substr($myString, 0, 1) . "" . substr($myString, 0, 1);
                $showD = "<font style='text-transform: capitalize;'>$L</font>, <font style='text-transform: capitalize;'>$F</font> / Kuehne + Nagel";
              }
              ?>
              <font style="text-transform: uppercase;"><?= $showU; ?></font>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
            <div class="nav-user-info">
              <h5 class="mb-0 text-white nav-user-name">
                <?= $showD; ?>
              </h5>
              <span class="status"></span><span class="ml-2">Available</span>
            </div>
            <a class="dropdown-item" href="user_account.php"><i class="fas fa-user mr-2"></i>Account</a>
            <a class="dropdown-item" href="user_setting.php"><i class="fas fa-cog mr-2"></i>Setting</a>
            <a class="dropdown-item" href="logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</div>
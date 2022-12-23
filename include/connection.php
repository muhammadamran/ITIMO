<?php
$dbhost       = 'localhost';
$dbusername   = 'root';
$dbpassword   = '';
$dbname       = 'behind';
$db           = new mysqli($dbhost, $dbusername, $dbpassword, $dbname) or die(mysqli_connect_errno());

$apps         = $db->query("SELECT * FROM tb_setting ORDER BY id ASC LIMIT 1");
$Rapps        = mysqli_fetch_array($apps);

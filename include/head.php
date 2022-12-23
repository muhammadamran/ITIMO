<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/apps/icon/logo.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/fixedHeader.bootstrap4.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendor/select2/css/select2.css">
    <link rel="stylesheet" href="assets/vendor/summernote/css/summernote-bs4.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <!-- Alert -->
    <script src="assets/sweet/sweetalert2.all.js"></script>
    <script src="assets/sweet/sweetalert2.all.min.js"></script>
    <script src="assets/sweet/sweetalert2.js"></script>
    <script src="assets/sweet/sweetalert2.min.js"></script>
    <!-- behind css -->
    <link rel="stylesheet" href="assets/libs/css/behind.css">
    <!-- Loading -->
    <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
    <!-- Font Poppins -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<style>
    body {
        font-family: Poppins, Open Sans, Helvetica, Arial, sans-serif;
    }
</style>
<?php
// DATE
function date_indo($date, $print_day = false)
{
    $day = array(
        1 =>
        'Monday',
        'Tuesday',
        'Wednesday',
        'Thursday',
        'Friday',
        'Saturday',
        'Sunday'
    );
    $month = array(
        1 =>
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December'
    );
    $split    = explode('-', $date);
    $tgl_indo = $split[2] . ' ' . $month[(int)$split[1]] . ' ' . $split[0];

    if ($print_day) {
        $num = date('N', strtotime($date));
        return $day[$num] . ', ' . $tgl_indo;
    }
    return $tgl_indo;
}
?>

<body>
    <div class="preloader">
        <div class="loading">
            <img src="assets/images/loader.svg" width="150">
        </div>
    </div>
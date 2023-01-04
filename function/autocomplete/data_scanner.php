<?php
include "../../include/connection.php";

if (function_exists($_GET['function'])) {
    $_GET['function']();
}

// PC
// Add PC
// Product Name
function AutoProductName()
{
    global $db;
    $searchTerm = $_GET['term'];
    $sql = $db->query("SELECT product_name FROM tb_scanner_master  WHERE product_name LIKE '%" . $searchTerm . "%'  GROUP BY product_name ORDER BY id ASC LIMIT 10");
    while ($row = mysqli_fetch_array($sql)) {
        $data[] = $row['product_name'];
    }

    $check = json_encode($data);

    if ($check == null || $check == 'null') {
        $data = 'Data not found';
    } else {
        echo json_encode($data);
    }
}
// Brand
function AutoBrand()
{
    global $db;
    $searchTerm = $_GET['term'];
    $sql = $db->query("SELECT brand FROM tb_scanner_master  WHERE brand LIKE '%" . $searchTerm . "%'  GROUP BY brand ORDER BY id ASC LIMIT 10");
    while ($row = mysqli_fetch_array($sql)) {
        $data[] = $row['brand'];
    }

    $check = json_encode($data);

    if ($check == null || $check == 'null') {
        $data = 'Data not found';
    } else {
        echo json_encode($data);
    }
}
// Username
function AutoUsername()
{
    global $db;
    $searchTerm = $_GET['term'];
    $sql = $db->query("SELECT username FROM tb_employee  WHERE username LIKE '%" . $searchTerm . "%'  GROUP BY username ORDER BY id ASC LIMIT 10");
    while ($row = mysqli_fetch_array($sql)) {
        $data[] = $row['username'];
    }

    $check = json_encode($data);

    if ($check == null || $check == 'null') {
        $data = 'Data not found';
    } else {
        echo json_encode($data);
    }
}
// End Add PC
// Find Filter PC
function AutoFindSerialNumber()
{
    global $db;
    $searchTerm = $_GET['term'];
    $sql = $db->query("SELECT serial_number FROM tb_scanner_master  WHERE serial_number LIKE '%" . $searchTerm . "%' ORDER BY id ASC LIMIT 10");
    while ($row = mysqli_fetch_array($sql)) {
        $data[] = $row['serial_number'];
    }

    $check = json_encode($data);

    if ($check == null || $check == 'null') {
        $data = 'Data not found';
    } else {
        echo json_encode($data);
    }
}
function AutoFindProductName()
{
    global $db;
    $searchTerm = $_GET['term'];
    $sql = $db->query("SELECT product_name FROM tb_scanner_master  WHERE product_name LIKE '%" . $searchTerm . "%' GROUP BY product_name ORDER BY id ASC LIMIT 10");
    while ($row = mysqli_fetch_array($sql)) {
        $data[] = $row['product_name'];
    }

    $check = json_encode($data);

    if ($check == null || $check == 'null') {
        $data = 'Data not found';
    } else {
        echo json_encode($data);
    }
}
function AutoFindBrand()
{
    global $db;
    $searchTerm = $_GET['term'];
    $sql = $db->query("SELECT brand FROM tb_scanner_master  WHERE brand LIKE '%" . $searchTerm . "%' GROUP BY brand ORDER BY id ASC LIMIT 10");
    while ($row = mysqli_fetch_array($sql)) {
        $data[] = $row['brand'];
    }

    $check = json_encode($data);

    if ($check == null || $check == 'null') {
        $data = 'Data not found';
    } else {
        echo json_encode($data);
    }
}
function AutoFindHostname()
{
    global $db;
    $searchTerm = $_GET['term'];
    $sql = $db->query("SELECT hostname FROM tb_scanner_master  WHERE hostname LIKE '%" . $searchTerm . "%' ORDER BY id ASC LIMIT 10");
    while ($row = mysqli_fetch_array($sql)) {
        $data[] = $row['hostname'];
    }

    $check = json_encode($data);

    if ($check == null || $check == 'null') {
        $data = 'Data not found';
    } else {
        echo json_encode($data);
    }
}
function AutoFindUsername()
{
    global $db;
    $searchTerm = $_GET['term'];
    $sql = $db->query("SELECT username FROM tb_scanner_master  WHERE username LIKE '%" . $searchTerm . "%' GROUP BY username ORDER BY id ASC LIMIT 10");
    while ($row = mysqli_fetch_array($sql)) {
        $data[] = $row['username'];
    }

    $check = json_encode($data);

    if ($check == null || $check == 'null') {
        $data = 'Data not found';
    } else {
        echo json_encode($data);
    }
}
function AutoFindUS()
{
    global $db;
    $searchTerm = $_GET['term'];
    $sql = $db->query("SELECT status_use FROM tb_scanner_master  WHERE status_use LIKE '%" . $searchTerm . "%' GROUP BY status_use ORDER BY id ASC LIMIT 10");
    while ($row = mysqli_fetch_array($sql)) {
        $data[] = $row['status_use'];
    }

    $check = json_encode($data);

    if ($check == null || $check == 'null') {
        $data = 'Data not found';
    } else {
        echo json_encode($data);
    }
}
function AutoFindOS()
{
    global $db;
    $searchTerm = $_GET['term'];
    $sql = $db->query("SELECT status_available FROM tb_scanner_master  WHERE status_available LIKE '%" . $searchTerm . "%' GROUP BY status_available ORDER BY id ASC LIMIT 10");
    while ($row = mysqli_fetch_array($sql)) {
        $data[] = $row['status_available'];
    }

    $check = json_encode($data);

    if ($check == null || $check == 'null') {
        $data = 'Data not found';
    } else {
        echo json_encode($data);
    }
}
function AutoFindBranchLoc()
{
    global $db;
    $searchTerm = $_GET['term'];
    $sql = $db->query("SELECT location_branch FROM tb_scanner_master  WHERE location_branch LIKE '%" . $searchTerm . "%' GROUP BY location_branch ORDER BY id ASC LIMIT 10");
    while ($row = mysqli_fetch_array($sql)) {
        $data[] = $row['location_branch'];
    }

    $check = json_encode($data);

    if ($check == null || $check == 'null') {
        $data = 'Data not found';
    } else {
        echo json_encode($data);
    }
}
// End Find Filter PC
// END PC
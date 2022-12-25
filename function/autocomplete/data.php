<?php
include "../../include/connection.php";

if (function_exists($_GET['function'])) {
    $_GET['function']();
}

// LAPTOP
// Add Laptop
// Product Name
function AutoProductName()
{
    global $db;
    $searchTerm = $_GET['term'];
    $sql = $db->query("SELECT product_name FROM tb_laptop_master  WHERE product_name LIKE '%" . $searchTerm . "%'  GROUP BY product_name ORDER BY id ASC LIMIT 10");
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
    $sql = $db->query("SELECT brand FROM tb_laptop_master  WHERE brand LIKE '%" . $searchTerm . "%'  GROUP BY brand ORDER BY id ASC LIMIT 10");
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
// Type
function AutoType()
{
    global $db;
    $searchTerm = $_GET['term'];
    $sql = $db->query("SELECT type FROM tb_laptop_master  WHERE type LIKE '%" . $searchTerm . "%'  GROUP BY type ORDER BY id ASC LIMIT 10");
    while ($row = mysqli_fetch_array($sql)) {
        $data[] = $row['type'];
    }

    $check = json_encode($data);

    if ($check == null || $check == 'null') {
        $data = 'Data not found';
    } else {
        echo json_encode($data);
    }
}
// End Add Laptop
// END LAPTOP
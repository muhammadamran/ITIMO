<?php
include "../../include/connection.php";

if (function_exists($_GET['function'])) {
    $_GET['function']();
}

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

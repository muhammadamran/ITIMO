<?php
include 'include/connection.php';
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<!-- <div style="color:#000"> -->
<div style="color:transparent">
    <?php
    require_once "Classes/PHPExcel.php";
    $path = "files/import/monitor/" . $file_name;
    $reader = PHPExcel_IOFactory::createReaderForFile($path);
    $excel_Obj = $reader->load($path);

    $worksheet = $excel_Obj->getSheet('0');
    $colomncount = $worksheet->getHighestDataColumn();
    $rowcount = $worksheet->getHighestRow();
    $colomncount_number = PHPExcel_Cell::columnIndexFromString($colomncount);
    $insertquery = 'INSERT INTO tb_monitor_master (serial_number,product_name,brand,type,memory,disk_type,disk,processor,device_releases_years,hostname,username,status_use,status_available,location_branch,location_room,cost_center,po_no,asset_no,asset_of,purchase_year,purchase_batch,prices,remarks) VALUES ';
    $subquery = '';
    for ($row = 2; $row <= $rowcount; $row++) {
        $subquery = $subquery . ' (';
        for ($col = 0; $col < $colomncount_number; $col++) {
            $subquery = $subquery . '\'' . $worksheet->getCell(PHPExcel_Cell::stringFromColumnIndex($col) . $row)->getValue() . '\',';
        }
        $subquery          = substr($subquery, 0, strlen($subquery) - 1);
        $subquery          = $subquery . ')' . ' , ';
    }

    $insertquery = $insertquery . $subquery;
    $insertquery = substr($insertquery, 0, strlen($insertquery) - 2);
    if (mysqli_query($db, $insertquery)) {
    } else {
        // echo "Error: " . $insertquery . "<br>" . mysqli_error($db);
    }
    ?>
</div>
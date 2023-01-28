<?php include "include/connection.php";
header("Content-type: application/vnd-ms-excel");
date_default_timezone_set("Asia/Bangkok");
$datenow = date('d-m-Y h-i-s');

header("Content-Disposition: attachment; filename=Report_Laptop_$datenow.xls");
$Total = $_GET['Total'];
$User  = $_GET['User'];
?>
<!-- Font Poppins -->
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<!-- FONTAWESON 5 -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/solid.css" integrity="sha384-DhmF1FmzR9+RBLmbsAts3Sp+i6cZMWQwNTRsew7pO/e4gvzqmzcpAzhDIwllPonQ" crossorigin="anonymous" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/fontawesome.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous" />
<style>
    body {
        font-family: Poppins, Open Sans, Helvetica, Arial, sans-serif;
    }
</style>
<table border="1">
    <tr>
        <th>IT IMO</th>
        <th colspan="22">
            <font style="font-size: 30px;">Data Laptop</font>
            <br>
            <font style="font-size: 12px;">Description: Total <?= $Total ?> Laptop </font>
        </th>
        <th>
            Info:
            <br>
            <font style="font-size: 12px;">By <?= $User ?></font>
            <br>
            <font style="font-size: 12px;">Data Time <?= date('Y-m-d H:i:s A'); ?> </font>
        </th>
    </tr>
</table>
<table>
    <tr>
        <td colspan="24">
            <hr>
        </td>
    </tr>
</table>
<table border="1">
    <thead>
        <tr style="font-weight: 900;background:#003369;color:#fff">
            <td>No.</td>
            <td>Serial Number</td>
            <td>Product Name</td>
            <td>Brand</td>
            <td>Type</td>
            <td>RAM/Memory</td>
            <td>Disk</td>
            <td>Disk Type</td>
            <td>Processor</td>
            <td>Device Release</td>
            <td>Hostname</td>
            <td>Username</td>
            <td>Status Use</td>
            <td>Status Available</td>
            <td>Branch Location</td>
            <td>Branch Room</td>
            <td>Cost Center</td>
            <td>PO Number</td>
            <td>Asset Number</td>
            <td>Asset of</td>
            <td>Purchase Year</td>
            <td>Purchase Batch</td>
            <td>Price</td>
            <td>Remarks</td>
        </tr>
    </thead>
    <tbody>
        <?php
        $dataTable = $db->query("SELECT *,lap.id,emp.id AS idEmp,lap.username AS userLap,emp.username AS userEmp,lap.cost_center AS CC
        FROM tb_laptop_master AS lap
        LEFT OUTER JOIN tb_employee AS emp ON lap.username=emp.username
        ORDER BY lap.id", 0);

        if (mysqli_num_rows($dataTable) > 0) {
            $no = 0;
            while ($row = mysqli_fetch_array($dataTable)) {
                $no++;
        ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $row['serial_number'] == '' ? '<center><font style="color:red"><i>Empty</i></font></center>' : $row['serial_number'] ?></td>
                    <td><?= $row['product_name'] == '' ? '<center><font style="color:red"><i>Empty</i></font></center>' : $row['product_name'] ?></td>
                    <td><?= $row['brand'] == '' ? '<center><font style="color:red"><i>Empty</i></font></center>' : $row['brand'] ?></td>
                    <td><?= $row['type'] == '' ? '<center><font style="color:red"><i>Empty</i></font></center>' : $row['type'] ?></td>
                    <td><?= $row['memory'] == '' ? '<center><font style="color:red"><i>Empty</i></font></center>' : $row['memory'] ?></td>
                    <td><?= $row['disk'] == '' ? '<center><font style="color:red"><i>Empty</i></font></center>' : $row['disk'] ?></td>
                    <td><?= $row['disk_type'] == '' ? '<center><font style="color:red"><i>Empty</i></font></center>' : $row['disk_type'] ?></td>
                    <td><?= $row['processor'] == '' ? '<center><font style="color:red"><i>Empty</i></font></center>' : $row['processor'] ?></td>
                    <td><?= $row['device_releases_years'] == '' ? '<center><font style="color:red"><i>Empty</i></font></center>' : $row['device_releases_years'] ?></td>
                    <td><?= $row['hostname'] == '' ? '<center><font style="color:red"><i>Empty</i></font></center>' : $row['hostname'] ?></td>
                    <td><?= $row['username'] == '' ? '<center><font style="color:red"><i>Empty</i></font></center>' : $row['username'] ?></td>
                    <td><?= $row['status_use'] == '' ? '<center><font style="color:red"><i>Empty</i></font></center>' : $row['status_use'] ?></td>
                    <td><?= $row['status_available'] == '' ? '<center><font style="color:red"><i>Empty</i></font></center>' : $row['status_available'] ?></td>
                    <td><?= $row['location_branch'] == '' ? '<center><font style="color:red"><i>Empty</i></font></center>' : $row['location_branch'] ?></td>
                    <td><?= $row['location_room'] == '' ? '<center><font style="color:red"><i>Empty</i></font></center>' : $row['location_room'] ?></td>
                    <td><?= $row['cost_center'] == '' ? '<center><font style="color:red"><i>Empty</i></font></center>' : $row['cost_center'] ?></td>
                    <td><?= $row['po_no'] == '' ? '<center><font style="color:red"><i>Empty</i></font></center>' : $row['po_no'] ?></td>
                    <td><?= $row['asset_no'] == '' ? '<center><font style="color:red"><i>Empty</i></font></center>' : $row['asset_no'] ?></td>
                    <td><?= $row['asset_of'] == '' ? '<center><font style="color:red"><i>Empty</i></font></center>' : $row['asset_of'] ?></td>
                    <td><?= $row['purchase_year'] == '' ? '<center><font style="color:red"><i>Empty</i></font></center>' : $row['purchase_year'] ?></td>
                    <td><?= $row['purchase_batch'] == '' ? '<center><font style="color:red"><i>Empty</i></font></center>' : $row['purchase_batch'] ?></td>
                    <td><?= $row['prices'] == '' ? '<center><font style="color:red"><i>Empty</i></font></center>' : $row['prices'] ?></td>
                    <td><?= $row['remarks'] == '' ? '<center><font style="color:red"><i>Empty</i></font></center>' : $row['remarks'] ?></td>
                </tr>
            <?php } ?>
        <?php } else { ?>
        <?php } ?>
    </tbody>
</table>
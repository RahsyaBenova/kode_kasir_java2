<?php
    $conn = mysqli_connect("localhost","root","","penjualanbarang");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Penjualan</title>
    <style>
        table {
            margin-right: auto; margin-left: auto; border-collapse: collapse;
        }
        th, td {
            padding: 10px;
        }
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body onload="window.print()">
    <div>
        <div>
            <h1 style="text-align: center;">LAPORAN PENJUALAN</h1>
        </div>
        <br>
        <div>
            <h3 style="text-align: center;">Tanggal : <?php $tanggal = date('Y-m-d'); echo $tanggal; ?></h4>
            <table border="1">
                <thead>
                    <th>Id Penjualan</th>
                    <th>Tanggal</th>
                    <th>Id User</th>
                    <th>Id Barang</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                </thead>
                <tbody>
                <?php 
                    $sql = "SELECT * FROM penjualan";
                    $query = mysqli_query($conn, $sql);
                    while($r= mysqli_fetch_array($query)){
                ?>
                    <tr>
                        <td><?php echo $r['id_penjualan'] ?></td>
                        <td><?php echo $r['tanggal'] ?></td>
                        <td><?php echo $r['id_user'] ?></td>
                        <td><?php echo $r['id_barang'] ?></td>
                        <td><?php echo $r['jumlah'] ?></td>
                        <td><?php echo $r['total'] ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
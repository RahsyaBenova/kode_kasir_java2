<?php
    $conn = mysqli_connect("localhost","root","","penjualanbarang");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Barang</title>
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
            <h1 style="text-align: center;">LAPORAN BARANG</h1>
        </div>
        <br>
        <div>
            <h3 style="text-align: center;">Tanggal : <?php $tanggal = date('Y-m-d'); echo $tanggal; ?></h4>
            <table border="1">
                <thead>
                    <th>Id Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Stok</th>
                </thead>
                <tbody>
                <?php 
                    $sql = "SELECT * FROM barang";
                    $query = mysqli_query($conn, $sql);
                    while($r= mysqli_fetch_array($query)){
                ?>
                    <tr>
                        <td><?php echo $r['id_barang'] ?></td>
                        <td><?php echo $r['nama_barang'] ?></td>
                        <td><?php echo $r['harga'] ?></td>
                        <td><?php echo $r['stok'] ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
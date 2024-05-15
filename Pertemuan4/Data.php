<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Aryo</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <?php
    $products = [
        ["barang" => "Printer", "Harga" => 1200000, "Deskripsi" => "Printer merk HP", "Stok" => 15],
        ["barang" => "Tablet", "Harga" => 2000000, "Deskripsi" => "Tablet merk Samsung", "Stok" => 8],
        ["barang" => "Mouse", "Harga" => 150000, "Deskripsi" => "Mouse merk Logitech", "Stok" => 50],
        ["barang" => "Speaker", "Harga" => 500000, "Deskripsi" => "Speaker merk JBL", "Stok" => 25],
        ["barang" => "Headset", "Harga" => 250000, "Deskripsi" => "Headset merk Sony", "Stok" => 30],
    ];


    $new_product = [
        "barang" => $_POST['nma_barang'],
        "Harga" => $_POST['hrga'],
        "Deskripsi" => $_POST['dkripsi'],
        "Stok" => $_POST['tok']
    ];
    $products[] = $new_product;

    ?>
    <h1>Daftar Produk</h1>
    <table bord>
        <tr>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>Stok</th>
        </tr>
        <?php foreach ($products as $keterangan) { ?>
            <tr>
                <td><?php echo $keterangan['barang']?></td>
                <td><?php echo $keterangan['Harga']?></td>
                <td><?php echo $keterangan['Deskripsi']?></td>
                <td><?php echo $keterangan['Stok']?></td>

            </tr>
        <?php } ?>
    </table>
</body>

</html>
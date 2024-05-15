<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pertemuan 4</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container my-5">
        <h3>Form Produk</h3>
        <form action="Data.php" method="post">
            <div class="form-group">
                <label for="nma_barang">Nama Barang :</label>
                <input id="nma_barang" name="nma_barang" type="text" required="required" class="form-control">
            </div>
            <div class="form-group">
                <label for="hrga">Harga :</label>
                <input id="hrga" name="hrga" type="text" required="required" class="form-control">
            </div>
            <div class="form-group">
                <label for="dkripsi">Deskripsi :</label>
                <input id="dkripsi" name="dkripsi" type="text" class="form-control" required="required">
            </div>
            <div class="form-group">
                <label for="tok">Stok :</label>
                <input id="tok" name="tok" type="text" class="form-control" required="required">
            </div>
            <div class="form-group">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>


</body>

</html>